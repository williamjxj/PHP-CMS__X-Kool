<?php
session_start();
error_reporting(E_ALL);
define('SITEROOT', '../');

ini_set('include_path',ini_get('include_path').PATH_SEPARATOR.SITEROOT.'configs/'.PATH_SEPARATOR.SITEROOT.'include/');
require_once("setting.inc.php");
require_once("config.inc.php");
require_once("ListAdvanced.inc.php");
global $config;


$config['tabs'] = array('1'=>'List My Blog', '2'=>'Add New Blog', '3'=>'Update My Blog');

class WorldpressClass extends ListAdvanced
{
  var $url, $self, $html, $session, $mdb2, $mdb1;
  public function __construct() {
    parent::__construct();
	$this->mdb2 = $this->pear_connect_wordpress();
	$this->mdb1 = $this->pear_connect_admin();
  }
  //'mysqli://ufcw:ufcw_pwd@localhost/ufcw_new';
  function pear_connect_wordpress() {
	if(($_SERVER['SERVER_ADDR'] == '74.53.88.82') || preg_match("/cdat\.com/", $_SERVER['SERVER_NAME']) ) {
		$dsn = array (
			"phptype" => "mysqli",
			"username" => "cdatcom_william",
			"password" => "Benjamin001",
			"hostspec" => "localhost",
			"database" => "cdatcom_wordpress"
		);
	}
	else {  
		$dsn = array (
			"phptype" => "mysqli",
			"username" => "williamjxj",
			"password" => "Benjamin001",
			"hostspec" => "localhost",
			"database" => "wordpress"
		);
	}
	$options = array(
		'debug'       => 2,
		'persistent'  => true,
		'portability' => MDB2_PORTABILITY_ALL,
	);	
	$mdb2 = MDB2::factory($dsn, $options);
	if (PEAR::isError($mdb2)) {
		die($mdb2->getMessage() . ' line: ' . __LINE__);
	}
	return $mdb2;
  }
  
  function get_record($id) {
  	$query = "SELECT * FROM wp_posts WHERE id=".$id;
	$res = $this->mdb2->query($query);
	$row = $res->fetchRow(MDB2_FETCHMODE_ASSOC);
	//$this->print_array($row);
	return $row;
  }
  
  function get_search_form_settings() {
	return array(
		array(
			'type' => 'text',
			'display_name' => 'Title:',
			'id' => 'post_title_s',
			'name' => 'post_title',
		),
		array(
			'type' => 'text',
			'display_name' => 'Name:',
			'id' => 'post_name_s',
			'name' => 'post_name',
		),
		array(
			'type' => 'radio',
			'display_name' => 'Type:',
			'name' => 'post_type',
			'lists' => array(
				'attachment' => 'Attachment',
				'page' => 'Page',
				'post' => 'Post',
				'A' => 'All',
			),
			'checked' => 'A',
			'ignore' => 'A',
		),
		array(
			'type' => 'radio',
			'display_name' => 'Status:',
			'name' => 'post_status',
			'lists' => array(
				'draft' => 'Draft',
				'auto-draft' => 'Auto-draft',
				'inherit' => 'Inherit',
				'publish' => 'Publish',
				'A' => 'All',
			),
			'checked' => 'A',
			'ignore' => 'A',
		),
		array(
			'type' => 'text',
			'display_name' => 'Content:',
			'id' => 'post_content_s',
			'name' => 'post_content',
		),
		array(
			'type' => 'date',
			'display_name' => 'Date:',
			'id' => 'post_date_s',
			'name' => 'post_date',
			'size' => INPUT_SIZE,
		),
	);
  }
  function get_edit_form_settings() {
	return array(
		array(
			'type' => 'text',
			'display_name' => 'Author:',
			'name' => 'post_author',
		),
		array(
			'type' => 'text',
			'display_name' => 'Title:',
			'name' => 'post_title',
		),
		array(
			'type' => 'date',
			'display_name' => 'Date:',
			'name' => 'post_date',
			'size' => INPUT_SIZE,
		),
		array(
			'type' => 'text',
			'display_name' => 'Status:',
			'name' => 'post_status',
		),
		array(
			'type' => 'text',
			'display_name' => 'Name:',
			'name' => 'post_name',
		),
		array(
			'type' => 'text',
			'display_name' => 'Type:',
			'name' => 'post_type',
		),
		array(
			'type' => 'hidden',
			'name' => 'id',
			'index' => 'ID',
		)
	);
  } 
  function edit_wysiwyg_table()
  {
	$title = $this->mdb2->escape(trim($_POST['wp_title']));
	$id = $_POST['id'];
	foreach($_POST as $k=>$v) if(preg_match("/^elm_/", $k)) {
		if (get_magic_quotes_gpc()) $content = $v;
		else $content = addslashes($v);
	}

	$query = "UPDATE wp_posts set post_content = '" . $content . "', " .
		 "post_title = '" . $title . "' WHERE id =  " . $id; 
	$this->print_array($query);
	$affected = $this->mdb2->exec($query);
	if (PEAR::isError($affected)) {
		die($affected->getMessage() . ' line: ' . __LINE__);
	}

	$query = "SELECT * FROM wp_posts WHERE id=" . $id;
	$row = $this->mdb2->queryRow($query, '', MDB2_FETCHMODE_ASSOC);

	$ary = array();
	$ary['id'] = $id;
	$ary['post_title'] = $row['post_title'];
	$ary['post_content'] = $row['post_content'];
	$encodedArray = array_map("utf8_encode", $ary);
	return $encodedArray;
  }

  function add()
  {
	$title = $this->mdb2->escape(trim($_POST['wp_title_3']));
	if (get_magic_quotes_gpc()) $content = $_POST['elm3'];
	else $content = addslashes($_POST['elm3']);
	$name = strtolower(preg_replace("/ /", '-', $title));

	$query = "INSERT INTO wp_posts (post_author,post_date,post_content,post_title,post_status,post_name)
		VALUES(1, NOW(), '".$content."', '".$title."', 'publish', '".$name."')";

	$affected = $this->mdb2->exec($query);
	if (PEAR::isError($affected)) {
		die($affected->getMessage() . ' line: ' . __LINE__);
	}
	$id = $this->mdb2->lastInsertID();
	$query = "SELECT * FROM wp_posts WHERE id=" . $id;

	$row = $this->mdb2->queryRow($query, '', MDB2_FETCHMODE_ASSOC);
	$ary = array();
	$ary['id'] = $id;
	$ary['title'] = $row['post_title'];
	$ary['content'] = $row['post_content'];
	$ary['name'] = $row['post_name'];
	$encodedArray = array_map("utf8_encode", $ary);
	return $encodedArray;
  }

}

$wp = new WorldpressClass() or die("Can't generate the instance.");
if(! $wp->check_access($wp->mdb1)) {
  $wp->set_breakpoint();
  echo "<script>if(window.opener){window.opener.location.href='".LOGIN."';} else{window.parent.location.href='".LOGIN."';}</script>";exit;
}
$wp->get_table_info();
$wp->set_default_config(array('WYSIWYG'=>true,'calender'=>true));

if(isset($_REQUEST['action'])) {
	switch($_REQUEST['action']) {
		case 'delete':
			$wp->delete($_GET['id']);
			break;
		case 'edit':
      $ary = $wp->get_edit_form_settings();
      echo json_encode($wp->edit_table($ary));
			break;
		default:
			break;
	}
}
elseif(isset($_GET['js_search_form'])) {
	$ary = $wp->get_search_form_settings();
	//$wp->get_search_form($ary);
	$wp->assign('search_form', $ary);	
	$wp->assign('config', $config);
	$wp->display($config['templs']['search']); //'search.tpl.html'
	
}
elseif(isset($_GET['js_edit_form'])) {
	$ary = $wp->get_edit_form_settings();
	//$wp->get_edit_form($_GET['id'], $ary);
	$record = $wp->get_record($_GET['id']);
  	$form_id = 'ef_'.$_GET['id'];
	$wp->assign('form_id', $form_id);	
	$wp->assign('record', $record);	
	$wp->assign('edit_form', $ary);	
	$wp->assign('config', $config);
	$wp->display($config['templs']['edit']); //'edit.tpl.html'
}
elseif(isset($_GET['js_edit_form_3'])) {
  $data = array();
  if(!isset($data['self'])) $data['self'] = $wp->self;

  if(isset($_GET['id']))
	$record = $wp->get_record($_GET['id']);
  else $record = array();

  $data['record'] = $record;
  
  $wp->assign('config', $config);
  $wp->assign("data", $data);
  $wp->display('edit_tinymce1.tpl.html');
}
elseif(isset($_GET['js_add_form'])) {
	$wp->assign('config', $config);
	$wp->display('add_tinymce1.tpl.html');	
}
elseif(isset($_POST['add_submit'])) {
	$ret = $wp->add();
	echo json_encode($ret);
}
else if( isset($_POST['search']) || (isset($_GET['page']) && isset($_GET['sort'])) || isset($_GET['page']) ) {
	if(isset($_POST['search'])) $wp->parse();

	$data = $wp->list_all();
	$data['options'] = array(VIEW, EDIT, DELETE);
	
	$header = $wp->get_header($wp->get_mappings());

	$pagination = $wp->draw( $data['current_page'], $data['total_pages'] );
	
	$wp->assign('config', $config);
	$wp->assign('header', $header);
	$wp->assign('data', $data);
	$wp->assign("pagination", $pagination);
	$tpl = $wp->get_html_template();
	$wp->display($tpl); // not use display, should use AJAX.
}
elseif(isset($_POST['edit_submit'])) {
	$ret = $wp->edit_wysiwyg_table();
	echo json_encode($ret);
}
else {
	if (isset($_SESSION[$wp->self][$wp->session['sql']])) $_SESSION[$wp->self][$wp->session['sql']] = '';

	$total_rows = $wp->get_total_rows($wp->get_count_sql());

	$_SESSION[$wp->self][$wp->session['rows']] = $total_rows < 1 ? 1 : $total_rows;
	
	$data = $wp->list_all();
	$data['options'] = array(VIEW, EDIT, DELETE);
	
	$header = $wp->get_header($wp->get_mappings());

	$pagination = $wp->draw( $data['current_page'], $data['total_pages'] );
	
	$tpl = $wp->get_html_template();

	$wp->assign('config', $config);
	$wp->assign('header', $header);
	$wp->assign('data', $data);
	$wp->assign("pagination", $pagination);
	$wp->assign("template", $tpl);

	$wp->display($config['templs']['main']);
}

//$wp->clear_array($wp->data);
?>
