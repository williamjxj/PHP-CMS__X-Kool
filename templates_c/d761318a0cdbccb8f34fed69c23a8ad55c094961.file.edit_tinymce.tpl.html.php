<?php /* Smarty version Smarty-3.0.4, created on 2012-02-27 01:30:05
         compiled from "./themes/default//templates/edit_tinymce.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:4594268394f4b22ed9f8342-16999567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd761318a0cdbccb8f34fed69c23a8ad55c094961' => 
    array (
      0 => './themes/default//templates/edit_tinymce.tpl.html',
      1 => 1330042132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4594268394f4b22ed9f8342-16999567',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php  $_config = new Smarty_Internal_Config(((isset($_smarty_tpl->getVariable('config')->value['smarty']) ? $_smarty_tpl->getVariable('config')->value['smarty'] : null)), $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php $_smarty_tpl->tpl_vars['r'] = new Smarty_variable((isset($_smarty_tpl->getVariable('data')->value['record']) ? $_smarty_tpl->getVariable('data')->value['record'] : null), null, null);?>
<?php $_smarty_tpl->tpl_vars['cid'] = new Smarty_variable((isset($_smarty_tpl->getVariable('r')->value['cid']) ? $_smarty_tpl->getVariable('r')->value['cid'] : null), null, null);?>
<?php ob_start();?><?php echo $_smarty_tpl->getVariable('cid')->value;?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['elm'] = new Smarty_variable('elm_'+$_tmp1, null, null);?> 

<form class="page-form" id="form_<?php echo $_smarty_tpl->getVariable('cid')->value;?>
" name="form_<?php echo $_smarty_tpl->getVariable('cid')->value;?>
" method="POST" action="<?php echo (isset($_SERVER['SCRIPT_NAME'])? $_SERVER['SCRIPT_NAME'] : null);?>
" target="iframe_tinymce">

  <div class="content-headline">
  
     <div class="headline-options">
      <label for="contents"> Contents: </label>
      <div class="selectWrapper">
      <select id="contents" name="contents" accesskey="L"  style="width:<?php echo $_smarty_tpl->getConfigVariable('select_width');?>
">
        <option value="<?php echo $_smarty_tpl->getVariable('cid')->value;?>
"> <?php echo $_smarty_tpl->getVariable('cid')->value;?>
 - <?php echo (($tmp = @(isset($_smarty_tpl->getVariable('r')->value['linkname']) ? $_smarty_tpl->getVariable('r')->value['linkname'] : null))===null||$tmp==='' ? ' -- Select -- ' : $tmp);?>
 </option>
	    <?php  $_smarty_tpl->tpl_vars['dc'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('data')->value['contents']) ? $_smarty_tpl->getVariable('data')->value['contents'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['dc']->key => $_smarty_tpl->tpl_vars['dc']->value){
?>
        <option value="<?php echo (isset($_smarty_tpl->tpl_vars['dc']->value[0]) ? $_smarty_tpl->tpl_vars['dc']->value[0] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['dc']->value[0]) ? $_smarty_tpl->tpl_vars['dc']->value[0] : null);?>
 - <?php echo (isset($_smarty_tpl->tpl_vars['dc']->value[1]) ? $_smarty_tpl->tpl_vars['dc']->value[1] : null);?>
</option>
      <?php }} ?>
      </select>
      </div>
    </div>
  
  
  	Edit Content <?php echo (isset($_smarty_tpl->getVariable('r')->value['linkname']) ? $_smarty_tpl->getVariable('r')->value['linkname'] : null);?>

  </div>

  <div class="input">
    <label for="sites_<?php echo $_smarty_tpl->getVariable('cid')->value;?>
"> Site: </label>
    <div class="selectWrapper">
    <select id="sites_<?php echo $_smarty_tpl->getVariable('cid')->value;?>
" name="sites" accesskey="S" style="width:<?php echo $_smarty_tpl->getConfigVariable('select_width');?>
">
      <option value="<?php echo (isset($_smarty_tpl->getVariable('r')->value['site_id']) ? $_smarty_tpl->getVariable('r')->value['site_id'] : null);?>
"> <?php echo (isset($_smarty_tpl->getVariable('r')->value['sname']) ? $_smarty_tpl->getVariable('r')->value['sname'] : null);?>
 </option>
      
  <?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('data')->value['sites']) ? $_smarty_tpl->getVariable('data')->value['sites'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value){
?>
    
      <option value="<?php echo (isset($_smarty_tpl->tpl_vars['ds']->value[0]) ? $_smarty_tpl->tpl_vars['ds']->value[0] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['ds']->value[1]) ? $_smarty_tpl->tpl_vars['ds']->value[1] : null);?>
</option>
      
    <?php }} ?>
  
    </select>
    </div>
  </div>
  <div class="input">
    <label for="modules_<?php echo $_smarty_tpl->getVariable('cid')->value;?>
"> Module: </label>
    <div class="selectWrapper">
    <select id="modules_<?php echo $_smarty_tpl->getVariable('cid')->value;?>
" name="modules" accesskey="M" style="width:<?php echo $_smarty_tpl->getConfigVariable('select_width');?>
">
      <option value="<?php echo (isset($_smarty_tpl->getVariable('r')->value['mid']) ? $_smarty_tpl->getVariable('r')->value['mid'] : null);?>
"> <?php echo (isset($_smarty_tpl->getVariable('r')->value['mname']) ? $_smarty_tpl->getVariable('r')->value['mname'] : null);?>
 </option>
  <?php  $_smarty_tpl->tpl_vars['dm'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('data')->value['modules']) ? $_smarty_tpl->getVariable('data')->value['modules'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['dm']->key => $_smarty_tpl->tpl_vars['dm']->value){
?>
    
      <option value="<?php echo (isset($_smarty_tpl->tpl_vars['dm']->value[0]) ? $_smarty_tpl->tpl_vars['dm']->value[0] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['dm']->value[1]) ? $_smarty_tpl->tpl_vars['dm']->value[1] : null);?>
</option>
      
    <?php }} ?>
    </select>
    </div>
  </div>
  <div class="input">
    <label for="divisions_<?php echo $_smarty_tpl->getVariable('cid')->value;?>
"> Division: </label>
    <div class="selectWrapper">
    <select id="divisions_<?php echo $_smarty_tpl->getVariable('cid')->value;?>
" name="divisions" accesskey="D" style="width:<?php echo $_smarty_tpl->getConfigVariable('select_width');?>
">
      <option value="<?php echo (isset($_smarty_tpl->getVariable('r')->value['division']) ? $_smarty_tpl->getVariable('r')->value['division'] : null);?>
"> <?php echo (isset($_smarty_tpl->getVariable('r')->value['division']) ? $_smarty_tpl->getVariable('r')->value['division'] : null);?>
 </option>
      
  <?php  $_smarty_tpl->tpl_vars['dd'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('data')->value['divisions']) ? $_smarty_tpl->getVariable('data')->value['divisions'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['dd']->key => $_smarty_tpl->tpl_vars['dd']->value){
?>
  
      <option value="<?php echo (isset($_smarty_tpl->tpl_vars['dd']->value[0]) ? $_smarty_tpl->tpl_vars['dd']->value[0] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['dd']->value[1]) ? $_smarty_tpl->tpl_vars['dd']->value[1] : null);?>
</option>
      
  <?php }} ?>
  
    </select>
    </div>
  </div>

  <div class="input textfield">
  <label for="input_linkname_3"> Link Name: </label>
  <span id="sprytextfield1">
  <input type="text" id="input_linkname_3" name="input_linkname_3" size="90"  value="<?php echo (isset($_smarty_tpl->getVariable('r')->value['linkname']) ? $_smarty_tpl->getVariable('r')->value['linkname'] : null);?>
" />
  <span class="textfieldRequiredMsg">A value is required.</span></span>
  </div>
  <div class="input small-textarea">
  <label for="input_notes_3"> Notes:</label>
  <span id="sprytextarea1">
  <textarea class="notes" name="input_notes_3" id="input_notes_3" cols="60"><?php echo (isset($_smarty_tpl->getVariable('r')->value['notes']) ? $_smarty_tpl->getVariable('r')->value['notes'] : null);?>
</textarea>
  <span class="textareaRequiredMsg">A value is required.</span></span>
  </div>
  <div class="input textfield">
  <label for="input_title_3"> Title: </label>
  <span id="sprytextfield3">
  <input type="text" id="input_title_3" name="input_title_3" size="90"  value="<?php echo (isset($_smarty_tpl->getVariable('r')->value['title']) ? $_smarty_tpl->getVariable('r')->value['title'] : null);?>
" />
  <span class="textfieldRequiredMsg">A value is required.</span></span>
  </div>  
  <div class="input mce_editor">
  <label for="elm_<?php echo $_smarty_tpl->getVariable('cid')->value;?>
"> HTML:</label>
  <br />
  <textarea name="elm_<?php echo $_smarty_tpl->getVariable('cid')->value;?>
" id="elm_<?php echo $_smarty_tpl->getVariable('cid')->value;?>
" style="width: 60%; height: 50%" accesskey="C"><?php echo (isset($_smarty_tpl->getVariable('r')->value['content']) ? $_smarty_tpl->getVariable('r')->value['content'] : null);?>
</textarea>
  
  <div class="editor-options"> <a href="javascript:;" onMouseDown="tinyMCE.get(elm_<?php echo $_smarty_tpl->getVariable('cid')->value;?>
).show();">[Show]</a> <a href="javascript:;" onMouseDown="tinyMCE.get(elm_<?php echo $_smarty_tpl->getVariable('cid')->value;?>
).hide();">[Hide]</a> <a href="javascript:;" onMouseDown="tinyMCE.get(elm_<?php echo $_smarty_tpl->getVariable('cid')->value;?>
).execCommand('Bold');">[Bold]</a> <a href="javascript:;" onMouseDown="alert(tinyMCE.get(elm_<?php echo $_smarty_tpl->getVariable('cid')->value;?>
).getContent());">[Get contents]</a> <a href="javascript:;" onMouseDown="alert(tinyMCE.get(elm_<?php echo $_smarty_tpl->getVariable('cid')->value;?>
).selection.getContent());">[Get selected HTML]</a> <a href="javascript:;" onMouseDown="alert(tinyMCE.get(elm_<?php echo $_smarty_tpl->getVariable('cid')->value;?>
).selection.getContent({ format : 'text' }));">[Get selected text]</a> <a href="javascript:;" onMouseDown="alert(tinyMCE.get(elm_<?php echo $_smarty_tpl->getVariable('cid')->value;?>
).selection.getNode().nodeName);">[Get selected element]</a> <a href="javascript:;" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<b>Hello world!!</b>');">[Insert HTML]</a> <a href="javascript:;" onMouseDown="tinyMCE.execCommand('mceReplaceContent',false,'<b><?php echo $_smarty_tpl->getVariable('selection')->value;?>
</b>');">[Replace selection]</a> </div>
  
  </div>
   <div class="submit-buttons">
  	  <div class="green-btn">
		  <input type="submit" value="Save" name="edit_submit" class="save" />
	  </div>
	  <input type="reset" value="Reset" class="reset" />
	  <input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->getVariable('cid')->value;?>
" />
  </div>

</form>
<!--no need any more, just keep here, will remove later.-->
<iframe id="iframe_tinymce" name="iframe_tinymce" src="about:blank" frameborder="0" style="width:0;height:0;border:0px solid #fff;"></iframe>

<script language="javascript" type="text/javascript">
$(document).ready(function() {
  var cid = '<?php echo $_smarty_tpl->getVariable('cid')->value;?>
';
  var url = '<?php echo (isset($_SERVER['SCRIPT_NAME'])? $_SERVER['SCRIPT_NAME'] : null);?>
';
  var form = '#form_'+cid;
  var site = '#sites_'+cid;
  var module = '#modules_'+cid;
  var division = '#divisions_'+cid;  
  var elm = 'elm_'+cid;  
  //alert(elm+','+site+','+module+','+division);

  $(form + ' select[name=sites]').bind('change', function() {
	$(module).load(url+'?js_get_modules=1&site_id='+$(this).val());
	return false;
  });
  
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
	elements : WYSIWYG,
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

 jQuery.init_tinyMCE(elm);
 
 // cid DOES dynamic changes !
 $('#contents').bind('change', function(e) {
	e.preventDefault();
	var cid = '<?php echo $_smarty_tpl->getVariable('cid')->value;?>
';
	var elm = 'elm_'+cid;
	if (!$(form).is(':visible')) {
		$(form).show('fast');
	}
	var ed = tinyMCE.get(elm);
	if(ed) { ed.setProgressState(1)};
	$.ajax({
		type: 'get',
		url: url,
		data: 'js_get_record=1&cid='+$(this).val(),
		dataType: 'json',
		success: function(data){
			if(ed) {
				ed.setProgressState(0);
				ed.setContent(data.content);
			}
			else {
				tinyMCE.get(elm).setContent(data.content);
			}
			
			$(site + " option[value='"+data.site_id+"']").attr('selected', 'selected');
			$(module + " option[value='"+data.mid+"']").attr('selected', 'selected');
			$(division + " option[value='"+data.division+"']").attr('selected', 'selected');

			$('#input_linkname_3').val(data.linkname);
			$('#input_title_3').val(data.title).show('fast').attr('readonly',true);
			$('#input_notes_3').val(data.notes);
			$('#id').val(data.cid);
		}
	})
 });

});

</script>
