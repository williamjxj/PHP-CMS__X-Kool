<?php /* Smarty version Smarty-3.0.4, created on 2012-02-15 20:22:46
         compiled from "./themes/default/templates/header.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:7918065434f3c5a664423d7-82591259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8da7a7fa48d3f13039e42132b3900dc480a54c9d' => 
    array (
      0 => './themes/default/templates/header.tpl.html',
      1 => 1329353519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7918065434f3c5a664423d7-82591259',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<base target="mainFrame">
<link href="<?php echo (isset($_smarty_tpl->getVariable('config')->value['path']) ? $_smarty_tpl->getVariable('config')->value['path'] : null);?>
css/pams-style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="<?php echo (isset($_smarty_tpl->getVariable('config')->value['path']) ? $_smarty_tpl->getVariable('config')->value['path'] : null);?>
js/jquery-1.5.1.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo (isset($_smarty_tpl->getVariable('config')->value['path']) ? $_smarty_tpl->getVariable('config')->value['path'] : null);?>
js/cookie.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo (isset($_smarty_tpl->getVariable('config')->value['ipath']) ? $_smarty_tpl->getVariable('config')->value['ipath'] : null);?>
include/jquery-sticky-notes/script/jquery-ui-1.7.2.custom.min.js"></script>
<script language="javascript" type="text/javascript" src="include/jquery-sticky-notes/script/jquery.stickynotes.js"></script>
<link rel="stylesheet" href="<?php echo (isset($_smarty_tpl->getVariable('config')->value['ipath']) ? $_smarty_tpl->getVariable('config')->value['ipath'] : null);?>
include/jquery-sticky-notes/css/jquery.stickynotes.css" type="text/css">
</head>
<body>
<div id="<?php echo (isset($_smarty_tpl->getVariable('config')->value['browser_id']) ? $_smarty_tpl->getVariable('config')->value['browser_id'] : null);?>
">
  <div id="header">
      <div id="upper">
        <span class="pamslogo1"></span>
        <div id="navLinks">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('config')->value['top']) ? $_smarty_tpl->getVariable('config')->value['top'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value){
?>
            <?php if (is_array((isset($_smarty_tpl->tpl_vars['entry']->value) ? $_smarty_tpl->tpl_vars['entry']->value : null))){?><?php echo $_smarty_tpl->tpl_vars['entry']->key;?>

            <?php }else{ ?>
            <?php if ($_smarty_tpl->tpl_vars['entry']->key=='Logout'){?>
            <li><a onclick="parent.document.location.href='<?php echo (isset($_smarty_tpl->tpl_vars['entry']->value) ? $_smarty_tpl->tpl_vars['entry']->value : null);?>
'" href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['entry']->key;?>
</a></li>
            <?php }else{ ?>
            <li><a href="<?php echo (isset($_smarty_tpl->tpl_vars['entry']->value) ? $_smarty_tpl->tpl_vars['entry']->value : null);?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->key;?>
</a></li>
            <?php }?>
            <?php }?>
            <?php }} ?>
            <li>
              <select id="changeTheme">
                <option value="default"> - Select Theme （选择） - </option>
                <option value="default"> Default </option>
                <option value="theme1" id="topt1">Theme 1</option>
              </select>
            </li>
          </ul>
        </div>
        <!--div id="notes" style="width:60%;height:100%; float:right"></div-->
      </div>
  </div>
</div>
<script language="javascript" type="text/javascript">
$(document).ready(function() {
	// $('#notes').stickyNotes();
	$('#changeTheme').change(function(e) {
		e.preventDefault();
		if( $.cookie("admin[username]") && $.cookie("admin[userpass]") ) {
			$.cookie("admin[path]", $(this).val());
			$.cookie("admin[theme]", $(this).val());
		}
		window.parent.location.href='index.php';
	});
	if( $.cookie("admin[theme]") ) {
		$("#changeTheme option[value='"+$.cookie("admin[theme]")+"']").attr('selected', 'selected');
	}
});
</script>
</body>
</html>
