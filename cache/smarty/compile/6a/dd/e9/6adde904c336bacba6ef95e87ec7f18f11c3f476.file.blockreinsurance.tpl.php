<?php /* Smarty version Smarty-3.1.14, created on 2014-02-07 14:45:34
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/soona/themes/soona/modules/blockreinsurance/blockreinsurance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191545391052f545eee82eb5-82103882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6adde904c336bacba6ef95e87ec7f18f11c3f476' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/soona/themes/soona/modules/blockreinsurance/blockreinsurance.tpl',
      1 => 1381170510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191545391052f545eee82eb5-82103882',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'infos' => 0,
    'nbblocks' => 0,
    'module_dir' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52f545eeea1729_88165826',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f545eeea1729_88165826')) {function content_52f545eeea1729_88165826($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/XAMPP/xamppfiles/htdocs/soona/tools/smarty/plugins/modifier.escape.php';
?>
<?php if (count($_smarty_tpl->tpl_vars['infos']->value)>0){?>
<!-- MODULE Block reinsurance -->
<div id="reinsurance_block" class="clearfix">
	<ul class="width<?php echo $_smarty_tpl->tpl_vars['nbblocks']->value;?>
">	
		<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
			<li><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
img/<?php echo $_smarty_tpl->tpl_vars['info']->value['file_name'];?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['text'], 'html', 'UTF-8');?>
" /> <span><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['text'], 'html', 'UTF-8');?>
</span></li>
		<?php } ?>
	</ul>
</div>
<!-- /MODULE Block reinsurance -->
<?php }?><?php }} ?>