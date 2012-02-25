<?php /* Smarty version Smarty-3.0.4, created on 2012-02-12 22:02:30
         compiled from "./themes/default//templates/add_tinymce.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:5643150334f387d462c5e14-24203983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc5c73904c7c96ccb1e85d695324224934f320ad' => 
    array (
      0 => './themes/default//templates/add_tinymce.tpl.html',
      1 => 1329097172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5643150334f387d462c5e14-24203983',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php  $_config = new Smarty_Internal_Config(((isset($_smarty_tpl->getVariable('config')->value['smarty']) ? $_smarty_tpl->getVariable('config')->value['smarty'] : null)), $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<script language="javascript" type="text/javascript">
$(document).ready(function() {

  var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
  var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
  $('#input_title_3').change(function() {
	var t = $('#input_title_3').val();
	t = t.replace(/\s+/g, '_').replace(/\'/g,'').replace(/\"/g,'').replace(/,/g,'').replace(/\./g,'') + '.html';
  });
  
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
 jQuery.fn.validate_form = function(form) {
	if(form.notes.value=='' || /^\s+$/.test(form.notes.value)) {
		alert("Please input a notes");
		form.notes.focus();
		return false;
	}
	return true;
  };
  if($('#elm3').length) {
	var ed=tinyMCE.get('elm3');
	if(!ed) { jQuery.init_tinyMCE('elm3');} //typeof(ed)==undefined?
  }
  else {
	alert('where is elm3? can not initialize.');
  }  

  var site_id = <?php echo (isset($_smarty_tpl->getVariable('data')->value['sites'][0][0]) ? $_smarty_tpl->getVariable('data')->value['sites'][0][0] : null);?>
;
  var url = '<?php echo $_smarty_tpl->getVariable('SCRIPT_NAME')->value;?>
';
  var modules = '#modules';

  $(modules).load(url+'?js_get_modules=1&site_id='+site_id);
});
</script>
<form  class="page-form" id="form_tinymce" name="form_tinymce" method="post" action="<?php echo (isset($_SERVER['SCRIPT_NAME'])? $_SERVER['SCRIPT_NAME'] : null);?>
" target="iframe_add_tinymce">
  <div class="content-headline">添加正文</div>
  <div class="input">
    <label for="modules"> 模块: </label>
    <div class="selectWrapper">
      <select id="modules" name="modules" accesskey="M" style="width:<?php echo $_smarty_tpl->getConfigVariable('select_width');?>
">
      </select>
    </div>
  </div>
  <div class="input textfield">
    <label for="input_linkname_3"> 正文标题: </label>
    <span id="sprytextfield1">
    <input type="text" id="input_linkname_3" name="input_linkname_3" size="90"  />
    <span class="textfieldRequiredMsg">A value is required.</span></span> </div>
  <div class="input small-textarea">
    <label for="input_notes_3"> 注释:</label>
    <span id="sprytextarea1">
    <textarea class="notes" name="input_notes_3" id="input_notes_3" cols="60"></textarea>
    <span class="textareaRequiredMsg">A value is required.</span></span> </div>
  <div class="input textfield">
    <label for="input_title_3"> 作者: </label>
    <span id="sprytextfield1">
    <input type="text" id="input_title_3" name="input_title_3" size="90"  />
    <span class="textfieldRequiredMsg">A value is required.</span></span> </div>
  <div class="input mce_editor">
    <label for="elm3"> 正文:</label>
    <br />
    <textarea name="elm3" id="elm3" style="width: 60%; height: 50%" accesskey="C"></textarea>
    <div class="editor-options"> <a href="javascript:;" onMouseDown="tinyMCE.get('elm3').show();">[Show]</a> <a href="javascript:;" onMouseDown="tinyMCE.get('elm3').hide();">[Hide]</a> <a href="javascript:;" onMouseDown="tinyMCE.get('elm3').execCommand('Bold');">[Bold]</a> <a href="javascript:;" onMouseDown="alert(tinyMCE.get('elm3').getContent());">[Get contents]</a> <a href="javascript:;" onMouseDown="alert(tinyMCE.get('elm3').selection.getContent());">[Get selected HTML]</a> <a href="javascript:;" onMouseDown="alert(tinyMCE.get('elm3').selection.getContent({ format : 'text' }));">[Get selected text]</a> <a href="javascript:;" onMouseDown="alert(tinyMCE.get('elm3').selection.getNode().nodeName);">[Get selected element]</a> <a href="javascript:;" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<b>Hello world!!</b>');">[Insert HTML]</a> <a href="javascript:;" onMouseDown="tinyMCE.execCommand('mceReplaceContent',false,'<b><?php echo $_smarty_tpl->getVariable('selection')->value;?>
</b>');">[Replace selection]</a> </div>
  </div>
  <div class="submit-buttons">
    <div class="green-btn">
      <input type="submit" value="保存" name="add_submit" class="save" />
    </div>
    <input type="reset" value="恢复" class="reset" />
    <input type="hidden" id="sites" name="sites" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['sites'][0][0]) ? $_smarty_tpl->getVariable('data')->value['sites'][0][0] : null);?>
" />
  </div>
</form>

<iframe id="iframe_add_tinymce" name="iframe_add_tinymce" src="about:blank" frameborder="0" style="width:0;height:0;border:0px solid #fff;"></iframe>
