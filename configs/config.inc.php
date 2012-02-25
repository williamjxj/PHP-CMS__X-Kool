<?php
// all based on SITEROOT: './'.
$config = array(
	'debug' => true, // usd by smarty templates as well as php; control to write logfile: admin.log.
	'path' => SITEROOT, //default.
	'smarty' => SITEROOT.'/configs/smarty.ini',
	'layout' => array(
		'header' => 'header.tpl.html',  
		'title' => 'title.tpl.html',
		'navigator' => 'left.tpl.html',
		'footer' => 'footer.tpl.html',
		'include' => 'include.tpl.html',
		'main' => 'main.tpl.html',
	),
	'header' => array(
		'title' => 'PAMS 2.1 - Plan Administration Management',
		'description' => 'Plan Admin System,Plan Administration Systems',
		'keywords' => 'PAMS,Plan Administration Management,Plan Admin System,CDAT,gogeesoftware,Plan Admin,Pension Administration Management',
		'meta_content' => 'text/html; charset=utf-8',
		'meta_defaultrobots' => 'index,follow',
		'meta_robots' => '',
	),
	'dcn' => 2,     // search, edit, add forms need.
	'calender' => true, //most common used in almost each app, 'search' is a basic function.
	'qtip' => true, //each app needs help.
	'list' => get_list_defs(),
	'templs' => get_templs(),
);

function get_templs($default_path='') {
	if($default_path && (!empty($default_path)))
		$path = $default_path.'/templates/';
	else
		$path = SITEROOT.'themes/default/templates/';
	return array(
		'index' => $path.'index.tpl.html',
		'layout' => $path.'layout.tpl.html',
		'header' => $path.'header.tpl.html',
		'left' => $path.'left.tpl.html',
		'main' => $path.'main.tpl.html',
		'list' => $path.'list.tpl.html',
		'search' => $path.'search.tpl.html',
		'add' => $path.'add.tpl.html',
		'edit' => $path.'edit.tpl.html',
		'add_plupload' => $path.'add_plupload.tpl.html',
		'add_tinymce' => $path.'add_tinymce.tpl.html',
		'edit_tinymce' => $path.'edit_tinymce.tpl.html',
		'assign' => $path.'assign.tpl.html',
		'assign_cr' => $path.'assign_contents-resources.tpl.html',
		'assign_rc' => $path.'assign_resources-contents.tpl.html',
		'assign_cm' => $path.'assign_pages-modules.tpl.html',
		'assign_mc' => $path.'assign_modules-contents.tpl.html',
		'resources' => $path.'resources.tpl.html',
		'pension_form' => $path.'pension_form.tpl.html',
		'calculator' => $path.'calculator.tpl.html',
	);
}
//$months => get_months();
//$error => get_errors();
function get_months() {
	return array(
		'01' => 'January',
		'02' => 'February',
		'03' => 'March',
		'04' => 'April',
		'05' => 'May',
		'06' => 'June',
		'07' => 'July',
		'08' => 'August',
		'09' => 'September',
		'10' => 'October',
		'11' => 'November',
		'12' => 'December'
	); 
}
function get_errors() {
	array(
		'100' => 'Could not connect to MySQL DB.',
		'101' => 'Passwords are not equal.',
		'102' => 'Email is not correct.',
		'103' => 'Password is required.',
		'104' => 'Could not add user.',
		'105' => 'Usrname is required.',
	);
}
?>