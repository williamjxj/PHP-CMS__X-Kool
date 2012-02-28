<?php
if (!defined('SITEROOT')) define('SITEROOT', './');
define("LOGIN", "/church/index.php"); // entry point.
define('ADMIN_USER', 'admin_users');

// default map file (Display Name <=> DB table columns), used to list all optional columns in 'R'(CRUD).
define("MAP_FILE", SITEROOT."configs/register_list.ini");
define('FLOG', SITEROOT.'logs/admin.log');

// entry points.
define("DEFAULT_TEMPLATE", "main.tpl.html");
define('DEFAULT_LIST', 'list.tpl.html');
define("DEFAULT_ASSIGN_TEMPLATE", 'assign.tpl.html');
    
define("PAGINATION", 'div_list');
define("ROWS_PER_PAGE", 30);
define("DCN", 2);  // for search & edit form: default column number
define("INPUT_SIZE", 28);

define('EDIT', 'edit');
define('EMAIL', 'email');
define('VIEW', 'view');
define('PENSION', 'pension');
define('DELETE', 'delete');
define('RESOURCE', 'resources');
define('CONTENT', 'contents');

define('BREAKPOINT', '.breakpoint.txt');
define('ALLOWTAGS', '<a><p><strong><em><u><h1><h2><h3><h4><h5><h6><img><li><ol><ul><span><div><br><ins><del><table><tr><td><tbody><thead><tfoot><b><cufon><canvas><cufontext><object><param><embed><iframe><script><dl><dt><dd><blockquote><colgroup><col><hr>');

define ('PREVIEW', '/public_html/admin/default/front/preview/');

function get_list_defs($default_path='') {
	if($default_path && (!empty($default_path)))
		$path = $default_path;
	else
		$path = SITEROOT.'themes/default/';
	return array(
		'up'   => '<img src="'.$path.'images/up-arrow.png" border="0" width="11"  height="5" alt="desc" >',
		'down' => '<img src="'.$path.'images/down-arrow.png" border="0" width="11" height="5" alt="asc" >',
		'SORT1'=> '<img src="'.$path.'images/up.jpg" border="0" width="13" height="11" alt="desc" >',
		'SORT2'=> '<img src="'.$path.'images/down.jpg" border="0" width="13" height="11" alt="asc" >',
		'wait' => '<img src="'.$path.'images/wait.gif" border="0" width="16" height="16" alt="processing. please wait..." >',
		'wait1'=> '<img src="'.$path.'images/spinner.gif" width="16" height="16" border="0">',
		'wait2' => $path.'images/spinner.gif',
	);
}

function browser_ID() {
    if(strstr($_SERVER['HTTP_USER_AGENT'], 'Firefox')){ $id="firefox"; }
    elseif(strstr($_SERVER['HTTP_USER_AGENT'], 'Safari') && !strstr($_SERVER['HTTP_USER_AGENT'], 'Chrome')){ $id="safari"; }
    elseif(strstr($_SERVER['HTTP_USER_AGENT'], 'Chrome')){ $id="chrome"; }
    elseif(strstr($_SERVER['HTTP_USER_AGENT'], 'Opera')){ $id="opera"; }
    elseif(strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 6')){ $id="ie6"; }
    elseif(strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 7')){ $id="ie7"; }
    elseif(strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 8')){ $id="ie8"; }
    elseif(strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')){ $id="ie9"; }
	return $id;
}
?>