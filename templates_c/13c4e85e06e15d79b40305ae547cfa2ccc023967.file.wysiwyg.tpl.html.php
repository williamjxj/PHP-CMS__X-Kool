<?php /* Smarty version Smarty-3.0.4, created on 2012-02-16 17:37:52
         compiled from "./themes/default/templates/wysiwyg.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:5902863514f3d85402c1a03-36733973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13c4e85e06e15d79b40305ae547cfa2ccc023967' => 
    array (
      0 => './themes/default/templates/wysiwyg.tpl.html',
      1 => 1329353521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5902863514f3d85402c1a03-36733973',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php $_smarty_tpl->tpl_vars['r'] = new Smarty_variable((isset($_smarty_tpl->getVariable('data')->value['record']) ? $_smarty_tpl->getVariable('data')->value['record'] : null), null, null);?>
<?php $_smarty_tpl->tpl_vars['tid'] = new Smarty_variable((isset($_smarty_tpl->getVariable('r')->value['tid']) ? $_smarty_tpl->getVariable('r')->value['tid'] : null), null, null);?>
<?php  $_config = new Smarty_Internal_Config(((isset($_smarty_tpl->getVariable('config')->value['smarty']) ? $_smarty_tpl->getVariable('config')->value['smarty'] : null)), $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<link href="<?php echo (isset($_smarty_tpl->getVariable('config')->value['ipath']) ? $_smarty_tpl->getVariable('config')->value['ipath'] : null);?>
include/akzhan-jwysiwyg/jquery.wysiwyg.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo (isset($_smarty_tpl->getVariable('config')->value['ipath']) ? $_smarty_tpl->getVariable('config')->value['ipath'] : null);?>
include/jquery-1.6.4.js"></script>
<script type="text/javascript" src="<?php echo (isset($_smarty_tpl->getVariable('config')->value['ipath']) ? $_smarty_tpl->getVariable('config')->value['ipath'] : null);?>
include/akzhan-jwysiwyg/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="<?php echo (isset($_smarty_tpl->getVariable('config')->value['ipath']) ? $_smarty_tpl->getVariable('config')->value['ipath'] : null);?>
include/akzhan-jwysiwyg/controls/wysiwyg.link.js"></script>
<script type="text/javascript" src="<?php echo (isset($_smarty_tpl->getVariable('config')->value['ipath']) ? $_smarty_tpl->getVariable('config')->value['ipath'] : null);?>
include/akzhan-jwysiwyg/controls/wysiwyg.image.js"></script>
<script type="text/javascript" src="<?php echo (isset($_smarty_tpl->getVariable('config')->value['ipath']) ? $_smarty_tpl->getVariable('config')->value['ipath'] : null);?>
include/akzhan-jwysiwyg/controls/wysiwyg.table.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	var dt = new Date();
	var monthname=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
	var TODAY = monthname[dt.getMonth()] + " " + dt.getDate() + ", " + dt.getFullYear();
	var url = '<?php echo (isset($_SERVER['SCRIPT_NAME'])? $_SERVER['SCRIPT_NAME'] : null);?>
';
	var form = '#form_add_<?php echo $_smarty_tpl->getVariable('tid')->value;?>
';
	var save = '#save_<?php echo $_smarty_tpl->getVariable('tid')->value;?>
';

	<?php ob_start();?><?php echo $_smarty_tpl->getVariable('tid')->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?> action = '&js_edit=1';
	<?php }else{ ?> action = '&js_add=1';
	<?php }?>
	
	$('#title_<?php echo $_smarty_tpl->getVariable('tid')->value;?>
').val(TODAY);
	$wid = $('#wysiwyg_<?php echo $_smarty_tpl->getVariable('tid')->value;?>
');
    $wid.wysiwyg({});
	$(save).click(function(e) {
		e.preventDefault();
		$.ajax({
			url: $(form).attr('action'),
			type: $(form).attr('method'),
			data: $(form).serialize()+action,
			dataType: 'json',
			beforeSend: function(){
				$('<img/>').attr({
					'id': 'processing',
					'src': '<?php echo (isset($_smarty_tpl->getVariable('config')->value['path']) ? $_smarty_tpl->getVariable('config')->value['path'] : null);?>
images/spinner.gif',
					'width': 16,
					'height': 16,
					'border': 0,
					'title': 'Processing ...'
				}).insertAfter(save);
				$(save).hide();
			},
			success: function(data){
				if($('#processing').length) $('#processing').empty().remove();
				if(! $(save).is(':visible')) $(save).show().attr('disabled', true);
				$('#div_list').load(url+'?js_reload_list=1');
			}
		});
	});
});
</script>
<form id="form_add_<?php echo $_smarty_tpl->getVariable('tid')->value;?>
" name="form_add" method="post" action="<?php echo (isset($_SERVER['SCRIPT_NAME'])? $_SERVER['SCRIPT_NAME'] : null);?>
">
  <fieldset>
  <legend><?php ob_start();?><?php echo $_smarty_tpl->getVariable('tid')->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?>Edit Track <?php echo $_smarty_tpl->getVariable('tid')->value;?>
: <?php echo (isset($_smarty_tpl->getVariable('r')->value['title']) ? $_smarty_tpl->getVariable('r')->value['title'] : null);?>
<?php }else{ ?>Add Track<?php }?></legend>
  <label for="title"> Title: </label>
  <a href="javascript: fPopCalendar('title')">
  <input name="title" id="title_<?php echo $_smarty_tpl->getVariable('tid')->value;?>
" type="text" onFocus="this.select();" size="90" value="<?php echo (isset($_smarty_tpl->getVariable('r')->value['title']) ? $_smarty_tpl->getVariable('r')->value['title'] : null);?>
" />
  <img src="<?php echo (isset($_smarty_tpl->getVariable('config')->value['path']) ? $_smarty_tpl->getVariable('config')->value['path'] : null);?>
images/cal2.jpg" width="14" height="14" alt="date" border="0"></a> <br />
  <label for="notes"> Notes: </label>
  <textarea id="notes_<?php echo $_smarty_tpl->getVariable('tid')->value;?>
" name="notes" style="width:60%;height:60px;"><?php echo (isset($_smarty_tpl->getVariable('r')->value['notes']) ? $_smarty_tpl->getVariable('r')->value['notes'] : null);?>
</textarea>
  <br />
  <label for="wysiwyg"> Content:</label>
  <br />
  <textarea id="wysiwyg_<?php echo $_smarty_tpl->getVariable('tid')->value;?>
" name="wysiwyg" rows="10" cols="80"><?php echo (isset($_smarty_tpl->getVariable('r')->value['content']) ? $_smarty_tpl->getVariable('r')->value['content'] : null);?>
</textarea>
  <input type="submit" value="Save" id="save_<?php echo $_smarty_tpl->getVariable('tid')->value;?>
" name="save" class="save" />
  <input type="reset" value="Reset" class="reset" />
  <?php ob_start();?><?php echo $_smarty_tpl->getVariable('tid')->value;?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3){?>
  <input type="hidden" id="tid" name="tid" value="<?php echo $_smarty_tpl->getVariable('tid')->value;?>
" />
  <?php }?>
  </fieldset>
</form>