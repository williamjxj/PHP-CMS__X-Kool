<?php
# instead in php.ini, set PEAR PATH here.

define('SMARTY_DIR', SITEROOT.'/include/Smarty-3.0.4/libs/');
require_once(SMARTY_DIR . 'Smarty.class.php');
require_once('MDB2.php');

class BaseClass extends Smarty
{
	var $url, $self, $mdb2, $template_dir, $compile_dir, $config_dir, $cache_dir, $session;
	
	function __construct() 
	{
		parent::__construct();
		$this->url = $_SERVER["PHP_SELF"];
		$this->self = basename($this->url, '.php'); // will extend in sub-class.

		$this->session = array(
			'sql' => $this->self.'_sql',
			'rows' => $this->self.'_rows',
			'magic_sql' => $this->self.'_magic_sql',
		);
		
		$this->mdb2 = $this->pear_connect_admin();
		$this->caching = false;

		$this->auto_literal = true;
		$this->template_dir = SITEROOT.'themes/default/templates/';
		$this->compile_dir = SITEROOT.'templates_c/';
		$this->config_dir = SITEROOT.'configs/';
		$this->cache_dir = SITEROOT.'cache/';
		$this->project  = 'church';
	}
	# in this project, use PEAR MDB2 instead of Pure MySQL.
	public function pear_connect_admin() 
	{
		if (preg_match("/^(192\.168|127\.)/", $_SERVER['REMOTE_ADDR']) || preg_match("/::1/", $_SERVER['REMOTE_ADDR'])) { 
			$dsn = array (
				'phptype' => 'mysqli',
				'username' => 'church',
				'password' => 'Benjamin001!',
				'hostspec' => 'localhost',
				'database' => 'church'
			);
		}
		else {
			$dsn = array (
				'phptype' => 'mysqli',
				'username' => 'church',
				'password' => 'Benjamin001!',
				'hostspec' => 'williamjxj.ipowermysql.com',
				'database' => 'church'
			);
		}  	
		$options = array(
			'debug'       => 2,
			'persistent'  => true,
			'portability' => MDB2_PORTABILITY_ALL,
		);
		$mdb2 = MDB2::factory($dsn, $options);
		if (PEAR::isError($mdb2)) {
			die($mdb2->getMessage());
		}
		$mdb2->query("SET NAMES 'utf8'");
		return $mdb2;
	}
	
	function check_level() {
		//$query = "select level from users u, login_info li where li.uid=u.uid and li.session='".session_id()."'";
		$query = "select level from users where uid=".$_SESSION['userid'];
		$res = $this->mdb2->query($query);
		if (PEAR::isError($res)) {
			die($res->getMessage());
		}
		$row = $res->fetchRow();
	}
	function update_expire_session($session) {
		$sql = "update users set session=NULL, expired=NOW() where session = '".$session."'";
		$affected = $this->mdb2->exec($sql);
		// Always check that result is not an error
		if (PEAR::isError($affected)) {
			die($affected->getMessage());
		}
	}
    function check_email($emailAddress) {
        if (preg_match('/\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i', $emailAddress)){
            $emailArray = explode("@",$emailAddress);
            if (checkdnsrr($emailArray[1])){
                return TRUE;
            }
        }
        return false;
    }
	function get_date($date) {
		return preg_match("/YYYY-MM-DD/i", $date) ? '' : $date;
	}	
	function replace_str_once($search, $replace, $subject)
	{
		if (preg_match("/ where /", $subject)) return $subject;
		if(($pos = strpos($subject, $search)) !== false) {
			$ret = substr($subject, 0, $pos).$replace.substr($subject, $pos + strlen($search));
		} else {
			$ret = $subject;
		}
		return($ret);
	}
	// a version from http://php.net/manual/en/function.str-replace.php
	function replace_str_once_new($str_pattern, $str_replacement, $string){   
		if (strpos($string, $str_pattern) !== false){
			$occurrence = strpos($string, $str_pattern);
			return substr_replace($string, $str_replacement, strpos($string, $str_pattern), strlen($str_pattern));
		}
		return $string;
	}
   
	function str_abbr($str) {
		return ((strlen($str)>FILE_LEN) ? substr($str, 0, FILE_LEN-1).'&hellip;' : $str );
	}

  function clear_array($ary) {
      if(is_array($ary) && count($ary)>0){
        foreach($ary as $key=>$data) {
			$ary[$key] = '';
			unset($ary[$key]);
		}
      }
  }

  // to stdout.
  function print_array($vars) {
  	global $config;
	if(is_array($vars) || is_object($vars)) {
		echo "<pre>"; print_r($vars); echo "</pre>";
	}
	else {
		echo $vars."<br>\n";
	}
  }

  //return rand(1,99)*time(); //bigint instead of varchar(32);
  function get_session() {
	return session_id();
  }
  
  /**
   * Array(
    [church] => Array (
       [chrome] => Array (
          [username] => OneFamily
          [expire] => 1329723553
     )))
   */
  function check_access($db=NULL) {
    // echo "<pre>"; print_r($_SESSION); print_r($this->get_session()); echo "</pre>"; return true;
	if(! $this->check_expired($db)) return false;
	return true;
  }
  function check_expired($db) {
  	if(!$db) $db = $this->mdb2;
	$session = $this->get_session();
	$sql = "SELECT uid FROM login_info WHERE session = '". $session . "' and expired > NOW()";
	$uid = $db->queryOne($sql);
	if( !is_a($uid, 'MDB2_Error') && intval($uid)>0 ) return $uid;
	return false;
  }

  function set_default_config($array) {
	global $config;
	foreach($array as $k=>$v) $config[$k] = $v;
  }

  // remember the breakpoint when expired. next time when login, it will auto return to this link instead of default.
  function set_breakpoint()
  {
	$fh = fopen(SITEROOT.BREAKPOINT, 'w') or die("can't open file");
	fwrite($fh, $this->url);
	fclose($fh);
  }

  function set_height($str)
  {
	$ary = explode("\n", $str);
	$style = '';
	if(is_array($ary) && count($ary)>1 && count($ary)<20) {
		$height = 18 * count($ary);
		$style=' style="height:'.$height.'px;" ';
	}
	return $style;
  }

}
?>
