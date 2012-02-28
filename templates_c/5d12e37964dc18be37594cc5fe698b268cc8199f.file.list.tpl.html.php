<?php /* Smarty version Smarty-3.0.4, created on 2012-02-27 01:29:55
         compiled from "./themes/default//templates/list.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:8231029214f4b22e3bb5d70-28354211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d12e37964dc18be37594cc5fe698b268cc8199f' => 
    array (
      0 => './themes/default//templates/list.tpl.html',
      1 => 1330241719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8231029214f4b22e3bb5d70-28354211',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_capitalize')) include './/include/Smarty-3.0.4/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_function_cycle')) include './/include/Smarty-3.0.4/libs/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_regex_replace')) include './/include/Smarty-3.0.4/libs/plugins/modifier.regex_replace.php';
if (!is_callable('smarty_modifier_escape')) include './/include/Smarty-3.0.4/libs/plugins/modifier.escape.php';
?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php  $_config = new Smarty_Internal_Config(((isset($_smarty_tpl->getVariable('config')->value['smarty']) ? $_smarty_tpl->getVariable('config')->value['smarty'] : null)), $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php ob_start();?><?php echo (isset($_SERVER['SCRIPT_NAME'])? $_SERVER['SCRIPT_NAME'] : null);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable($_tmp1, null, null);?>
<?php if (((isset($_smarty_tpl->getVariable('data')->value['options']) ? $_smarty_tpl->getVariable('data')->value['options'] : null) !== null)&&is_array((isset($_smarty_tpl->getVariable('data')->value['options']) ? $_smarty_tpl->getVariable('data')->value['options'] : null))&&count((isset($_smarty_tpl->getVariable('data')->value['options']) ? $_smarty_tpl->getVariable('data')->value['options'] : null))>0){?><?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(2, null, null);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(1, null, null);?><?php }?>
<div id="search-handler">
  <div id="search-anim"></div>
  <div id="SearchToggle"></div>
</div>
<div id="modal-overlay"></div>
<div class="modal-window"> <a href="#" class="modal-close"></a>
  <div class="modal-header"> <strong>Edit Record</strong> </div>
  <div class="modal-body"> </div>
  <div class="modal-bottom"> </div>
</div>
<div class="listing-heading"> <strong><?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('config')->value['header']['title']) ? $_smarty_tpl->getVariable('config')->value['header']['title'] : null);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_modifier_capitalize((($tmp = @(isset($_smarty_tpl->getVariable('data')->value['self']) ? $_smarty_tpl->getVariable('data')->value['self'] : null))===null||$tmp==='' ? $_tmp2 : $tmp));?>
</strong> &nbsp;
  
  <?php $_tmp3=$_smarty_tpl->getVariable('pagination')->value;?><?php if (!empty($_tmp3)){?>
  
  Page <?php echo (isset($_smarty_tpl->getVariable('data')->value['current_page']) ? $_smarty_tpl->getVariable('data')->value['current_page'] : null);?>
, Total <?php echo (isset($_smarty_tpl->getVariable('data')->value['total_pages']) ? $_smarty_tpl->getVariable('data')->value['total_pages'] : null);?>
 pages / <?php echo (isset($_smarty_tpl->getVariable('data')->value['total_rows']) ? $_smarty_tpl->getVariable('data')->value['total_rows'] : null);?>
 records
  
  <?php }?> </div>
<?php $_tmp4=$_smarty_tpl->getVariable('pagination')->value;?><?php if (!empty($_tmp4)){?>
<div class="pager"> <?php echo $_smarty_tpl->getVariable('pagination')->value;?>
 </div>
<?php }?>
<div style="clear:both;"></div>
<div align="center" class="innerform-x">
  <table id="list_table-x">
    <tr>
      <td><table id="list_table" cellpadding="0" cellspacing="0">
          <thead id="list_thead">
            <tr class="titleRow">
              <th>No.</th>
              <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('header')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->index=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->index++;
?>
              <th> <div class="titleThWrap">
                  <div class="titleName"> <span><?php echo (isset($_smarty_tpl->tpl_vars['k']->value) ? $_smarty_tpl->tpl_vars['k']->value : null);?>
</span> </div>
                  <div class="<?php echo (isset($_smarty_tpl->tpl_vars['v']->value) ? $_smarty_tpl->tpl_vars['v']->value : null);?>
"> <a href="javascript:void(0);" onClick="$(this).sortBy('<?php echo (isset($_smarty_tpl->tpl_vars['v']->value) ? $_smarty_tpl->tpl_vars['v']->value : null);?>
','<?php echo (isset($_smarty_tpl->getVariable('data')->value['current_page']) ? $_smarty_tpl->getVariable('data')->value['current_page'] : null);?>
')" class="upArrow"><?php echo (isset($_smarty_tpl->getVariable('config')->value['list']['up']) ? $_smarty_tpl->getVariable('config')->value['list']['up'] : null);?>
</a> <a href="javascript:void(0);" onClick="$(this).sortBy('<?php echo (isset($_smarty_tpl->tpl_vars['v']->value) ? $_smarty_tpl->tpl_vars['v']->value : null);?>
 desc','<?php echo (isset($_smarty_tpl->getVariable('data')->value['current_page']) ? $_smarty_tpl->getVariable('data')->value['current_page'] : null);?>
')" class="downArrow"><?php echo (isset($_smarty_tpl->getVariable('config')->value['list']['down']) ? $_smarty_tpl->getVariable('config')->value['list']['down'] : null);?>
</a> </div>
                </div></th>
              <?php }} ?>
              
              <?php if (((isset($_smarty_tpl->getVariable('data')->value['options']) ? $_smarty_tpl->getVariable('data')->value['options'] : null) !== null)&&is_array((isset($_smarty_tpl->getVariable('data')->value['options']) ? $_smarty_tpl->getVariable('data')->value['options'] : null))&&count((isset($_smarty_tpl->getVariable('data')->value['options']) ? $_smarty_tpl->getVariable('data')->value['options'] : null))>0){?>
              <th>Options</th>
              <?php }?> </tr>
          </thead>
          <?php if ((isset($_smarty_tpl->getVariable('data')->value['list']) ? $_smarty_tpl->getVariable('data')->value['list'] : null)){?>
          <tbody id="list_tbody">
          
          <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('data')->value['list']) ? $_smarty_tpl->getVariable('data')->value['list'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value){
?>
          <tr class="infoRow" bgcolor="<?php echo smarty_function_cycle(array('values'=>"#ffffff,#eff7ff"),$_smarty_tpl);?>
" id="tr_<?php echo (isset($_smarty_tpl->tpl_vars['m']->value['no']) ? $_smarty_tpl->tpl_vars['m']->value['no'] : null);?>
"> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['m']->value) ? $_smarty_tpl->tpl_vars['m']->value : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->index=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['v']->index++;
?>
            
            <?php if (((isset($_smarty_tpl->getVariable('data')->value['col_types']) ? $_smarty_tpl->getVariable('data')->value['col_types'] : null) !== null)&&is_array((isset($_smarty_tpl->getVariable('data')->value['col_types']) ? $_smarty_tpl->getVariable('data')->value['col_types'] : null))){?>
            
            <?php $_smarty_tpl->tpl_vars['ff'] = new Smarty_variable(0, null, null);?>
            
            <?php  $_smarty_tpl->tpl_vars['y'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('data')->value['col_types']) ? $_smarty_tpl->getVariable('data')->value['col_types'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['y']->key => $_smarty_tpl->tpl_vars['y']->value){
 $_smarty_tpl->tpl_vars['x']->value = $_smarty_tpl->tpl_vars['y']->key;
?>
            
            <?php if ($_smarty_tpl->tpl_vars['v']->key==(isset($_smarty_tpl->tpl_vars['x']->value) ? $_smarty_tpl->tpl_vars['x']->value : null)){?>
            
            <?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('data')->value['self']) ? $_smarty_tpl->getVariable('data')->value['self'] : null);?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5=='contents'&&(isset($_smarty_tpl->tpl_vars['y']->value) ? $_smarty_tpl->tpl_vars['y']->value : null)=='textarea11'){?>
            <td><?php echo $_smarty_tpl->getConfigVariable('start_tag');?>
<?php echo smarty_modifier_regex_replace(smarty_modifier_regex_replace((isset($_smarty_tpl->tpl_vars['v']->value) ? $_smarty_tpl->tpl_vars['v']->value : null),"/&lt;/","<"),"/&gt;/",">");?>
<?php echo $_smarty_tpl->getConfigVariable('end_tag');?>
</td>
            <?php }elseif((isset($_smarty_tpl->tpl_vars['y']->value) ? $_smarty_tpl->tpl_vars['y']->value : null)=='textarea'){?>
            <td><form method="post" action="<?php echo $_smarty_tpl->getVariable('url')->value;?>
" id="tfm_<?php echo (isset($_smarty_tpl->tpl_vars['m']->value['no']) ? $_smarty_tpl->tpl_vars['m']->value['no'] : null);?>
_<?php echo $_smarty_tpl->tpl_vars['v']->index;?>
">
                <textarea class="active" name="<?php echo $_smarty_tpl->tpl_vars['v']->key;?>
" readonly="readonly" ondblclick="$(this).removeAttr('readonly').css('border-width','2px');" onchange="$(this).update_column('tfm_<?php echo (isset($_smarty_tpl->tpl_vars['m']->value['no']) ? $_smarty_tpl->tpl_vars['m']->value['no'] : null);?>
_<?php echo $_smarty_tpl->tpl_vars['v']->index;?>
')"><?php echo (($tmp = @(isset($_smarty_tpl->tpl_vars['v']->value) ? $_smarty_tpl->tpl_vars['v']->value : null))===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</textarea>
                <input type="hidden" name="id" value="<?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('data')->value['pkey']) ? $_smarty_tpl->getVariable('data')->value['pkey'] : null);?>
<?php $_tmp6=ob_get_clean();?><?php echo (isset($_smarty_tpl->tpl_vars['m']->value[$_tmp6]) ? $_smarty_tpl->tpl_vars['m']->value[$_tmp6] : null);?>
" />
              </form></td>
            <?php }elseif((isset($_smarty_tpl->tpl_vars['y']->value) ? $_smarty_tpl->tpl_vars['y']->value : null)=='text'){?>
            <td><form method="post" action="<?php echo $_smarty_tpl->getVariable('url')->value;?>
" id="ifm_<?php echo (isset($_smarty_tpl->tpl_vars['m']->value['no']) ? $_smarty_tpl->tpl_vars['m']->value['no'] : null);?>
_<?php echo $_smarty_tpl->tpl_vars['v']->index;?>
">
                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->key;?>
<?php $_tmp7=ob_get_clean();?><?php if ($_tmp7=='Weight'){?> <?php $_smarty_tpl->tpl_vars['cw'] = new Smarty_variable(' class="active1"', null, null);?> <?php }else{ ?> <?php $_smarty_tpl->tpl_vars['cw'] = new Smarty_variable(' class="active"', null, null);?> <?php }?>
                <input type="text" <?php echo $_smarty_tpl->getVariable('cw')->value;?>
 name="<?php echo $_smarty_tpl->tpl_vars['v']->key;?>
" readonly="readonly" ondblclick="$(this).removeAttr('readonly').css('border-width','2px');" onchange="$(this).update_column('ifm_<?php echo (isset($_smarty_tpl->tpl_vars['m']->value['no']) ? $_smarty_tpl->tpl_vars['m']->value['no'] : null);?>
_<?php echo $_smarty_tpl->tpl_vars['v']->index;?>
')" value="<?php echo (($tmp = @(isset($_smarty_tpl->tpl_vars['v']->value) ? $_smarty_tpl->tpl_vars['v']->value : null))===null||$tmp==='' ? '&nbsp;' : $tmp);?>
" />
                <input type="hidden" name="id" value="<?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('data')->value['pkey']) ? $_smarty_tpl->getVariable('data')->value['pkey'] : null);?>
<?php $_tmp8=ob_get_clean();?><?php echo (isset($_smarty_tpl->tpl_vars['m']->value[$_tmp8]) ? $_smarty_tpl->tpl_vars['m']->value[$_tmp8] : null);?>
" />
              </form></td>
            <?php }elseif((isset($_smarty_tpl->tpl_vars['y']->value) ? $_smarty_tpl->tpl_vars['y']->value : null)=='checkbox'){?>
            <?php if (((isset($_smarty_tpl->tpl_vars['v']->value) ? $_smarty_tpl->tpl_vars['v']->value : null)=='Y')){?> <?php $_smarty_tpl->tpl_vars['c'] = new Smarty_variable('checked="checked"', null, null);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['c'] = new Smarty_variable('', null, null);?> <?php }?>
            <td><input type="checkbox" name="<?php echo ((mb_detect_encoding($_smarty_tpl->tpl_vars['v']->key, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtolower($_smarty_tpl->tpl_vars['v']->key,SMARTY_RESOURCE_CHAR_SET) : strtolower($_smarty_tpl->tpl_vars['v']->key));?>
" disabled="disabled" value="<?php echo (isset($_smarty_tpl->tpl_vars['v']->value) ? $_smarty_tpl->tpl_vars['v']->value : null);?>
" <?php echo $_smarty_tpl->getVariable('c')->value;?>
 /></td>
            <?php }elseif((isset($_smarty_tpl->tpl_vars['y']->value) ? $_smarty_tpl->tpl_vars['y']->value : null)=='link'){?>
            <?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('config')->value['self']) ? $_smarty_tpl->getVariable('config')->value['self'] : null)=='themes';?>
<?php $_tmp9=ob_get_clean();?><?php if ($_tmp9){?>
            <td><!--a href="<?php echo smarty_modifier_escape((isset($_smarty_tpl->tpl_vars['m']->value['PreviewFile']) ? $_smarty_tpl->tpl_vars['m']->value['PreviewFile'] : null),'html');?>
" title="<?php echo (isset($_smarty_tpl->tpl_vars['m']->value['Path']) ? $_smarty_tpl->tpl_vars['m']->value['Path'] : null);?>
/<?php echo (isset($_smarty_tpl->tpl_vars['m']->value['PreviewFile']) ? $_smarty_tpl->tpl_vars['m']->value['PreviewFile'] : null);?>
" target="_blank" class="rview"><img src="resources/<?php echo (isset($_smarty_tpl->tpl_vars['m']->value['PreviewFile']) ? $_smarty_tpl->tpl_vars['m']->value['PreviewFile'] : null);?>
" style="max-height:50px;max-width:110px;" /><?php echo (isset($_smarty_tpl->tpl_vars['m']->value['Name']) ? $_smarty_tpl->tpl_vars['m']->value['Name'] : null);?>
, <?php echo (isset($_smarty_tpl->tpl_vars['m']->value['PreviewFile']) ? $_smarty_tpl->tpl_vars['m']->value['PreviewFile'] : null);?>
 </a-->
              <a href="resources/<?php echo (isset($_smarty_tpl->tpl_vars['m']->value['PreviewFile']) ? $_smarty_tpl->tpl_vars['m']->value['PreviewFile'] : null);?>
" title="<?php echo (isset($_smarty_tpl->tpl_vars['m']->value['Path']) ? $_smarty_tpl->tpl_vars['m']->value['Path'] : null);?>
/<?php echo (isset($_smarty_tpl->tpl_vars['m']->value['PreviewFile']) ? $_smarty_tpl->tpl_vars['m']->value['PreviewFile'] : null);?>
" target="_blank" class="rview"><img src="resources/<?php echo (isset($_smarty_tpl->tpl_vars['m']->value['PreviewFile']) ? $_smarty_tpl->tpl_vars['m']->value['PreviewFile'] : null);?>
" style="max-height:50px;max-width:110px;" /> </a> </td>
            <?php }else{?><?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('data')->value['self']) ? $_smarty_tpl->getVariable('data')->value['self'] : null)=='resources';?>
<?php $_tmp10=ob_get_clean();?><?php if ($_tmp10){?>
            <td align="right"> <?php if (preg_match("/(\.pdf|\.txt|\.xml|\.mid|\.sql)"."$"."/",(isset($_smarty_tpl->tpl_vars['v']->value) ? $_smarty_tpl->tpl_vars['v']->value : null))){?> <a href="<?php echo (isset($_smarty_tpl->tpl_vars['m']->value['Path']) ? $_smarty_tpl->tpl_vars['m']->value['Path'] : null);?>
" title="<?php echo smarty_modifier_escape((isset($_smarty_tpl->tpl_vars['v']->value) ? $_smarty_tpl->tpl_vars['v']->value : null),'html');?>
" target="_blank"><?php echo smarty_modifier_escape((isset($_smarty_tpl->tpl_vars['v']->value) ? $_smarty_tpl->tpl_vars['v']->value : null),'html');?>
</a> <?php }else{ ?> <a href="<?php echo (isset($_smarty_tpl->tpl_vars['m']->value['Path']) ? $_smarty_tpl->tpl_vars['m']->value['Path'] : null);?>
/<?php echo (isset($_smarty_tpl->tpl_vars['m']->value['File']) ? $_smarty_tpl->tpl_vars['m']->value['File'] : null);?>
" title="<?php echo (isset($_smarty_tpl->tpl_vars['m']->value['Path']) ? $_smarty_tpl->tpl_vars['m']->value['Path'] : null);?>
/<?php echo (isset($_smarty_tpl->tpl_vars['m']->value['File']) ? $_smarty_tpl->tpl_vars['m']->value['File'] : null);?>
" target="_blank" class="rview"><img src="<?php echo (isset($_smarty_tpl->tpl_vars['m']->value['Path']) ? $_smarty_tpl->tpl_vars['m']->value['Path'] : null);?>
/<?php echo (isset($_smarty_tpl->tpl_vars['m']->value['File']) ? $_smarty_tpl->tpl_vars['m']->value['File'] : null);?>
" style="max-height:50px;max-width:110px;" /></a> <?php }?> </td>
            <?php }else{ ?>
            <td align="right"><a href="<?php echo smarty_modifier_escape((isset($_smarty_tpl->tpl_vars['v']->value) ? $_smarty_tpl->tpl_vars['v']->value : null),'html');?>
" title="<?php echo smarty_modifier_escape((isset($_smarty_tpl->tpl_vars['v']->value) ? $_smarty_tpl->tpl_vars['v']->value : null),'html');?>
" target="_blank"><?php echo smarty_modifier_escape((isset($_smarty_tpl->tpl_vars['v']->value) ? $_smarty_tpl->tpl_vars['v']->value : null),'html');?>
</a></td>
            <?php }}?>   
            <?php }?>
            <?php $_smarty_tpl->tpl_vars['ff'] = new Smarty_variable(1, null, null);?>
            <?php }else{ ?>
            <?php if (array_key_exists($_smarty_tpl->tpl_vars['v']->key,(isset($_smarty_tpl->getVariable('data')->value['col_types']) ? $_smarty_tpl->getVariable('data')->value['col_types'] : null))){?>
            <?php }elseif($_smarty_tpl->getVariable('ff')->value==0){?>
            <td align="right"><?php echo (($tmp = @(isset($_smarty_tpl->tpl_vars['v']->value) ? $_smarty_tpl->tpl_vars['v']->value : null))===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</td>
            <?php $_smarty_tpl->tpl_vars['ff'] = new Smarty_variable(1, null, null);?>
            <?php }?>
            <?php }?>
            
            <?php }} ?>
            
            <?php }else{ ?>
            <td align="right"><?php echo (($tmp = @smarty_modifier_escape((isset($_smarty_tpl->tpl_vars['v']->value) ? $_smarty_tpl->tpl_vars['v']->value : null),'html'))===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</td>
            <?php }?>
            
            <?php }} ?>
            
            <?php if (((isset($_smarty_tpl->getVariable('data')->value['options']) ? $_smarty_tpl->getVariable('data')->value['options'] : null) !== null)&&is_array((isset($_smarty_tpl->getVariable('data')->value['options']) ? $_smarty_tpl->getVariable('data')->value['options'] : null))&&count((isset($_smarty_tpl->getVariable('data')->value['options']) ? $_smarty_tpl->getVariable('data')->value['options'] : null))>0){?>
            <td><div class="actions"><?php  $_smarty_tpl->tpl_vars['o'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('data')->value['options']) ? $_smarty_tpl->getVariable('data')->value['options'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['o']->key => $_smarty_tpl->tpl_vars['o']->value){
?>
                
                <?php if ((isset($_smarty_tpl->tpl_vars['o']->value) ? $_smarty_tpl->tpl_vars['o']->value : null)=='edit'){?> <a href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
?js_edit_form=1&id=<?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('data')->value['pkey']) ? $_smarty_tpl->getVariable('data')->value['pkey'] : null);?>
<?php $_tmp11=ob_get_clean();?><?php echo (isset($_smarty_tpl->tpl_vars['m']->value[$_tmp11]) ? $_smarty_tpl->tpl_vars['m']->value[$_tmp11] : null);?>
" class="edit" title="View/Edit <?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('data')->value['pkey']) ? $_smarty_tpl->getVariable('data')->value['pkey'] : null);?>
<?php $_tmp12=ob_get_clean();?><?php echo (isset($_smarty_tpl->tpl_vars['m']->value[$_tmp12]) ? $_smarty_tpl->tpl_vars['m']->value[$_tmp12] : null);?>
"></a>&nbsp;
                <?php }elseif((isset($_smarty_tpl->tpl_vars['o']->value) ? $_smarty_tpl->tpl_vars['o']->value : null)=='resources'){?><a href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
?id=<?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('data')->value['pkey']) ? $_smarty_tpl->getVariable('data')->value['pkey'] : null);?>
<?php $_tmp13=ob_get_clean();?><?php echo (isset($_smarty_tpl->tpl_vars['m']->value[$_tmp13]) ? $_smarty_tpl->tpl_vars['m']->value[$_tmp13] : null);?>
&js_edit_form_5=1" title="Resources <?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('data')->value['pkey']) ? $_smarty_tpl->getVariable('data')->value['pkey'] : null);?>
<?php $_tmp14=ob_get_clean();?><?php echo (isset($_smarty_tpl->tpl_vars['m']->value[$_tmp14]) ? $_smarty_tpl->tpl_vars['m']->value[$_tmp14] : null);?>
" class="resources" id="view_<?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('data')->value['pkey']) ? $_smarty_tpl->getVariable('data')->value['pkey'] : null);?>
<?php $_tmp15=ob_get_clean();?><?php echo (isset($_smarty_tpl->tpl_vars['m']->value[$_tmp15]) ? $_smarty_tpl->tpl_vars['m']->value[$_tmp15] : null);?>
"></a>&nbsp;
                <?php }elseif((isset($_smarty_tpl->tpl_vars['o']->value) ? $_smarty_tpl->tpl_vars['o']->value : null)=='view'){?><a href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
?id=<?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('data')->value['pkey']) ? $_smarty_tpl->getVariable('data')->value['pkey'] : null);?>
<?php $_tmp16=ob_get_clean();?><?php echo (isset($_smarty_tpl->tpl_vars['m']->value[$_tmp16]) ? $_smarty_tpl->tpl_vars['m']->value[$_tmp16] : null);?>
&js_edit_form_3=1" title="View/Edit <?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('data')->value['pkey']) ? $_smarty_tpl->getVariable('data')->value['pkey'] : null);?>
<?php $_tmp17=ob_get_clean();?><?php echo (isset($_smarty_tpl->tpl_vars['m']->value[$_tmp17]) ? $_smarty_tpl->tpl_vars['m']->value[$_tmp17] : null);?>
" class="view" id="view_<?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('data')->value['pkey']) ? $_smarty_tpl->getVariable('data')->value['pkey'] : null);?>
<?php $_tmp18=ob_get_clean();?><?php echo (isset($_smarty_tpl->tpl_vars['m']->value[$_tmp18]) ? $_smarty_tpl->tpl_vars['m']->value[$_tmp18] : null);?>
"></a>&nbsp;
                <?php }elseif((isset($_smarty_tpl->tpl_vars['o']->value) ? $_smarty_tpl->tpl_vars['o']->value : null)=='email'){?><a href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
?id=<?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('data')->value['pkey']) ? $_smarty_tpl->getVariable('data')->value['pkey'] : null);?>
<?php $_tmp19=ob_get_clean();?><?php echo (isset($_smarty_tpl->tpl_vars['m']->value[$_tmp19]) ? $_smarty_tpl->tpl_vars['m']->value[$_tmp19] : null);?>
&js_send_mail=1" title="Send Emails <?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('data')->value['pkey']) ? $_smarty_tpl->getVariable('data')->value['pkey'] : null);?>
<?php $_tmp20=ob_get_clean();?><?php echo (isset($_smarty_tpl->tpl_vars['m']->value[$_tmp20]) ? $_smarty_tpl->tpl_vars['m']->value[$_tmp20] : null);?>
" class="email" id="email_<?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('data')->value['pkey']) ? $_smarty_tpl->getVariable('data')->value['pkey'] : null);?>
<?php $_tmp21=ob_get_clean();?><?php echo (isset($_smarty_tpl->tpl_vars['m']->value[$_tmp21]) ? $_smarty_tpl->tpl_vars['m']->value[$_tmp21] : null);?>
"></a>&nbsp;
                <?php }elseif((isset($_smarty_tpl->tpl_vars['o']->value) ? $_smarty_tpl->tpl_vars['o']->value : null)=='contents'){?><a href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
?id=<?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('data')->value['pkey']) ? $_smarty_tpl->getVariable('data')->value['pkey'] : null);?>
<?php $_tmp22=ob_get_clean();?><?php echo (isset($_smarty_tpl->tpl_vars['m']->value[$_tmp22]) ? $_smarty_tpl->tpl_vars['m']->value[$_tmp22] : null);?>
&js_edit_form_3=1" title="Contents <?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('data')->value['pkey']) ? $_smarty_tpl->getVariable('data')->value['pkey'] : null);?>
<?php $_tmp23=ob_get_clean();?><?php echo (isset($_smarty_tpl->tpl_vars['m']->value[$_tmp23]) ? $_smarty_tpl->tpl_vars['m']->value[$_tmp23] : null);?>
" class="contents" id="contents_<?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('data')->value['pkey']) ? $_smarty_tpl->getVariable('data')->value['pkey'] : null);?>
<?php $_tmp24=ob_get_clean();?><?php echo (isset($_smarty_tpl->tpl_vars['m']->value[$_tmp24]) ? $_smarty_tpl->tpl_vars['m']->value[$_tmp24] : null);?>
"></a>&nbsp;
                <?php }elseif((isset($_smarty_tpl->tpl_vars['o']->value) ? $_smarty_tpl->tpl_vars['o']->value : null)=='pension'){?> <a href="javascript:void(0);" onclick="$(this).editForm('<?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('data')->value['pkey']) ? $_smarty_tpl->getVariable('data')->value['pkey'] : null);?>
<?php $_tmp25=ob_get_clean();?><?php echo (isset($_smarty_tpl->tpl_vars['m']->value[$_tmp25]) ? $_smarty_tpl->tpl_vars['m']->value[$_tmp25] : null);?>
', '<?php echo (isset($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->getVariable('data')->value['pkey']) ? $_smarty_tpl->getVariable('data')->value['pkey'] : null)]) ? $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->getVariable('data')->value['pkey']) ? $_smarty_tpl->getVariable('data')->value['pkey'] : null)] : null);?>
')" title="View Pension <?php echo (isset($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->getVariable('data')->value['pkey']) ? $_smarty_tpl->getVariable('data')->value['pkey'] : null)]) ? $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->getVariable('data')->value['pkey']) ? $_smarty_tpl->getVariable('data')->value['pkey'] : null)] : null);?>
" class="pension"></a>&nbsp;
                <?php }elseif((isset($_smarty_tpl->tpl_vars['o']->value) ? $_smarty_tpl->tpl_vars['o']->value : null)=='delete'){?> <a href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
?id=<?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('data')->value['pkey']) ? $_smarty_tpl->getVariable('data')->value['pkey'] : null);?>
<?php $_tmp26=ob_get_clean();?><?php echo (isset($_smarty_tpl->tpl_vars['m']->value[$_tmp26]) ? $_smarty_tpl->tpl_vars['m']->value[$_tmp26] : null);?>
&name=<?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('data')->value['pkey']) ? $_smarty_tpl->getVariable('data')->value['pkey'] : null);?>
<?php $_tmp27=ob_get_clean();?><?php echo (isset($_smarty_tpl->tpl_vars['m']->value[$_tmp27]) ? $_smarty_tpl->tpl_vars['m']->value[$_tmp27] : null);?>
&action=delete" class="delete" title="Delete <?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('data')->value['pkey']) ? $_smarty_tpl->getVariable('data')->value['pkey'] : null);?>
<?php $_tmp28=ob_get_clean();?><?php echo (isset($_smarty_tpl->tpl_vars['m']->value[$_tmp28]) ? $_smarty_tpl->tpl_vars['m']->value[$_tmp28] : null);?>
"></a> <?php }else{ ?> <a href="?id=<?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('data')->value['pkey']) ? $_smarty_tpl->getVariable('data')->value['pkey'] : null);?>
<?php $_tmp29=ob_get_clean();?><?php echo (isset($_smarty_tpl->tpl_vars['m']->value[$_tmp29]) ? $_smarty_tpl->tpl_vars['m']->value[$_tmp29] : null);?>
&name=<?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('data')->value['pkey']) ? $_smarty_tpl->getVariable('data')->value['pkey'] : null);?>
<?php $_tmp30=ob_get_clean();?><?php echo (isset($_smarty_tpl->tpl_vars['m']->value[$_tmp30]) ? $_smarty_tpl->tpl_vars['m']->value[$_tmp30] : null);?>
&action=delete" class="delete" title="Delete <?php echo $_smarty_tpl->getVariable('m'.((isset($_smarty_tpl->getVariable('data')->value['pkey']) ? $_smarty_tpl->getVariable('data')->value['pkey'] : null)))->value;?>
">Other</a> <?php }?>
                <?php }} ?> </div></td>
            <?php }?> </tr>
          <?php if (((isset($_smarty_tpl->getVariable('data')->value['options']) ? $_smarty_tpl->getVariable('data')->value['options'] : null) !== null)&&is_array((isset($_smarty_tpl->getVariable('data')->value['options']) ? $_smarty_tpl->getVariable('data')->value['options'] : null))&&count((isset($_smarty_tpl->getVariable('data')->value['options']) ? $_smarty_tpl->getVariable('data')->value['options'] : null))>0){?>
          <?php }?>
          
          <?php }} ?>
          </tbody>
          
          <?php }?>
        </table></td>
      <td></td>
    </tr>
  </table>
</div>
<?php $_tmp31=$_smarty_tpl->getVariable('pagination')->value;?><?php if (!empty($_tmp31)){?>
<div class="pager pager-bottom"> <?php echo $_smarty_tpl->getVariable('pagination')->value;?>
 </div>
<?php }?>
<form action="<?php echo (isset($_smarty_tpl->getVariable('config')->value['ipath']) ? $_smarty_tpl->getVariable('config')->value['ipath'] : null);?>
get_csv.php" method="post" class="export-form">
  <input type="hidden" name="from" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['self']) ? $_smarty_tpl->getVariable('data')->value['self'] : null);?>
" />
  <input type="hidden" name="headers" value="<?php echo ((mb_detect_encoding(implode($_smarty_tpl->getVariable('header')->value,','), 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper(implode($_smarty_tpl->getVariable('header')->value,','),SMARTY_RESOURCE_CHAR_SET) : strtoupper(implode($_smarty_tpl->getVariable('header')->value,',')));?>
" />
  <div class="green-btn export-btn">
    <input name="xls" type="submit" value="Export to CSV File" />
  </div>
</form>
<div style="clear:both;"></div>
<script language="javascript" type="text/javascript">
var url = '<?php echo (isset($_SERVER['SCRIPT_NAME'])? $_SERVER['SCRIPT_NAME'] : null);?>
';
var divid = '<?php echo $_smarty_tpl->getConfigVariable('div_list');?>
';
var wait1 = '<?php echo (isset($_smarty_tpl->getVariable('config')->value['list']['wait1']) ? $_smarty_tpl->getVariable('config')->value['list']['wait1'] : null);?>
';
var wait2 = '<?php echo (isset($_smarty_tpl->getVariable('config')->value['list']['wait2']) ? $_smarty_tpl->getVariable('config')->value['list']['wait2'] : null);?>
';
jQuery.fn.editForm = function(id, name) {
  $.ajax({
    type: 'get',
    url: url,
    data: 'js_sid='+id,
    success: function(data){
    $('#tab1').removeClass('TabbedPanelsTabSelected');
    $('#tab2').addClass('TabbedPanelsTabSelected');
    $('#main2').closest('.TabbedPanelsContent').show();
    $('#main1').closest('.TabbedPanelsContent').hide();
    $('#main2').html(data).fadeIn(100);
    }
  });
  return false;
}
jQuery.fn.sortBy= function(sort_column, current_page) {
  var t = $(this);
  t.find('img').attr({ 'width':'16','height':'16','border':'0','src':wait2,'alt':'processing...','title':'processing...' }).show();
  t.parents().find('th').each(function() {
    $(this).removeAttr('class').css('color', 'white');
  });
  $.get(url, { sort:sort_column,page:current_page }, function(data){
    $(divid).html(data);
  });
  return false;
}
$('table#list_table tbody tr').hover(
  function() {
    $(this).css("opacity", "0.8");
  },
  function() {
    $(this).css("opacity", "1.0");
  }
);
$(".pager a").each(function(index) {
  var $a = $(this);
  $a.click(function(event) {
    event.preventDefault();
    //no need: var t1 = $(event.target).html(); $a.html(t1);
    var t2 = $(event.target).attr('href');
    $a.html(wait1);
    $.get(url+t2, function(data){ $(divid).html(data) });
    return false;
  });
  $(".qtip").hover(function(){
     $(this).find("div.qtipBox").show(100);
  }, function(){
     $(this).find("div.qtipBox").hide(50);
  });
});
<?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('data')->value['sort']) ? $_smarty_tpl->getVariable('data')->value['sort'] : null);?>
<?php $_tmp32=ob_get_clean();?><?php if ($_tmp32){?> 
  var ary = new Array();
  $('#list_thead tr.titleRow th:gt(0)').each(function(index) {
    ary[index] = $('div:gt(0) span', $(this)).text();
  });
  var tno = 0;
  var tsort = '<?php echo (isset($_smarty_tpl->getVariable('data')->value['sort']) ? $_smarty_tpl->getVariable('data')->value['sort'] : null);?>
';
  tsort = tsort.replace(/\s+desc/i, '');
  for (var i=0;i<(ary.length-1);i++) {
    if(tsort.toLowerCase()==ary[i].toLowerCase()) tno = ++i;
  }
  $('table#list_table tbody tr').each(function() {
    var td = $(this).find('td:eq('+tno+')');
    $(td).css('background-color', '#d8eeff');
  }); 
<?php }?>
$("table#list_table tr.infoRow td a.delete").click(function(event) {
  event.preventDefault();
  $(this).closest('tr').css('background-color','#ffa');
  var $a = $(this);
  var name = $a.attr('href').replace(/.*name=/,'').replace(/&action=.*$/,'');
  if( confirm('Are you sure to delete the record [id=' + name + ']?')) {
    $.get($(this).attr('href'), function(data) {
      $a.closest('tr').fadeOut(200);
    });
  }
  return false;
});
$("table#list_table tr.infoRow td a.edit").click(function(event) {
  event.preventDefault();
  $(this).closest('tr').css('background-color','#ffa');
  var aa = $(event.target);
  var t = $(this).attr('href')+'&tr='+aa.closest('tr').attr('id');
  $.ajax({
    type: 'get',
    url: t,
    success: function(data){
      $('#modal-overlay').show();
      $('.modal-body').html(data);
      $('.modal-window').fadeIn();
    }
  });
  return false;
});
<?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('data')->value['self']) ? $_smarty_tpl->getVariable('data')->value['self'] : null)=='contents';?>
<?php $_tmp33=ob_get_clean();?><?php if ($_tmp33){?>
$('table#list_table tr.infoRow td a.view').bind('click', function(event) {
  event.preventDefault();
  $(event.target).closest('tr').css('background-color','#ffa');
  var t = $(event.target).attr('href');
  $.ajax({
  type: 'get',
  url:  t,
  success: function(data){
    $('#tab1, #tab2, #tab4, #tab5').removeClass('TabbedPanelsTabSelected');
    $('#tab3').addClass('TabbedPanelsTabSelected');
    $('#main1, #main2, #main4, #main5').closest('.TabbedPanelsContent').hide();
    $('#main3').closest('.TabbedPanelsContent').show();
    $('#main3').html(data);
  }
  });
  return false;
});
$('table#list_table tr.infoRow td a.email').bind('click', function(event) {
  event.preventDefault();
  $(event.target).closest('tr').css('background-color','#ffa');
  var t = $(event.target).attr('href');
  $.ajax({
  type: 'get',
  url:  t,
  success: function(data){
    alert(data);
    if(data==0) {
	  alert('Successfully sent the emails');
	}
	else {
	  alert('Sent emails Failure');
	}
  }
  });
  return false;
});
$('table#list_table tr.infoRow td a.resources').bind('click', function(event) {
  event.preventDefault();
  $(event.target).closest('tr').css('background-color','#ffa');
  var t = $(event.target).attr('href');
  $.ajax({
  type: 'get',
  url:  t,
  success: function(data){
    $('#tab1, #tab2, #tab3, #tab4').removeClass('TabbedPanelsTabSelected');
    $('#tab5').addClass('TabbedPanelsTabSelected');
    $('#main1, #main2, #main3, #main4').closest('.TabbedPanelsContent').hide();
    $('#main5').closest('.TabbedPanelsContent').show();
    $('#main5').html(data);
  }
  });
  return false;
});
<?php }?>
<?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('data')->value['self']) ? $_smarty_tpl->getVariable('data')->value['self'] : null)=='resources';?>
<?php $_tmp34=ob_get_clean();?><?php if ($_tmp34){?>
$('table#list_table tr.infoRow td a.contents').bind('click', function(event) {
  event.preventDefault();
  $(event.target).closest('tr').css('background-color','#ffa');
  var t = $(event.target).attr('href');
  $.ajax({
  type: 'get',
  url:  t,
  success: function(data){
    $('#tab1, #tab2').removeClass('TabbedPanelsTabSelected');
    $('#tab3').addClass('TabbedPanelsTabSelected');
    $('#main1, #main2').closest('.TabbedPanelsContent').hide();
    $('#main3').closest('.TabbedPanelsContent').show();
    $('#main3').html(data).show();
  }
  });
  return false;
});
<?php }?>
jQuery.fn.update_column = function(tid) {
  var form = $('#'+tid);
  $.ajax({
    type: form.attr('method'),
    url: form.attr('action'),
    data: form.serialize()+'&js_edit_column=1', 
    dataType: 'json',
    success: function(data) {}
  });
  return false;
}
</script>
<?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('config')->value['qtip']) ? $_smarty_tpl->getVariable('config')->value['qtip'] : null);?>
<?php $_tmp35=ob_get_clean();?><?php if ($_tmp35){?>
<script language="javascript" type="text/javascript">
$('#list_tbody tr.infoRow input.active,#list_tbody tr.infoRow textarea.active').qtip({
   content: 'Double click to edit',
   show: 'mouseover',
   hide: 'mouseout',
   position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } },
  style: { tip: 'leftMiddle', width: 160, padding: 1, background: '#A2D959', color: 'black', textAlign: 'center',
    border: { width: 1, radius: 10, color: '#A2D959' },
    tip: 'bottomLeft', name: 'dark'
  }
});
$('#list_thead tr.titleRow th span').qtip({
   content: 'Sorting by asc and desc',
   show: 'mouseover',
   hide: 'mouseout',
   position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } },
   style: { tip: 'leftMiddle', width: 200, padding: 2, background: '#A2D959', color: 'black', textAlign: 'center',
  border: { width: 1, radius: 10, color: '#A2D959' },
  tip: 'bottomLeft', name: 'dark'
   }
});
$('#list_tbody tr td a.rview').each(function() {
  var t = $(this).attr('href');
  $(this).qtip({
    content: '<img src="'+t+'" title="'+t+'">',
    show: 'mouseover',
    hide: 'mouseout',
    position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } },
    style: { tip: 'leftMiddle', padding: 4, textAlign: 'center', border: { width: 1, radius: 10 }, tip: 'bottomLeft', name: 'blue' }
  });
});
$('.pager a').each(function(){
    if(!parseInt($(this).text())) $(this).addClass('bigPagerButton');
});
$('#SearchToggle').click(function() {
 var that = $(this);
 var searchForm = $('#div_search_2');
 var anim = $('#search-anim');
 if(searchForm.html().length==0) {
   anim.fadeIn(300);
   searchForm.load(url+'?js_search_form=1', function(){
    anim.fadeOut(300);
    searchForm.show();
    fix_search_buttons();
      searchForm.hide();
    
    if(/MSIE 7.0/.test(navigator.userAgent)){
      searchForm.show();
    }else{
      searchForm.slideDown();
    }    
    that.addClass('hide');
  });
 }else{
   if(searchForm.css('display') == 'none'){
     if(/MSIE 7.0/.test(navigator.userAgent)){
      searchForm.show();
     }else{
      searchForm.slideDown();
     }  
     that.addClass('hide');
   }else{
     if(/MSIE 7.0/.test(navigator.userAgent)){
      searchForm.hide();
     }else{
      searchForm.slideUp();
     }  
     that.removeClass('hide');
   }
 } 
 }); 
$('.modal-close, #modal-overlay').click(function(){
  $('.modal-window').fadeOut(200, function(){
      $('#modal-overlay').hide();
  });
  return false;
});
function fix_search_buttons(){
  var buttons = $('#search_form .form-buttons');
  if(buttons.length){  
        $('.green-btn', buttons).css("margin-left", -buttons[0].offsetWidth/2);
  }
}
</script>
<?php }?> 
