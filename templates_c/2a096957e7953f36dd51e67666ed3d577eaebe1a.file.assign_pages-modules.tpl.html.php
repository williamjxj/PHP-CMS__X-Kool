<?php /* Smarty version Smarty-3.0.4, created on 2012-02-13 00:04:11
         compiled from "./themes/default//templates/assign_pages-modules.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:9682007464f3899cba4a266-56996813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a096957e7953f36dd51e67666ed3d577eaebe1a' => 
    array (
      0 => './themes/default//templates/assign_pages-modules.tpl.html',
      1 => 1329097174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9682007464f3899cba4a266-56996813',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php  $_config = new Smarty_Internal_Config(((isset($_smarty_tpl->getVariable('config')->value['smarty']) ? $_smarty_tpl->getVariable('config')->value['smarty'] : null)), $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php $_smarty_tpl->tpl_vars['form'] = new Smarty_variable('assign_form', null, null);?><?php $_smarty_tpl->tpl_vars['submit'] = new Smarty_variable('assign_submit', null, null);?><?php $_smarty_tpl->tpl_vars['msg'] = new Smarty_variable('assign_msg', null, null);?>
<?php $_smarty_tpl->tpl_vars['m1'] = new Smarty_variable('m1', null, null);?><?php $_smarty_tpl->tpl_vars['m2'] = new Smarty_variable('m2', null, null);?><?php $_smarty_tpl->tpl_vars['a1'] = new Smarty_variable('a1', null, null);?><?php $_smarty_tpl->tpl_vars['a2'] = new Smarty_variable('a2', null, null);?>

<form class="page-form" id="<?php echo $_smarty_tpl->getVariable('form')->value;?>
" name="<?php echo $_smarty_tpl->getVariable('form')->value;?>
" action="<?php echo (isset($_SERVER['SCRIPT_NAME'])? $_SERVER['SCRIPT_NAME'] : null);?>
" method="post">
<div class="content-headline"><?php echo (($tmp = @(isset($_smarty_tpl->getVariable('config')->value['header']['title']) ? $_smarty_tpl->getVariable('config')->value['header']['title'] : null))===null||$tmp==='' ? 'Assign pages -> Modules' : $tmp);?>
</div>
<div align="center" style="width:60%">
    <table border="0" cellspacing="0" cellpadding="2" width="60%" class="form-table">
      <tr>
        <td align="right" nowrap="nowrap"><label for="sites">Select Site:</label>        </td>
        <td>
        <div class="selectWrapper">
        <select name="sites"  id="sites"  accesskey="S" style="width:<?php echo $_smarty_tpl->getConfigVariable('select_width');?>
">
            <option value="0"> -- Select -- </option>
       <?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('data')->value['sites']) ? $_smarty_tpl->getVariable('data')->value['sites'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value){
?>
            <option value="<?php echo (isset($_smarty_tpl->tpl_vars['ds']->value[0]) ? $_smarty_tpl->tpl_vars['ds']->value[0] : null);?>
" title="<?php echo (isset($_smarty_tpl->tpl_vars['ds']->value[2]) ? $_smarty_tpl->tpl_vars['ds']->value[2] : null);?>
"> <?php echo (isset($_smarty_tpl->tpl_vars['ds']->value[1]) ? $_smarty_tpl->tpl_vars['ds']->value[1] : null);?>
 </option>
      <?php }} ?>
          </select></div></td>
          <td>&nbsp;</td>
        <td align="right" nowrap="nowrap"><label for="pages">Select Component:</label>        </td>
        <td><div class="selectWrapper"><select name="pages"  id="pages"  accesskey="C" style="width:<?php echo $_smarty_tpl->getConfigVariable('select_width');?>
">
            <option value=""> -- Select -- </option>
		<?php if ((isset($_smarty_tpl->getVariable('data')->value['pages']) ? $_smarty_tpl->getVariable('data')->value['pages'] : null)){?>
      <?php  $_smarty_tpl->tpl_vars['dc'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('data')->value['pages']) ? $_smarty_tpl->getVariable('data')->value['pages'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['dc']->key => $_smarty_tpl->tpl_vars['dc']->value){
?>
            <option value="<?php echo (isset($_smarty_tpl->tpl_vars['dc']->value[0]) ? $_smarty_tpl->tpl_vars['dc']->value[0] : null);?>
" title="<?php echo (isset($_smarty_tpl->tpl_vars['dc']->value[2]) ? $_smarty_tpl->tpl_vars['dc']->value[2] : null);?>
"> <?php echo (isset($_smarty_tpl->tpl_vars['dc']->value[1]) ? $_smarty_tpl->tpl_vars['dc']->value[1] : null);?>
 </option>
      <?php }} ?>
        <?php }?>
          </select></div></td>
      </tr>
      <tr>
        <td align="right" valign="middle"><label for="<?php echo $_smarty_tpl->getVariable('m1')->value;?>
">Available<br />
        	Modules:</label></td>
        <td><div class="selectWrapper"><select name="<?php echo $_smarty_tpl->getVariable('m1')->value;?>
[]" id="<?php echo $_smarty_tpl->getVariable('m1')->value;?>
" multiple="multiple" size="30"  style="min-width:<?php echo $_smarty_tpl->getConfigVariable('select_min_width');?>
; width:<?php echo $_smarty_tpl->getConfigVariable('select_width');?>
; max-width:<?php echo $_smarty_tpl->getConfigVariable('select_max_width');?>
">
          <option value="">Please select a module first.</option>
        </select></div></td>
        <td align="center" valign="middle"><label><a id="<?php echo $_smarty_tpl->getVariable('a1')->value;?>
" class="forward-green-arrow"></a></label>
          <label><a id="<?php echo $_smarty_tpl->getVariable('a2')->value;?>
" class="back-green-arrow"></a></label></td>
          <td align="right" valign="middle"><label for="<?php echo $_smarty_tpl->getVariable('m2')->value;?>
">Assigned<br />Modules:</label></td>
        <td><div class="selectWrapper"><select name="<?php echo $_smarty_tpl->getVariable('m2')->value;?>
[]"  id="<?php echo $_smarty_tpl->getVariable('m2')->value;?>
" multiple="multiple" size="30"  style="min-width:<?php echo $_smarty_tpl->getConfigVariable('select_min_width');?>
; width:<?php echo $_smarty_tpl->getConfigVariable('select_width');?>
; max-width:<?php echo $_smarty_tpl->getConfigVariable('select_max_width');?>
">
          </select></div></td>
      </tr>
      <tr>
        <td colspan="5" align="center">
         <div class="big-form-buttons">
              <div class="green-btn">
        <input type="submit" value="Update Modules for <?php echo (isset($_smarty_tpl->getVariable('data')->value['username']) ? $_smarty_tpl->getVariable('data')->value['username'] : null);?>
" name="<?php echo $_smarty_tpl->getVariable('submit')->value;?>
" id="<?php echo $_smarty_tpl->getVariable('submit')->value;?>
">
        </div>
        <input type="hidden" id="uid" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['userid']) ? $_smarty_tpl->getVariable('data')->value['userid'] : null);?>
"  />
          &nbsp; <span id="<?php echo $_smarty_tpl->getVariable('msg')->value;?>
"  style="display: none"><?php echo (isset($_smarty_tpl->getVariable('config')->value['list']['wait1']) ? $_smarty_tpl->getVariable('config')->value['list']['wait1'] : null);?>
</span> &nbsp;
          </div>
        </td>
      </tr>
    </table>
</div>
</form>

<script language="javascript" type="text/javascript">
var form = '#<?php echo $_smarty_tpl->getVariable('form')->value;?>
';
var url = $(form).attr('action');
var submit = '#<?php echo $_smarty_tpl->getVariable('submit')->value;?>
';
var msg = '#<?php echo $_smarty_tpl->getVariable('msg')->value;?>
';
var m1 = '#<?php echo $_smarty_tpl->getVariable('m1')->value;?>
';
var m2 = '#<?php echo $_smarty_tpl->getVariable('m2')->value;?>
';
var a1 = '#<?php echo $_smarty_tpl->getVariable('a1')->value;?>
';
var a2 = '#<?php echo $_smarty_tpl->getVariable('a2')->value;?>
';
var uid = '<?php echo (isset($_smarty_tpl->getVariable('data')->value['userid']) ? $_smarty_tpl->getVariable('data')->value['userid'] : null);?>
';
var username = '<?php echo (isset($_smarty_tpl->getVariable('data')->value['username']) ? $_smarty_tpl->getVariable('data')->value['username'] : null);?>
';
var wait1 = '<?php echo (isset($_smarty_tpl->getVariable('config')->value['list']['wait1']) ? $_smarty_tpl->getVariable('config')->value['list']['wait1'] : null);?>
';
var wait2 = '<?php echo (isset($_smarty_tpl->getVariable('config')->value['list']['wait2']) ? $_smarty_tpl->getVariable('config')->value['list']['wait2'] : null);?>
';

$('#sites').bind('change', function(e) {
	e.preventDefault();
	$('#pages').load(url, { 'js_get_pages':1, 'site_id':$(this).val(), uid:uid });
	$(m1).load(url, { 'js_get_modules':1, 'site_id':$(this).val(), uid:uid });
	$(m2)[0].innerHTML = '';
	return false;
});
$('#pages').bind('change', function() {
	// <:&lt; >:&gt;
	$(m1).text('<option value=""><img src="images/spinner.gif" width="16" height="16" border="0"></option>');
	$(m2).append('<option>'+wait1+'</option>');
	$.get(url, { cid: $(this).val(), step: 1, 'site_id':$('#sites').val() }, function(data) {
		$(m1)[0].innerHTML = '';
		$(m1).append(data);
	});
	$.get(url, { cid: $(this).val(), step: 2, 'site_id':$('#sites').val() }, function(data) {
		$(m2)[0].innerHTML = '';
		$(m2).append(data);
	});
	$(a1).attr("href", "javascript:void(0);");
	$(a2).attr("href", "javascript:void(0);");
	return false;
});
$(a1).click(function() {
	var t1 = $(m1+" option:selected");
	var t = '';
	for (i=0; i<t1.length; i++) {
		t += '<option value="' + $(t1[i]).val() + '">' + $(t1[i]).text() + '</option>'+"\n";
		$(m1+' option[value='+$(t1[i]).val()+']').empty().remove();
	}
	$(m2).append(t);
	$(submit).removeAttr("disabled");
});
$(a2).click(function() {
	var t1 = $(m2+" option:selected");
	var t = '';
	for (i=0; i<t1.length; i++) {
		t += '<option value="' + $(t1[i]).val() + '">' + $(t1[i]).text() + '</option>'+"\n";
		$(m2+' option[value='+$(t1[i]).val()+']').empty().remove();
	}
	$(m1).append(t);
	$(submit).removeAttr("disabled");
});
$(form).submit(function(e) {
	e.preventDefault();
	var all = $(m2+' option').map(function() { return $(this).val(); }).get().join(",");
	$.ajax({
		type: $(form).attr('method'),
		url: url,
		data: $(form).serialize()+'&js_update=1&mids='+all,
		beforeSend: function() {
			$(submit).hide();
			$(msg).show();
		},
		success: function(data) {
			$(submit).show();
			$(msg).hide();			
		}
	});
	return false;
});
</script>
