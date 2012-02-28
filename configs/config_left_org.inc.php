<?php
// all based on SITEROOT: './'.
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';

$config = array(
	'debug' => true, // usd by smarty templates as well as php.
	'smarty' => SITEROOT.'/configs/smarty.ini',
	'top' => array(
		'Logout' => 'login.php?logout'
	),
	'footer' => array(),
	'cores' => get_cores(),
	'tools' => get_supports(),
	'manages' => get_manages(),
);
echo "<pre>"; print_r($config); echo "</pre>";

///////////////////////////////

function get_cores() {
	return array(
		'��������' => 'contents.php',
		'ģ��' => 'modules.php',
		'��Դ' => 'resources.php',
		'�ʼ�' => 'emails.php',
	);
}

function get_supports() {
	return array(
		'ע����Ϣ' => 'login_info.php',
		'�������' => 'actions.php',
		'��־' => 'read_log.php',
		'ά����¼' => 'reports.php',
		'����' => 'tracks.php',
		'����' => 'divisions.php',
		'Stickynotes' => 'stickynotes.php',
	);
}
function get_manages() {
	return array(
		'�����û�' => 'users.php',
		'�����û���' => 'levels.php',
		'��ͨ�û�' => 'common_users.php',
		'վ�����' => 'sites.php',
		'��ҳ' => 'pages.php',
		'��ҳ����' => 'themes.php',
	);
}

?>