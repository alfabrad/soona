<<<<<<< HEAD:cache/smarty/compile/10/4d/f5/104df523c0f5015bf42fb4ebced14b4e47349624.file.footer.tpl.php
<?php /* Smarty version Smarty-3.1.14, created on 2014-03-10 23:50:23
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/soona/admin0882/themes/default/template/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:858411486531ea41f46c423-01564270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.14, created on 2014-04-10 10:41:07
         compiled from "/Applications/MAMP/htdocs/soona/admin0882/themes/default/template/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2589878705346bb93acb5d4-63113810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> 130ed9e65ece62706ded259214722de5b60bc19d:cache/smarty/compile/21/bb/4e/21bb4e5436dec91b5032a7e277cbe9125af97e96.file.footer.tpl.php
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21bb4e5436dec91b5032a7e277cbe9125af97e96' => 
    array (
<<<<<<< HEAD:cache/smarty/compile/10/4d/f5/104df523c0f5015bf42fb4ebced14b4e47349624.file.footer.tpl.php
      0 => '/Applications/XAMPP/xamppfiles/htdocs/soona/admin0882/themes/default/template/footer.tpl',
      1 => 1392069215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '858411486531ea41f46c423-01564270',
=======
      0 => '/Applications/MAMP/htdocs/soona/admin0882/themes/default/template/footer.tpl',
      1 => 1394483160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2589878705346bb93acb5d4-63113810',
>>>>>>> 130ed9e65ece62706ded259214722de5b60bc19d:cache/smarty/compile/21/bb/4e/21bb4e5436dec91b5032a7e277cbe9125af97e96.file.footer.tpl.php
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_footer' => 0,
    'ps_version' => 0,
    'timer_start' => 0,
    'iso_is_fr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
<<<<<<< HEAD:cache/smarty/compile/10/4d/f5/104df523c0f5015bf42fb4ebced14b4e47349624.file.footer.tpl.php
  'unifunc' => 'content_531ea41f4fea34_74292453',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531ea41f4fea34_74292453')) {function content_531ea41f4fea34_74292453($_smarty_tpl) {?>
=======
  'unifunc' => 'content_5346bb93b1a486_22292682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5346bb93b1a486_22292682')) {function content_5346bb93b1a486_22292682($_smarty_tpl) {?>
>>>>>>> 130ed9e65ece62706ded259214722de5b60bc19d:cache/smarty/compile/21/bb/4e/21bb4e5436dec91b5032a7e277cbe9125af97e96.file.footer.tpl.php
			<div style="clear:both;height:0;line-height:0">&nbsp;</div>
		</div>
		<div style="clear:both;height:0;line-height:0">&nbsp;</div>
	</div>
<?php if ($_smarty_tpl->tpl_vars['display_footer']->value){?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayBackOfficeFooter"),$_smarty_tpl);?>

			<div id="footer">
				<div class="footerLeft">
					<a href="http://www.prestashop.com/" target="_blank">PrestaShop&trade; <?php echo $_smarty_tpl->tpl_vars['ps_version']->value;?>
</a><br />
					<span><?php echo smartyTranslate(array('s'=>'Load time: '),$_smarty_tpl);?>
<?php echo number_format(microtime(true)-$_smarty_tpl->tpl_vars['timer_start']->value,3,'.','');?>
s</span>
				</div>
				<div class="footerRight">
					<?php if ($_smarty_tpl->tpl_vars['iso_is_fr']->value){?>
						<span>Questions / Renseignements / Formations :</span> <strong>+33 (0)1.40.18.30.04</strong>
					<?php }?>
					|&nbsp;<a href="http://www.prestashop.com/en/contact-us?utm_source=backoffice_footer" target="_blank" class="footer_link"><?php echo smartyTranslate(array('s'=>'Contact'),$_smarty_tpl);?>
</a>
					|&nbsp;<a href="http://forge.prestashop.com/?utm_source=backoffice_footer" target="_blank" class="footer_link"><?php echo smartyTranslate(array('s'=>'Bug Tracker'),$_smarty_tpl);?>
</a>
					|&nbsp;<a href="http://www.prestashop.com/forums/?utm_source=backoffice_footer" target="_blank" class="footer_link"><?php echo smartyTranslate(array('s'=>'Forum'),$_smarty_tpl);?>
</a>
					|&nbsp;<a href="http://addons.prestashop.com/?utm_source=backoffice_footer" target="_blank" class="footer_link"><?php echo smartyTranslate(array('s'=>'Addons'),$_smarty_tpl);?>
</a>
				</div>
			</div>
		</div>
	</div>
	<div id="ajax_confirmation" style="display:none"></div>
	<div id="ajaxBox" style="display:none"></div>
<?php }?>
	<div id="scrollTop"><a href="#top"></a></div>
</body>
</html><?php }} ?>