<?php /* Smarty version Smarty-3.0.4, created on 2012-02-16 18:25:45
         compiled from "./themes/default//templates/main.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:15826746104f3d9079c4f209-80783259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0414a9ea994be5c397a015fb960d59bbdaab8ef3' => 
    array (
      0 => './themes/default//templates/main.tpl.html',
      1 => 1329434696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15826746104f3d9079c4f209-80783259',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include './/include/Smarty-3.0.4/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo (isset($_smarty_tpl->getVariable('config')->value['header']['title']) ? $_smarty_tpl->getVariable('config')->value['header']['title'] : null);?>
</title>
<meta name="description" content="<?php echo (isset($_smarty_tpl->getVariable('config')->value['header']['description']) ? $_smarty_tpl->getVariable('config')->value['header']['description'] : null);?>
" />
<meta name="keywords" content="<?php echo (isset($_smarty_tpl->getVariable('config')->value['header']['keywords']) ? $_smarty_tpl->getVariable('config')->value['header']['keywords'] : null);?>
" />
<meta name="robots" content="<?php echo (($tmp = @(isset($_smarty_tpl->getVariable('config')->value['header']['meta_robots']) ? $_smarty_tpl->getVariable('config')->value['header']['meta_robots'] : null))===null||$tmp==='' ? (isset($_smarty_tpl->getVariable('config')->value['header']['meta_defaultrobots']) ? $_smarty_tpl->getVariable('config')->value['header']['meta_defaultrobots'] : null) : $tmp);?>
">
<link rel="stylesheet" type="text/css" href="<?php echo (isset($_smarty_tpl->getVariable('config')->value['path']) ? $_smarty_tpl->getVariable('config')->value['path'] : null);?>
css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo (isset($_smarty_tpl->getVariable('config')->value['path']) ? $_smarty_tpl->getVariable('config')->value['path'] : null);?>
css/pams.css" />
<link rel="stylesheet" type="text/css" href="<?php echo (isset($_smarty_tpl->getVariable('config')->value['path']) ? $_smarty_tpl->getVariable('config')->value['path'] : null);?>
css/pams-style.css" />
<script language="javascript" type="text/javascript" src="<?php echo (isset($_smarty_tpl->getVariable('config')->value['path']) ? $_smarty_tpl->getVariable('config')->value['path'] : null);?>
js/jquery-1.5.1.min.js"></script>
<?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('config')->value['tabs']) ? $_smarty_tpl->getVariable('config')->value['tabs'] : null);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1&&is_array((isset($_smarty_tpl->getVariable('config')->value['tabs']) ? $_smarty_tpl->getVariable('config')->value['tabs'] : null))){?>
<link href="<?php echo (isset($_smarty_tpl->getVariable('config')->value['ipath']) ? $_smarty_tpl->getVariable('config')->value['ipath'] : null);?>
include/SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<script src="<?php echo (isset($_smarty_tpl->getVariable('config')->value['ipath']) ? $_smarty_tpl->getVariable('config')->value['ipath'] : null);?>
include/SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<?php }?>
<?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('config')->value['jvalidate']) ? $_smarty_tpl->getVariable('config')->value['jvalidate'] : null);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?>
<link rel="stylesheet" type="text/css" href="<?php echo (isset($_smarty_tpl->getVariable('config')->value['path']) ? $_smarty_tpl->getVariable('config')->value['path'] : null);?>
css/validationEngine.jquery.css" />
<script language="javascript" type="text/javascript" src="<?php echo (isset($_smarty_tpl->getVariable('config')->value['path']) ? $_smarty_tpl->getVariable('config')->value['path'] : null);?>
js/jquery.validationEngine-en.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo (isset($_smarty_tpl->getVariable('config')->value['path']) ? $_smarty_tpl->getVariable('config')->value['path'] : null);?>
js/jquery.validationEngine.js"></script>
<script language="javascript" type="text/javascript" src="include/init.js"></script>
<?php }?>
<?php if ((isset($_smarty_tpl->getVariable('config')->value['dvalidate']) ? $_smarty_tpl->getVariable('config')->value['dvalidate'] : null)){?>
<script src="<?php echo (isset($_smarty_tpl->getVariable('config')->value['ipath']) ? $_smarty_tpl->getVariable('config')->value['ipath'] : null);?>
include/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="<?php echo (isset($_smarty_tpl->getVariable('config')->value['ipath']) ? $_smarty_tpl->getVariable('config')->value['ipath'] : null);?>
include/SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<script src="<?php echo (isset($_smarty_tpl->getVariable('config')->value['ipath']) ? $_smarty_tpl->getVariable('config')->value['ipath'] : null);?>
include/SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="<?php echo (isset($_smarty_tpl->getVariable('config')->value['ipath']) ? $_smarty_tpl->getVariable('config')->value['ipath'] : null);?>
include/SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css">
<?php }?>

<?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('config')->value['calender']) ? $_smarty_tpl->getVariable('config')->value['calender'] : null);?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3){?>
<link href="<?php echo (isset($_smarty_tpl->getVariable('config')->value['path']) ? $_smarty_tpl->getVariable('config')->value['path'] : null);?>
css/cwcalendar.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="<?php echo (isset($_smarty_tpl->getVariable('config')->value['path']) ? $_smarty_tpl->getVariable('config')->value['path'] : null);?>
js/calendar.js" type="text/javascript"></script>
<?php }?>

<?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('config')->value['colorbox']) ? $_smarty_tpl->getVariable('config')->value['colorbox'] : null);?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4){?>
<link rel="stylesheet" type="text/css" href="<?php echo (isset($_smarty_tpl->getVariable('config')->value['path']) ? $_smarty_tpl->getVariable('config')->value['path'] : null);?>
css/colorbox.css" />
<script language="javascript" type="text/javascript" src="<?php echo (isset($_smarty_tpl->getVariable('config')->value['path']) ? $_smarty_tpl->getVariable('config')->value['path'] : null);?>
js/jquery.colorbox-min.js"></script>
<?php }?>
<?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('config')->value['qtip']) ? $_smarty_tpl->getVariable('config')->value['qtip'] : null);?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5){?>
<script language="javascript" type="text/javascript" src="<?php echo (isset($_smarty_tpl->getVariable('config')->value['ipath']) ? $_smarty_tpl->getVariable('config')->value['ipath'] : null);?>
include/jquery-qtip/jquery.qtip-2.min.js"></script>
<?php }?>

<?php if ((isset($_smarty_tpl->getVariable('config')->value['WYSIWYG']) ? $_smarty_tpl->getVariable('config')->value['WYSIWYG'] : null)){?>
<script type="text/javascript" src="<?php echo (isset($_smarty_tpl->getVariable('config')->value['ipath']) ? $_smarty_tpl->getVariable('config')->value['ipath'] : null);?>
include/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<?php }?>

<?php if ((isset($_smarty_tpl->getVariable('config')->value['plupload']) ? $_smarty_tpl->getVariable('config')->value['plupload'] : null)){?>
<style type="text/css">
@import url(<?php echo (isset($_smarty_tpl->getVariable('config')->value['ipath']) ? $_smarty_tpl->getVariable('config')->value['ipath'] : null);?>
include/plupload/examples/css/plupload.queue.css);
</style>
<script type="text/javascript" src="<?php echo (isset($_smarty_tpl->getVariable('config')->value['ipath']) ? $_smarty_tpl->getVariable('config')->value['ipath'] : null);?>
include/plupload/js/gears_init.js"></script>
<script type="text/javascript" src="http://bp.yahooapis.com/2.4.21/browserplus-min.js"></script>
<script type="text/javascript" src="<?php echo (isset($_smarty_tpl->getVariable('config')->value['ipath']) ? $_smarty_tpl->getVariable('config')->value['ipath'] : null);?>
include/plupload/js/plupload.full.min.js"></script>
<script type="text/javascript" src="<?php echo (isset($_smarty_tpl->getVariable('config')->value['ipath']) ? $_smarty_tpl->getVariable('config')->value['ipath'] : null);?>
include/plupload/js/jquery.plupload.queue.min.js"></script>
<?php }?>
</head>
<body id="<?php echo (isset($_smarty_tpl->getVariable('config')->value['browser_id']) ? $_smarty_tpl->getVariable('config')->value['browser_id'] : null);?>
">
<a href="#" id="sidebarToggle"></a>
<div id="user-info">
Welcome <span> <?php echo (isset($_SESSION['demo']['username'])? $_SESSION['demo']['username'] : null);?>
 </span>, <?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S');?>

</div>
<?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('config')->value['tabs']) ? $_smarty_tpl->getVariable('config')->value['tabs'] : null);?>
<?php $_tmp6=ob_get_clean();?><?php if ($_tmp6&&is_array((isset($_smarty_tpl->getVariable('config')->value['tabs']) ? $_smarty_tpl->getVariable('config')->value['tabs'] : null))){?>
<div id="TabbedPanels1" class="TabbedPanels">	    
  <ul class="TabbedPanelsTabGroup">
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('config')->value['tabs']) ? $_smarty_tpl->getVariable('config')->value['tabs'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
    <li class="TabbedPanelsTab" tabindex="<?php echo (isset($_smarty_tpl->tpl_vars['k']->value) ? $_smarty_tpl->tpl_vars['k']->value : null);?>
" id="tab<?php echo (isset($_smarty_tpl->tpl_vars['k']->value) ? $_smarty_tpl->tpl_vars['k']->value : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['v']->value) ? $_smarty_tpl->tpl_vars['v']->value : null);?>
</li>
    <?php }} ?>    

    <li class="qmark" onclick="window.open('<?php echo (isset($_smarty_tpl->getVariable('config')->value['path']) ? $_smarty_tpl->getVariable('config')->value['path'] : null);?>
help.html#<?php echo (isset($_smarty_tpl->getVariable('config')->value['self']) ? $_smarty_tpl->getVariable('config')->value['self'] : null);?>
', 'help','height=260,width=600,scrollbars=1,resizable=1');" style="cursor:help">&nbsp;&nbsp;<img src="<?php echo (isset($_smarty_tpl->getVariable('config')->value['path']) ? $_smarty_tpl->getVariable('config')->value['path'] : null);?>
images/help.png" border="0" width="16px" height="16px" title="Help for <?php echo (isset($_smarty_tpl->getVariable('config')->value['self']) ? $_smarty_tpl->getVariable('config')->value['self'] : null);?>
"/></li>
  </ul>
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent">
      <div id="main1">
        <div id="div_search_1" style="text-decoration:underline; cursor:pointer;" title="Show Search Form">Click to Launch Search Form:</div>
        <div id="div_search_2"></div>
        <div id="div_list"> <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('template')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?> </div>
      </div>
    </div>
    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count((isset($_smarty_tpl->getVariable('config')->value['tabs']) ? $_smarty_tpl->getVariable('config')->value['tabs'] : null))+1 - (2) : 2-(count((isset($_smarty_tpl->getVariable('config')->value['tabs']) ? $_smarty_tpl->getVariable('config')->value['tabs'] : null)))+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 2, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
    <div class="TabbedPanelsContent">
      <div id="main<?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null);?>
"></div>
    </div>
    <?php }} ?>
  </div>
</div>

<script language="javascript" type="text/javascript">
$(document).ready(function() {
  var url = '<?php echo (isset($_SERVER['SCRIPT_NAME'])? $_SERVER['SCRIPT_NAME'] : null);?>
';
  var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
  $('#tab1').click(function(){	// add event to original behavior.
	if($('div.formError').length) {
		$('div.formError').each(function() {
			$(this).hide();
		});
	}
	return false;
  });

<?php if ((isset($_smarty_tpl->getVariable('config')->value['self']) ? $_smarty_tpl->getVariable('config')->value['self'] : null)=='resources'||(isset($_smarty_tpl->getVariable('config')->value['self']) ? $_smarty_tpl->getVariable('config')->value['self'] : null)=='contents'){?>

  $('#tab2').bind('click', function(event) {
	var t = $('div.TabbedPanelsContentGroup').find('div.TabbedPanelsContent:eq(1) div:eq(0)');
	if($(t).html().length==0) {
		$(t).load(url+'?js_add_form=1').fadeIn(100);
	}
	return false;
  });
  $('#tab3,#tab4,#tab5').each(function() {
	var t = parseInt($(this).attr('id').substring(3));
	var t1 = '#main' + t;
  	if($(this).length) {
		$(this).click(function(event) {
			if($(t1).html().length>0) $(t1).show();
			else $(t1).load(url+'?js_edit_form_'+t+'=1').fadeIn(200);
		});
	}
  });
<?php }elseif((isset($_smarty_tpl->getVariable('config')->value['self']) ? $_smarty_tpl->getVariable('config')->value['self'] : null)=='modules'){?>
  $('#tab2').bind('click', function(event) {
	var t = $('div.TabbedPanelsContentGroup').find('div.TabbedPanelsContent:eq(1) div:eq(0)');
	if($(t).html().length==0) {
		$(t).load(url+'?js_add_form=1').fadeIn(100);
	}
	return false;
  });
  $('#tab3').bind('click', function(event) {
	var t = $('div.TabbedPanelsContentGroup').find('div.TabbedPanelsContent:eq(2) div:eq(0)');
	if($(t).html().length==0) {
		$(t).load(url+'?js_assign_form=1').fadeIn(100);
	}
  });
<?php }else{ ?>
  $('#tab2').bind('click', function(event) {
	var t = $('div.TabbedPanelsContentGroup').find('div.TabbedPanelsContent:eq(1) div:eq(0)');
	if($(t).html().length==0) {
		$(t).load(url+'?js_add_form=1').fadeIn(100);
	}
	return false;
  });
<?php }?>
});
</script>

<?php }else{ ?>

<span style="cursor:help" onclick="window.open('<?php echo (isset($_smarty_tpl->getVariable('config')->value['path']) ? $_smarty_tpl->getVariable('config')->value['path'] : null);?>
/help.html#<?php echo (isset($_smarty_tpl->getVariable('config')->value['self']) ? $_smarty_tpl->getVariable('config')->value['self'] : null);?>
', 'help','height=260,width=600,scrollbars=1,resizable=1');"><img src="<?php echo (isset($_smarty_tpl->getVariable('config')->value['path']) ? $_smarty_tpl->getVariable('config')->value['path'] : null);?>
images/help.png" border="0" width="16px" height="16px" title="Help for <?php echo (isset($_smarty_tpl->getVariable('config')->value['self']) ? $_smarty_tpl->getVariable('config')->value['self'] : null);?>
: Normal Window"/></span>&nbsp;&nbsp;

<?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('config')->value['colorbox']) ? $_smarty_tpl->getVariable('config')->value['colorbox'] : null);?>
<?php $_tmp7=ob_get_clean();?><?php if ($_tmp7){?>
<span style="cursor:help" onclick="$(this).help('this is a text for help.');"><img src="<?php echo (isset($_smarty_tpl->getVariable('config')->value['path']) ? $_smarty_tpl->getVariable('config')->value['path'] : null);?>
images/help.png" border="0" width="16px" height="16px" title="Help for <?php echo (isset($_smarty_tpl->getVariable('config')->value['self']) ? $_smarty_tpl->getVariable('config')->value['self'] : null);?>
: display TEXT."/></span>&nbsp;&nbsp;

<span><a href="<?php echo (isset($_smarty_tpl->getVariable('config')->value['path']) ? $_smarty_tpl->getVariable('config')->value['path'] : null);?>
/help.html#<?php echo (isset($_smarty_tpl->getVariable('config')->value['self']) ? $_smarty_tpl->getVariable('config')->value['self'] : null);?>
" class="help" style="cursor:help" title="Help for <?php echo (isset($_smarty_tpl->getVariable('config')->value['self']) ? $_smarty_tpl->getVariable('config')->value['self'] : null);?>
: display html file."><img src="<?php echo (isset($_smarty_tpl->getVariable('config')->value['path']) ? $_smarty_tpl->getVariable('config')->value['path'] : null);?>
images/help.png" border="0" width="16px" height="16px" /></a></span>&nbsp;&nbsp;

<span><a href="<?php echo (isset($_smarty_tpl->getVariable('config')->value['ipath']) ? $_smarty_tpl->getVariable('config')->value['ipath'] : null);?>
include/colorbox/content/ohoopee1.jpg" rel="help1" style="cursor:help" title="Help for <?php echo (isset($_smarty_tpl->getVariable('config')->value['self']) ? $_smarty_tpl->getVariable('config')->value['self'] : null);?>
: display image."><img src="<?php echo (isset($_smarty_tpl->getVariable('config')->value['path']) ? $_smarty_tpl->getVariable('config')->value['path'] : null);?>
images/help.png" border="0" width="16px" height="16px" /></a></span>
<?php }?>
<div id="main1">
 <div id="div_search_1" style="text-decoration:underline; cursor:pointer;" title="Show Search Form">Click to Launch Search Form:</div>
 <div id="div_search_2"></div>
 <div id="div_list"> <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('template')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?> </div>
</div>
<!--div id="div_list"> <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('template')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?> </div-->
<?php }?>
<script language="javascript" type="text/javascript">
 if($('#sidebarToggle').length) {
	 var showHideTab = 0;
	 $("#sidebarToggle").click(function(e){
		 e.preventDefault();
		 var t = $(this);
		 if(showHideTab == 0){
			 parent.document.getElementsByTagName('FRAMESET').item(1).cols = '1,*';			 
			 t.addClass("show");
			 showHideTab = 1;
		 } else {
			  parent.document.getElementsByTagName('FRAMESET').item(1).cols = '273,*';
			  t.removeClass("show");
			  showHideTab = 0;
		 }
	});
 } 

<?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('config')->value['colorbox']) ? $_smarty_tpl->getVariable('config')->value['colorbox'] : null);?>
<?php $_tmp8=ob_get_clean();?><?php if ($_tmp8){?>
jQuery.fn.help = function(txt) {
	$.fn.colorbox({ html:'<div class="help">'+txt+'</div>', maxWidth:400, opacity:0.6 });
	return false;
}
$("a[rel='help1']").colorbox({ transition:"fade" });
$("span a.help").colorbox({ width:1200, maxWidth:1200, opacity:0.6, transition:'fade' });
<?php }?>

if($('#div_search_1').length) {
 $('#div_search_1').click(function() {
	if($('#div_search_2').html().length==0) {
		$('#div_search_2').load(url+'?js_search_form=1').fadeIn(200);
	}
	$('#div_search_2').fadeIn(200);
	$('#div_search_1').fadeOut(200);
 });
}

</script>
</body>
</html>
