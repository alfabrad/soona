<<<<<<< HEAD:cache/smarty/compile/9a/77/de/9a77deeb1d67c8ab8cb4e050d6c68f8eeef95fec.file.blocknewsletter.tpl.php
<?php /* Smarty version Smarty-3.1.14, created on 2014-03-10 23:51:07
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/soona/modules/blocknewsletter/views/templates/hook/blocknewsletter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1523667652531ea44bc17b36-36688155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.14, created on 2014-04-11 16:14:01
         compiled from "/Applications/MAMP/htdocs/soona/modules/blocknewsletter/views/templates/hook/blocknewsletter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100851780353485b197272c7-16762950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> 130ed9e65ece62706ded259214722de5b60bc19d:cache/smarty/compile/ca/88/96/ca88969ac0274b6a83331f69dcfa43cc031e0042.file.blocknewsletter.tpl.php
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca88969ac0274b6a83331f69dcfa43cc031e0042' => 
    array (
<<<<<<< HEAD:cache/smarty/compile/9a/77/de/9a77deeb1d67c8ab8cb4e050d6c68f8eeef95fec.file.blocknewsletter.tpl.php
      0 => '/Applications/XAMPP/xamppfiles/htdocs/soona/modules/blocknewsletter/views/templates/hook/blocknewsletter.tpl',
      1 => 1392270664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1523667652531ea44bc17b36-36688155',
=======
      0 => '/Applications/MAMP/htdocs/soona/modules/blocknewsletter/views/templates/hook/blocknewsletter.tpl',
      1 => 1394482500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100851780353485b197272c7-16762950',
>>>>>>> 130ed9e65ece62706ded259214722de5b60bc19d:cache/smarty/compile/ca/88/96/ca88969ac0274b6a83331f69dcfa43cc031e0042.file.blocknewsletter.tpl.php
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'nw_error' => 0,
    'link' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
<<<<<<< HEAD:cache/smarty/compile/9a/77/de/9a77deeb1d67c8ab8cb4e050d6c68f8eeef95fec.file.blocknewsletter.tpl.php
  'unifunc' => 'content_531ea44bc4c282_65144241',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531ea44bc4c282_65144241')) {function content_531ea44bc4c282_65144241($_smarty_tpl) {?>
=======
  'unifunc' => 'content_53485b197b38c3_36679616',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53485b197b38c3_36679616')) {function content_53485b197b38c3_36679616($_smarty_tpl) {?>
>>>>>>> 130ed9e65ece62706ded259214722de5b60bc19d:cache/smarty/compile/ca/88/96/ca88969ac0274b6a83331f69dcfa43cc031e0042.file.blocknewsletter.tpl.php

<!-- Block Newsletter module-->

<div id="newsletter_block_left" class="block">
	<h4 class="title_block"><?php echo smartyTranslate(array('s'=>'Newsletter','mod'=>'blocknewsletter'),$_smarty_tpl);?>
</h4>
	<div class="block_content">
	<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value){?>
		<p class="<?php if ($_smarty_tpl->tpl_vars['nw_error']->value){?>warning_inline<?php }else{ ?>success_inline<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
	<?php }?>
		<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index'), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
			<p>
				<input class="inputNew" id="newsletter-input" type="text" name="email" size="18" value="<?php if (isset($_smarty_tpl->tpl_vars['value']->value)&&$_smarty_tpl->tpl_vars['value']->value){?><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'blocknewsletter'),$_smarty_tpl);?>
<?php }?>" />
				<input type="submit" value="ok" class="button_mini" name="submitNewsletter" />
				<input type="hidden" name="action" value="0" />
			</p>
		</form>
	</div>
</div>
<!-- /Block Newsletter module-->

<script type="text/javascript">
    var placeholder = "<?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'blocknewsletter','js'=>1),$_smarty_tpl);?>
";
    
        $(document).ready(function() {
            $('#newsletter-input').on({
                focus: function() {
                    if ($(this).val() == placeholder) {
                        $(this).val('');
                    }
                },
                blur: function() {
                    if ($(this).val() == '') {
                        $(this).val(placeholder);
                    }
                }
            });
        });
    
</script><?php }} ?>