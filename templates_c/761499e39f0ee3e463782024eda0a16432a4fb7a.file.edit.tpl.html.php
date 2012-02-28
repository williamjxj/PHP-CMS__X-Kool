<?php /* Smarty version Smarty-3.0.4, created on 2012-02-27 01:46:31
         compiled from "./themes/default//templates/edit.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:8542937774f4b26c7388981-20595114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '761499e39f0ee3e463782024eda0a16432a4fb7a' => 
    array (
      0 => './themes/default//templates/edit.tpl.html',
      1 => 1330241714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8542937774f4b26c7388981-20595114',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include './/include/Smarty-3.0.4/libs/plugins/modifier.escape.php';
?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php  $_config = new Smarty_Internal_Config(((isset($_smarty_tpl->getVariable('config')->value['smarty']) ? $_smarty_tpl->getVariable('config')->value['smarty'] : null)), $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php $_smarty_tpl->tpl_vars['dcn'] = new Smarty_variable(1, null, null);?>
<form class="edit-form" id="<?php echo $_smarty_tpl->getVariable('form_id')->value;?>
" name="<?php echo $_smarty_tpl->getVariable('form_id')->value;?>
" method="post" action="<?php echo (isset($_SERVER['SCRIPT_NAME'])? $_SERVER['SCRIPT_NAME'] : null);?>
">
  <table width="60%">
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('edit_form')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>
	<?php if ('dcn'%(isset($_smarty_tpl->getVariable('config')->value['dcn']) ? $_smarty_tpl->getVariable('config')->value['dcn'] : null)){?>
     <tr>
     <?php }?>
	<?php $_smarty_tpl->tpl_vars['column_value'] = new Smarty_variable((isset($_smarty_tpl->getVariable('record')->value[(isset($_smarty_tpl->tpl_vars['item']->value['name']) ? $_smarty_tpl->tpl_vars['item']->value['name'] : null)]) ? $_smarty_tpl->getVariable('record')->value[(isset($_smarty_tpl->tpl_vars['item']->value['name']) ? $_smarty_tpl->tpl_vars['item']->value['name'] : null)] : null), null, null);?>
	<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['readonly']) ? $_smarty_tpl->tpl_vars['item']->value['readonly'] : null)){?><?php $_smarty_tpl->tpl_vars['readonly'] = new Smarty_variable(' readonly="readonly" ', null, null);?>
    <?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars['readonly'] = new Smarty_variable('', null, null);?>
    <?php }?>
   <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['type']) ? $_smarty_tpl->tpl_vars['item']->value['type'] : null)=='text'){?>
    <td><label>
        <?php echo (isset($_smarty_tpl->tpl_vars['item']->value['display_name']) ? $_smarty_tpl->tpl_vars['item']->value['display_name'] : null);?>

        </label></td>
      <td><div class="input"><input name="<?php echo (isset($_smarty_tpl->tpl_vars['item']->value['name']) ? $_smarty_tpl->tpl_vars['item']->value['name'] : null);?>
" type="text" value="<?php echo $_smarty_tpl->getVariable('column_value')->value;?>
" <?php echo $_smarty_tpl->getVariable('readonly')->value;?>
 /></div></td>
<?php }elseif((isset($_smarty_tpl->tpl_vars['item']->value['type']) ? $_smarty_tpl->tpl_vars['item']->value['type'] : null)=='password'){?>
      <td><label>
        <?php echo (isset($_smarty_tpl->tpl_vars['item']->value['display_name']) ? $_smarty_tpl->tpl_vars['item']->value['display_name'] : null);?>

        </label></td>
      <td><div class="input"><input name="<?php echo (isset($_smarty_tpl->tpl_vars['item']->value['name']) ? $_smarty_tpl->tpl_vars['item']->value['name'] : null);?>
" type="password" value="<?php echo $_smarty_tpl->getVariable('column_value')->value;?>
" /></div>
      </td>
      <?php }elseif((isset($_smarty_tpl->tpl_vars['item']->value['type']) ? $_smarty_tpl->tpl_vars['item']->value['type'] : null)=='select'){?>
      <td><label> <?php echo (isset($_smarty_tpl->tpl_vars['item']->value['display_name']) ? $_smarty_tpl->tpl_vars['item']->value['display_name'] : null);?>
 </label></td>
      <td><div class="selectWrapper"><select name="<?php echo (isset($_smarty_tpl->tpl_vars['item']->value['name']) ? $_smarty_tpl->tpl_vars['item']->value['name'] : null);?>
">
	<?php if ($_smarty_tpl->getVariable('column_value')->value){?>
		<option value="<?php echo $_smarty_tpl->getVariable('column_value')->value;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('column_value')->value,'html');?>
</option>
	<?php }?>
	</select></div></td>
      <?php }elseif((isset($_smarty_tpl->tpl_vars['item']->value['type']) ? $_smarty_tpl->tpl_vars['item']->value['type'] : null)=='date'){?>
      <td><label>
        <?php echo (isset($_smarty_tpl->tpl_vars['item']->value['display_name']) ? $_smarty_tpl->tpl_vars['item']->value['display_name'] : null);?>

        </label></td>
      <td><?php if ($_smarty_tpl->getVariable('readonly')->value){?>

      	<div class="input">
	        <input type="text" name="<?php echo (isset($_smarty_tpl->tpl_vars['item']->value['name']) ? $_smarty_tpl->tpl_vars['item']->value['name'] : null);?>
" value="<?php echo $_smarty_tpl->getVariable('column_value')->value ? $_smarty_tpl->getVariable('column_value')->value : 'YYYY-MM-DD';?>
" onFocus="this.select();" size="<?php echo (isset($_smarty_tpl->tpl_vars['item']->value['size']) ? $_smarty_tpl->tpl_vars['item']->value['size'] : null);?>
" />
        </div>
        <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars['did'] = new Smarty_variable('date_'+(isset($_smarty_tpl->getVariable('record')->value[(isset($_smarty_tpl->tpl_vars['item']->value['name']) ? $_smarty_tpl->tpl_vars['item']->value['name'] : null)]) ? $_smarty_tpl->getVariable('record')->value[(isset($_smarty_tpl->tpl_vars['item']->value['name']) ? $_smarty_tpl->tpl_vars['item']->value['name'] : null)] : null), null, null);?>
        <a href="javascript: fPopCalendar(<?php echo $_smarty_tpl->getVariable('did')->value;?>
)">
        <div class="input calendarinput"><input type="text" name="<?php echo (isset($_smarty_tpl->tpl_vars['item']->value['name']) ? $_smarty_tpl->tpl_vars['item']->value['name'] : null);?>
" value="<?php echo $_smarty_tpl->getVariable('column_value')->value ? $_smarty_tpl->getVariable('column_value')->value : 'YYYY-MM-DD';?>
"  id="<?php echo $_smarty_tpl->getVariable('did')->value;?>
" onFocus="this.select();" />
        <img src="<?php echo (isset($_smarty_tpl->getVariable('config')->value['path']) ? $_smarty_tpl->getVariable('config')->value['path'] : null);?>
/images/calendar.png" alt="<?php echo (isset($_smarty_tpl->getVariable('record')->value[(isset($_smarty_tpl->tpl_vars['item']->value['name']) ? $_smarty_tpl->tpl_vars['item']->value['name'] : null)]) ? $_smarty_tpl->getVariable('record')->value[(isset($_smarty_tpl->tpl_vars['item']->value['name']) ? $_smarty_tpl->tpl_vars['item']->value['name'] : null)] : null);?>
" border="0" /></a>
        </div>
        <?php }?>
      </td>
      <?php }elseif((isset($_smarty_tpl->tpl_vars['item']->value['type']) ? $_smarty_tpl->tpl_vars['item']->value['type'] : null)=='textarea'){?>
      <td><label>
        <?php echo (isset($_smarty_tpl->tpl_vars['item']->value['display_name']) ? $_smarty_tpl->tpl_vars['item']->value['display_name'] : null);?>

        </label></td>
      <td><div class="input"><textarea name="<?php echo (isset($_smarty_tpl->tpl_vars['item']->value['name']) ? $_smarty_tpl->tpl_vars['item']->value['name'] : null);?>
" <?php echo $_smarty_tpl->getVariable('readonly')->value;?>
 ><?php echo $_smarty_tpl->getVariable('column_value')->value;?>
</textarea></div></td>
      <?php }elseif((isset($_smarty_tpl->tpl_vars['item']->value['type']) ? $_smarty_tpl->tpl_vars['item']->value['type'] : null)=='radio'){?>
      <td><label>
        <?php echo (isset($_smarty_tpl->tpl_vars['item']->value['display_name']) ? $_smarty_tpl->tpl_vars['item']->value['display_name'] : null);?>

        </label></td>
      <td>
      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['item']->value['lists']) ? $_smarty_tpl->tpl_vars['item']->value['lists'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?> 
	  	<?php if ((isset($_smarty_tpl->tpl_vars['k']->value) ? $_smarty_tpl->tpl_vars['k']->value : null)==$_smarty_tpl->getVariable('column_value')->value){?>
        <div class="radio">
        <input name="<?php echo (isset($_smarty_tpl->tpl_vars['item']->value['name']) ? $_smarty_tpl->tpl_vars['item']->value['name'] : null);?>
" type="radio" value="<?php echo (isset($_smarty_tpl->tpl_vars['k']->value) ? $_smarty_tpl->tpl_vars['k']->value : null);?>
" checked="checked" >
        <label>
        <?php echo (isset($_smarty_tpl->tpl_vars['v']->value) ? $_smarty_tpl->tpl_vars['v']->value : null);?>

        </label>
        </div>
        <?php }else{ ?>
        <div class="radio">
        <input name="<?php echo (isset($_smarty_tpl->tpl_vars['item']->value['name']) ? $_smarty_tpl->tpl_vars['item']->value['name'] : null);?>
" type="radio" value="<?php echo (isset($_smarty_tpl->tpl_vars['k']->value) ? $_smarty_tpl->tpl_vars['k']->value : null);?>
" >
        <label>
        <?php echo (isset($_smarty_tpl->tpl_vars['v']->value) ? $_smarty_tpl->tpl_vars['v']->value : null);?>

        </label>
        </div>
        <?php }?>
        <?php }} ?>
      </td>
      <?php }elseif((isset($_smarty_tpl->tpl_vars['item']->value['type']) ? $_smarty_tpl->tpl_vars['item']->value['type'] : null)=='checkbox'){?>
      	<?php if ($_smarty_tpl->getVariable('column_value')->value==$_smarty_tpl->getVariable('k')->value){?>
		<?php $_smarty_tpl->tpl_vars['checked'] = new Smarty_variable(' checked="checked" ', null, null);?>
        <?php }?>
      <td><label>
        <?php echo (isset($_smarty_tpl->tpl_vars['item']->value['display_name']) ? $_smarty_tpl->tpl_vars['item']->value['display_name'] : null);?>

        </label></td>
      <td>
      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['item']->value['lists']) ? $_smarty_tpl->tpl_vars['item']->value['lists'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <input class="check" name="<?php echo (isset($_smarty_tpl->tpl_vars['item']->value['name']) ? $_smarty_tpl->tpl_vars['item']->value['name'] : null);?>
" type="checkbox" value="<?php echo (isset($_smarty_tpl->tpl_vars['k']->value) ? $_smarty_tpl->tpl_vars['k']->value : null);?>
" <?php echo $_smarty_tpl->getVariable('checked')->value;?>
 />
        <label>
        <?php echo (isset($_smarty_tpl->tpl_vars['v']->value) ? $_smarty_tpl->tpl_vars['v']->value : null);?>

        </label>
        <?php }} ?>
      </td>
      <?php }elseif((isset($_smarty_tpl->tpl_vars['item']->value['type']) ? $_smarty_tpl->tpl_vars['item']->value['type'] : null)=='hidden'){?>
      <input type="hidden" name="<?php echo (isset($_smarty_tpl->tpl_vars['item']->value['name']) ? $_smarty_tpl->tpl_vars['item']->value['name'] : null);?>
" value="<?php echo $_smarty_tpl->getVariable('column_value')->value;?>
" />
      <?php }?>
      <?php if (!($_smarty_tpl->getVariable('dcn')->value%(isset($_smarty_tpl->getVariable('config')->value['dcn']) ? $_smarty_tpl->getVariable('config')->value['dcn'] : null))){?> </tr> <?php }?>
    <?php $_smarty_tpl->tpl_vars['dcn'] = new Smarty_variable($_smarty_tpl->getVariable('dcn')->value+1, null, null);?>
    <?php }} ?>
    <tr>
      <td colspan="<?php echo (isset($_smarty_tpl->getVariable('config')->value['dcn']) ? $_smarty_tpl->getVariable('config')->value['dcn'] : null)*2;?>
" align="center">
            <div class="submit-buttons">
      <div class="green-btn">      
	      <input type="submit" name="edit_submit" value="Update" />
      </div>		
        <input type="reset" name="reset" value="Reset" />
        <span id="span_<?php echo (isset($_smarty_tpl->getVariable('item')->value['name']) ? $_smarty_tpl->getVariable('item')->value['name'] : null);?>
" style="display: none">
        <?php ob_start();?><?php echo $_smarty_tpl->getConfigVariable('wait1');?>
<?php $_tmp1=ob_get_clean();?><?php echo (($tmp = @(isset($_smarty_tpl->getVariable('config')->value['list']['wait1']) ? $_smarty_tpl->getVariable('config')->value['list']['wait1'] : null))===null||$tmp==='' ? $_tmp1 : $tmp);?>
 
        </span>
		</div>
		</td>
    </tr>
  </table>
</form>
<script language="javascript" type="text/javascript">
var id = '<?php echo $_smarty_tpl->getVariable('form_id')->value;?>
';
$('#'+id).bind('submit', function(event) {
	event.preventDefault();
	$.ajax({
		type: $(this).attr('method'),
		url: $(this).attr('action'),
		data: $(this).serialize()+'&action=edit',
		dataType: 'json',
		// beforeSend: function() { $('#span_'+id).prev().hide(); $('#span_'+id).show(); },
		success: function(data) {
			$('.modal-window').fadeOut(200, function(){ $('#modal-overlay').hide(); });
			var ary = eval(data);
			var t = id.substr(id.indexOf('-')+1);
			var r = $('#'+t);
			for(var i=0; i<ary.length; i++) $(r).find('td:eq('+(i+1)+')').text(ary[i]);
		}
	});
	return false;
});
$("input[value=Close]").click(function() {
	//$(this).parents('div[class=modal-window]').fadeOut().end().prev('div[id=modal-overlay]').hide(); // not work.
	/* 1.  $('.modal-window').fadeOut(200, function(){ $('#modal-overlay').hide(); }); return false; */
	$('.modal-close').trigger('click');
});
$("input.close").click(function(){
	var t = $(this);
	t.closest("form").addClass("formHide");
	$("form.formHide").parents("tr").hide();        
});    
$(".subForm table tr td label").closest("td").attr("align","right");
$(".subForm table tr td input[type=radio]").closest("td").removeAttr("align");
</script>
