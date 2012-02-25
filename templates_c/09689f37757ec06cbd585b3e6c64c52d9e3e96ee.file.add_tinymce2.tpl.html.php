<?php /* Smarty version Smarty-3.0.4, created on 2012-02-16 17:36:42
         compiled from "./themes/default/templates/add_tinymce2.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:17802136274f3d84fa742619-23709988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09689f37757ec06cbd585b3e6c64c52d9e3e96ee' => 
    array (
      0 => './themes/default/templates/add_tinymce2.tpl.html',
      1 => 1329353515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17802136274f3d84fa742619-23709988',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php  $_config = new Smarty_Internal_Config(((isset($_smarty_tpl->getVariable('config')->value['smarty']) ? $_smarty_tpl->getVariable('config')->value['smarty'] : null)), $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<script language="javascript" type="text/javascript">

var dt=new Date();
var monthname=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
var TODAY = monthname[dt.getMonth()] + " " + dt.getDate() + ", " + dt.getFullYear();
$('#title_3').val(TODAY); // $('#elm3').focus(); // no use.

$(document).ready(function() {
 jQuery.init_tinyMCE = function(WYSIWYG) {
  return tinyMCE.init({
	mode : "exact",
	theme : "advanced",
	elements : 'elm3',	
	plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
	theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
	theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
	theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
	theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",
	theme_advanced_toolbar_location : "top",
	theme_advanced_toolbar_align : "left",
	theme_advanced_statusbar_location : "bottom",
	theme_advanced_resizing : true,
	content_css : "<?php echo (isset($_smarty_tpl->getVariable('config')->value['ipath']) ? $_smarty_tpl->getVariable('config')->value['ipath'] : null);?>
include/tinymce/examples/css/content.css",
	template_external_list_url : "<?php echo (isset($_smarty_tpl->getVariable('config')->value['ipath']) ? $_smarty_tpl->getVariable('config')->value['ipath'] : null);?>
include/tinymce/examples/lists/template_list.js",
	external_link_list_url : "<?php echo (isset($_smarty_tpl->getVariable('config')->value['ipath']) ? $_smarty_tpl->getVariable('config')->value['ipath'] : null);?>
include/tinymce/examples/lists/link_list.js",
	external_image_list_url : "<?php echo (isset($_smarty_tpl->getVariable('config')->value['ipath']) ? $_smarty_tpl->getVariable('config')->value['ipath'] : null);?>
include/tinymce/examples/lists/image_list.js",
	media_external_list_url : "<?php echo (isset($_smarty_tpl->getVariable('config')->value['ipath']) ? $_smarty_tpl->getVariable('config')->value['ipath'] : null);?>
include/tinymce/examples/lists/media_list.js"
  });
 };

  if($('#elm3').length) {
	var ed=tinyMCE.get('elm3');
	if(!ed) { jQuery.init_tinyMCE('elm3');}
  }
  else {
	alert('where is elm3? can not initialize.');
  }  
});

</script>

<form id="form_add_tinymce" name="form_add_tinymce" method="post" action="<?php echo (isset($_SERVER['SCRIPT_NAME'])? $_SERVER['SCRIPT_NAME'] : null);?>
" target="iframe_add_tinymce">
  <fieldset>
  <legend>Add Content</legend>

  <label for="title_3"> Title: </label>  
  <a href="javascript: fPopCalendar('title_3')">
        <input name="title_3" id="title_3" type="text" onFocus="this.select();" size="90" />
        <img src="<?php echo (isset($_smarty_tpl->getVariable('config')->value['path']) ? $_smarty_tpl->getVariable('config')->value['path'] : null);?>
images/cal2.jpg" width="14" height="14" alt="date" border="0"></a>
  <br />
 <label for="notes_3"> Title: </label>
  
  <textarea id="notes_3" name="notes_3" style="width:60%;height:60px;"  />
  <br />

  <label for="elm3"> HTML:</label>
  <br />
  <textarea name="elm3" id="elm3" style="width: 60%; height: 650px" accesskey="C"></textarea>
  
  <div> <a href="javascript:;" onMouseDown="tinyMCE.get('elm3').show();">[Show]</a> <a href="javascript:;" onMouseDown="tinyMCE.get('elm3').hide();">[Hide]</a> <a href="javascript:;" onMouseDown="tinyMCE.get('elm3').execCommand('Bold');">[Bold]</a> <a href="javascript:;" onMouseDown="alert(tinyMCE.get('elm3').getContent());">[Get contents]</a> <a href="javascript:;" onMouseDown="alert(tinyMCE.get('elm3').selection.getContent());">[Get selected HTML]</a> <a href="javascript:;" onMouseDown="alert(tinyMCE.get('elm3').selection.getContent({ format : 'text' }));">[Get selected text]</a> <a href="javascript:;" onMouseDown="alert(tinyMCE.get('elm3').selection.getNode().nodeName);">[Get selected element]</a> <a href="javascript:;" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<b>Hello world!!</b>');">[Insert HTML]</a> <a href="javascript:;" onMouseDown="tinyMCE.execCommand('mceReplaceContent',false,'<b><?php echo $_smarty_tpl->getVariable('selection')->value;?>
</b>');">[Replace selection]</a> </div>
   <br />
  <input type="submit" value="Save" name="add_submit" class="save" />
  <input type="reset" value="Reset" class="reset" />
  </fieldset>
</form>
<iframe id="iframe_add_tinymce" name="iframe_add_tinymce" src="about:blank" frameborder="0" style="width:500px;height:100px;border:0px solid #fff;"></iframe>