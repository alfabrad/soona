<<<<<<< HEAD:cache/smarty/compile/a1/3c/f8/a13cf87b5a05e3bf756a4532039bd32913629a3b.file.blocksearch-top.tpl.php
<?php /* Smarty version Smarty-3.1.14, created on 2014-03-10 23:51:06
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/soona/modules/blocksearch/blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162147131531ea44acd6772-51854264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.14, created on 2014-04-11 16:14:00
         compiled from "/Applications/MAMP/htdocs/soona/modules/blocksearch/blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196799103253485b18050881-58253477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> 130ed9e65ece62706ded259214722de5b60bc19d:cache/smarty/compile/d9/07/7f/d9077fcddf24756462791766e7e458f578a26b14.file.blocksearch-top.tpl.php
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9077fcddf24756462791766e7e458f578a26b14' => 
    array (
<<<<<<< HEAD:cache/smarty/compile/a1/3c/f8/a13cf87b5a05e3bf756a4532039bd32913629a3b.file.blocksearch-top.tpl.php
      0 => '/Applications/XAMPP/xamppfiles/htdocs/soona/modules/blocksearch/blocksearch-top.tpl',
      1 => 1392270664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162147131531ea44acd6772-51854264',
=======
      0 => '/Applications/MAMP/htdocs/soona/modules/blocksearch/blocksearch-top.tpl',
      1 => 1394482500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196799103253485b18050881-58253477',
>>>>>>> 130ed9e65ece62706ded259214722de5b60bc19d:cache/smarty/compile/d9/07/7f/d9077fcddf24756462791766e7e458f578a26b14.file.blocksearch-top.tpl.php
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hook_mobile' => 0,
    'link' => 0,
    'search_query' => 0,
    'logged' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
<<<<<<< HEAD:cache/smarty/compile/a1/3c/f8/a13cf87b5a05e3bf756a4532039bd32913629a3b.file.blocksearch-top.tpl.php
  'unifunc' => 'content_531ea44ae20d02_19926629',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531ea44ae20d02_19926629')) {function content_531ea44ae20d02_19926629($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/XAMPP/xamppfiles/htdocs/soona/tools/smarty/plugins/modifier.escape.php';
=======
  'unifunc' => 'content_53485b180ed8b8_65816990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53485b180ed8b8_65816990')) {function content_53485b180ed8b8_65816990($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/soona/tools/smarty/plugins/modifier.escape.php';
>>>>>>> 130ed9e65ece62706ded259214722de5b60bc19d:cache/smarty/compile/d9/07/7f/d9077fcddf24756462791766e7e458f578a26b14.file.blocksearch-top.tpl.php
?>
<!-- block seach mobile -->
<?php if (isset($_smarty_tpl->tpl_vars['hook_mobile']->value)){?>
<div class="input_search" data-role="fieldcontain">
    <form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" id="searchbox">
        <input type="hidden" name="controller" value="search" />
        <input type="hidden" name="orderby" value="position" />
        <input type="hidden" name="orderway" value="desc" />
        <input class="search_query" type="search" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(smarty_modifier_escape($_smarty_tpl->tpl_vars['search_query']->value, 'htmlall', 'UTF-8'));?>
" />
    </form>
</div>
<?php }else{ ?>
<!-- Block search module TOP -->
<div id="search_block_top">
    <form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" id="searchbox" class="clearfix">
        <p>
            <label for="search_query_top"><!-- image on background --></label>
            <input type="hidden" name="controller" value="search" />
            <input type="hidden" name="orderby" value="position" />
            <input type="hidden" name="orderway" value="desc" />
            <input class="search_query" type="text" id="search_query_top" name="search_query" value="<?php echo stripslashes(smarty_modifier_escape($_smarty_tpl->tpl_vars['search_query']->value, 'htmlall', 'UTF-8'));?>
" />
            <input type="submit" name="submit_search" value="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" class="button" />
        </p>
    </form>
<?php if ($_smarty_tpl->tpl_vars['logged']->value){?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Ir a mi Cuenta','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="account view_account" rel="nofollow">
        <span class="crown"></span>
        <span><?php echo smartyTranslate(array('s'=>'Bienvenido(a)','mod'=>'blockuserinfo'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
</span>
        <span class="crown"></span>
    </a>
<?php }?>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['self']->value)."/blocksearch-instantsearch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
<!-- /Block search module TOP -->
<?php }} ?>