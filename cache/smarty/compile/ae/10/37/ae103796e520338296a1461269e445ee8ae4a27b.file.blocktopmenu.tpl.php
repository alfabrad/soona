<<<<<<< HEAD:cache/smarty/compile/54/cd/09/54cd09384cdf6e628aaaabd88787e707924cef1d.file.blocktopmenu.tpl.php
<?php /* Smarty version Smarty-3.1.14, created on 2014-03-10 23:51:06
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/soona/themes/soona/modules/blocktopmenu/blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1331933336531ea44af39979-33465801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.14, created on 2014-04-11 16:14:00
         compiled from "/Applications/MAMP/htdocs/soona/themes/soona/modules/blocktopmenu/blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1216434853485b18202887-63850797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> 130ed9e65ece62706ded259214722de5b60bc19d:cache/smarty/compile/ae/10/37/ae103796e520338296a1461269e445ee8ae4a27b.file.blocktopmenu.tpl.php
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae103796e520338296a1461269e445ee8ae4a27b' => 
    array (
<<<<<<< HEAD:cache/smarty/compile/54/cd/09/54cd09384cdf6e628aaaabd88787e707924cef1d.file.blocktopmenu.tpl.php
      0 => '/Applications/XAMPP/xamppfiles/htdocs/soona/themes/soona/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1392270667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1331933336531ea44af39979-33465801',
=======
      0 => '/Applications/MAMP/htdocs/soona/themes/soona/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1394482860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1216434853485b18202887-63850797',
>>>>>>> 130ed9e65ece62706ded259214722de5b60bc19d:cache/smarty/compile/ae/10/37/ae103796e520338296a1461269e445ee8ae4a27b.file.blocktopmenu.tpl.php
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
<<<<<<< HEAD:cache/smarty/compile/54/cd/09/54cd09384cdf6e628aaaabd88787e707924cef1d.file.blocktopmenu.tpl.php
  'unifunc' => 'content_531ea44b087b52_17231434',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531ea44b087b52_17231434')) {function content_531ea44b087b52_17231434($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/XAMPP/xamppfiles/htdocs/soona/tools/smarty/plugins/modifier.escape.php';
=======
  'unifunc' => 'content_53485b18255d79_41254478',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53485b18255d79_41254478')) {function content_53485b18255d79_41254478($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/soona/tools/smarty/plugins/modifier.escape.php';
>>>>>>> 130ed9e65ece62706ded259214722de5b60bc19d:cache/smarty/compile/ae/10/37/ae103796e520338296a1461269e445ee8ae4a27b.file.blocktopmenu.tpl.php
?>        </div>
    </div>
<?php if ($_smarty_tpl->tpl_vars['MENU']->value!=''){?>
    <!-- Menu -->
    <div class="sf-contener nav-container clearfix">
        <ul id="main_menu" class="sf-menu clearfix">
            <?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

            <?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value){?>
                <li class="sf-search noBack" style="float:right">
                    <form id="searchbox" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="get">
                        <p>
                            <input type="hidden" name="controller" value="search" />
                            <input type="hidden" value="position" name="orderby"/>
                            <input type="hidden" value="desc" name="orderway"/>
                            <input type="text" name="search_query" value="<?php if (isset($_GET['search_query'])){?><?php echo smarty_modifier_escape($_GET['search_query'], 'htmlall', 'UTF-8');?>
<?php }?>" />
                        </p>
                    </form>
                </li>
            <?php }?>
        </ul>
    </div>
    <div class="sf-right">&nbsp;</div>
    
    <script type="text/javascript">
        $( document ).ready( function( ) {
            $( ".nav-button" ).click( function () {
                $( ".primary-nav" ).toggleClass( "open" );
            });
        });
    </script>
    
    <!-- Mobile Menu -->
    <div class="nav-container-mobile">
        <div class="nav-button main-but">
            <div class="sf-menu-top">
            <div class="tm_mobilemenu_text"><?php echo smartyTranslate(array('s'=>'Menu'),$_smarty_tpl);?>
</div>
            <div class="tm_mobilemenu_img">&nbsp;</div>
        </div>
    </div>
        <ul id="main_menu_mobile" class="primary-nav tree dhtml">
            <?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

        </ul>
    </div>
    <!--/ Menu -->
<?php }?>
<?php }} ?>