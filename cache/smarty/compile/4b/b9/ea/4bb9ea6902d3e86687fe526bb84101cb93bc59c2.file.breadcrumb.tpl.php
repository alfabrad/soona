<?php /* Smarty version Smarty-3.1.14, created on 2014-04-11 15:37:55
         compiled from "/Applications/MAMP/htdocs/soona/themes/soona/breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:255890622534852a3789372-56489416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bb9ea6902d3e86687fe526bb84101cb93bc59c2' => 
    array (
      0 => '/Applications/MAMP/htdocs/soona/themes/soona/breadcrumb.tpl',
      1 => 1394482620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '255890622534852a3789372-56489416',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir' => 0,
    'img_dir' => 0,
    'path' => 0,
    'category' => 0,
    'navigationPipe' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_534852a383e157_10175864',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534852a383e157_10175864')) {function content_534852a383e157_10175864($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/soona/tools/smarty/plugins/modifier.escape.php';
?>

<!-- Breadcrumb -->
<?php if (isset(Smarty::$_smarty_vars['capture']['path'])){?><?php $_smarty_tpl->tpl_vars['path'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['path'], null, 0);?><?php }?>
<div class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#" id="brd-crumbs">
    <a property="v:title" rel="v:url" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Return to Home'),$_smarty_tpl);?>
">
        <!--<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/home.gif" height="26" width="26" alt="<?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
" />-->
        <?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>

    </a>
    <?php if (isset($_smarty_tpl->tpl_vars['path']->value)&&$_smarty_tpl->tpl_vars['path']->value){?>
        <span class="navigation-pipe" <?php if (isset($_smarty_tpl->tpl_vars['category']->value)&&isset($_smarty_tpl->tpl_vars['category']->value->id_category)&&$_smarty_tpl->tpl_vars['category']->value->id_category==1){?>style="display:none;"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['navigationPipe']->value, 'html', 'UTF-8');?>
</span>
        <?php if (!strpos($_smarty_tpl->tpl_vars['path']->value,'span')){?>
            <span class="navigation_page"><?php echo $_smarty_tpl->tpl_vars['path']->value;?>
</span>
        <?php }else{ ?>
            <?php echo $_smarty_tpl->tpl_vars['path']->value;?>

        <?php }?>
    <?php }?>
</div>
<!-- /Breadcrumb --><?php }} ?>