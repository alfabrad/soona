<?php /* Smarty version Smarty-3.1.14, created on 2014-04-11 14:15:27
         compiled from "/Applications/MAMP/htdocs/soona/modules/paypalusa/views/templates/hook/express-checkout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185046551153483f4ff18012-11234370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd63a2ef8b2c8afec6933fc1c7a519b563f1f2541' => 
    array (
      0 => '/Applications/MAMP/htdocs/soona/modules/paypalusa/views/templates/hook/express-checkout.tpl',
      1 => 1397145812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185046551153483f4ff18012-11234370',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'paypal_usa_express_checkout_no_token' => 0,
    'paypal_usa_express_checkout_hook_payment' => 0,
    'paypal_usa_action_payment' => 0,
    'paypal_usa_merchant_country_is_mx' => 0,
    'module_dir' => 0,
    'lang_iso' => 0,
    'paypal_usa_action' => 0,
    'paypal_usa_from_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53483f5031e9d3_08340682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53483f5031e9d3_08340682')) {function content_53483f5031e9d3_08340682($_smarty_tpl) {?>
" method="post">
img/boton_terminar_compra.png" alt="" style="vertical-align: middle; margin-right: 10px;float: left;" /><p style="line-height: 50px; float: left;"><?php echo smartyTranslate(array('s'=>'Da clic para confirmar tu compra con PayPal','mod'=>'paypalusa'),$_smarty_tpl);?>
</p>

" method="post" onsubmit="$('#paypal_express_checkout_id_product_attribute').val($('#idCombination').val());
" />
/img/accpmark_tarjdeb_mx.png<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
/img/express_checkout_mx.png<?php }?>" alt="" style="float: left;"/>