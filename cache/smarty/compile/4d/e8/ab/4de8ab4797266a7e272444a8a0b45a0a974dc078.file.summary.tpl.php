<?php /* Smarty version Smarty-3.1.14, created on 2014-02-11 21:34:08
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/soona/admin0882/themes/default/template/controllers/carrier_wizard/summary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1012175452faebb004dd94-92032816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4de8ab4797266a7e272444a8a0b45a0a974dc078' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/soona/admin0882/themes/default/template/controllers/carrier_wizard/summary.tpl',
      1 => 1392069215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1012175452faebb004dd94-92032816',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_multishop' => 0,
    'active_form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52faebb00b54a7_34279589',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52faebb00b54a7_34279589')) {function content_52faebb00b54a7_34279589($_smarty_tpl) {?>

<script type="text/javascript">
	var summary_translation_undefined = '<?php echo smartyTranslate(array('s'=>'[undefined]','js'=>1),$_smarty_tpl);?>
';
	var summary_translation_meta_informations = '<?php echo smartyTranslate(array('s'=>'This carrier is @s1 and the delivery announced is: @s2.','js'=>1),$_smarty_tpl);?>
';
	var summary_translation_free = '<strong><?php echo smartyTranslate(array('s'=>'free','js'=>1),$_smarty_tpl);?>
</strong>';
	var summary_translation_paid = '<strong><?php echo smartyTranslate(array('s'=>'not free','js'=>1),$_smarty_tpl);?>
</strong>';
	var summary_translation_range = '<span class="is_free"><?php echo smartyTranslate(array('s'=>'This carrier can deliver orders from @s1 to @s2.','js'=>1),$_smarty_tpl);?>
</span>';
	var summary_translation_range_limit =  '<?php echo smartyTranslate(array('s'=>'If the order is out of range, the behavior is to @s3.','js'=>1),$_smarty_tpl);?>
';
	var summary_translation_shipping_cost = '<?php echo smartyTranslate(array('s'=>'The shipping cost is calculated @s1 and the tax rule @s2 will be applied.','js'=>1),$_smarty_tpl);?>
';
	var summary_translation_price = '<strong><?php echo smartyTranslate(array('s'=>'according to the price','js'=>1),$_smarty_tpl);?>
</strong>';
	var summary_translation_weight = '<strong><?php echo smartyTranslate(array('s'=>'according to the weight','js'=>1),$_smarty_tpl);?>
</strong>';
</script>
<div class="defaultForm">
	<fieldset>
		<?php echo smartyTranslate(array('s'=>'Carrier name:'),$_smarty_tpl);?>
 <strong id="summary_name"></strong>
		<div class="clear">&nbsp;</div>
		<div id="summary_meta_informations"></div>
		<div class="clear">&nbsp;</div>
		<div id="summary_shipping_cost"></div>
		<div class="clear">&nbsp;</div>
		<div id="summary_range"></div>
		<div class="clear">&nbsp;</div>
		<div>
			<?php echo smartyTranslate(array('s'=>'This carrier will be proposed for those delivery zones:'),$_smarty_tpl);?>

			<ul id="summary_zones"></ul>
		</div>
		<div class="clear">&nbsp;</div>
		<div>
			<?php echo smartyTranslate(array('s'=>'And it will be proposed for those client groups:'),$_smarty_tpl);?>

			<ul id="summary_groups"></ul>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['is_multishop']->value){?>
		<div class="clear">&nbsp;</div>
		<div>
			<?php echo smartyTranslate(array('s'=>'Finally, this carrier will be proposed in those shops:'),$_smarty_tpl);?>

			<ul id="summary_shops"></ul>
		</div>
		<?php }?>
		<div class="clear">&nbsp;</div>
		<?php echo $_smarty_tpl->tpl_vars['active_form']->value;?>

	</fieldset>
	</div>
<div class="clear">&nbsp;</div>

<?php }} ?>