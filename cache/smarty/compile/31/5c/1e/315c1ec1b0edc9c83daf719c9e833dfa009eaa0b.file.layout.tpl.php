<<<<<<< HEAD:cache/smarty/compile/f1/37/9b/f1379b107057f20605a1dbd2702761b84b69704c.file.layout.tpl.php
<?php /* Smarty version Smarty-3.1.14, created on 2014-03-10 23:50:23
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/soona/admin0882/themes/default/template/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:993218056531ea41f0dc855-26649916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.14, created on 2014-04-10 10:41:07
         compiled from "/Applications/MAMP/htdocs/soona/admin0882/themes/default/template/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1722181395346bb9350a8e5-52932681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> 130ed9e65ece62706ded259214722de5b60bc19d:cache/smarty/compile/31/5c/1e/315c1ec1b0edc9c83daf719c9e833dfa009eaa0b.file.layout.tpl.php
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '315c1ec1b0edc9c83daf719c9e833dfa009eaa0b' => 
    array (
<<<<<<< HEAD:cache/smarty/compile/f1/37/9b/f1379b107057f20605a1dbd2702761b84b69704c.file.layout.tpl.php
      0 => '/Applications/XAMPP/xamppfiles/htdocs/soona/admin0882/themes/default/template/layout.tpl',
      1 => 1392069215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '993218056531ea41f0dc855-26649916',
=======
      0 => '/Applications/MAMP/htdocs/soona/admin0882/themes/default/template/layout.tpl',
      1 => 1394483220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1722181395346bb9350a8e5-52932681',
>>>>>>> 130ed9e65ece62706ded259214722de5b60bc19d:cache/smarty/compile/31/5c/1e/315c1ec1b0edc9c83daf719c9e833dfa009eaa0b.file.layout.tpl.php
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conf' => 0,
    'errors' => 0,
    'disableDefaultErrorOutPut' => 0,
    'error' => 0,
    'informations' => 0,
    'info' => 0,
    'confirmations' => 0,
    'warnings' => 0,
    'warning' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
<<<<<<< HEAD:cache/smarty/compile/f1/37/9b/f1379b107057f20605a1dbd2702761b84b69704c.file.layout.tpl.php
  'unifunc' => 'content_531ea41f15d0a5_44306493',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531ea41f15d0a5_44306493')) {function content_531ea41f15d0a5_44306493($_smarty_tpl) {?>
=======
  'unifunc' => 'content_5346bb9361bc52_80490063',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5346bb9361bc52_80490063')) {function content_5346bb9361bc52_80490063($_smarty_tpl) {?>
>>>>>>> 130ed9e65ece62706ded259214722de5b60bc19d:cache/smarty/compile/31/5c/1e/315c1ec1b0edc9c83daf719c9e833dfa009eaa0b.file.layout.tpl.php
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['conf']->value)){?>
	<div class="conf">
		<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

	</div>
<?php }?>
<?php if (count($_smarty_tpl->tpl_vars['errors']->value)&&(!isset($_smarty_tpl->tpl_vars['disableDefaultErrorOutPut']->value)||$_smarty_tpl->tpl_vars['disableDefaultErrorOutPut']->value==false)){?>
	<div class="error">
		<span style="float:right">
			<a id="hideError" href="#"><img alt="X" src="../img/admin/close.png" /></a>
		</span>
		
		<?php if (count($_smarty_tpl->tpl_vars['errors']->value)==1){?>
			<?php echo reset($_smarty_tpl->tpl_vars['errors']->value);?>

		<?php }else{ ?>
			<?php echo smartyTranslate(array('s'=>'%d errors','sprintf'=>count($_smarty_tpl->tpl_vars['errors']->value)),$_smarty_tpl);?>

			<br/>
			<ol>
				<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
					<li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
				<?php } ?>
			</ol>
		<?php }?>
	</div>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['informations']->value)&&count($_smarty_tpl->tpl_vars['informations']->value)&&$_smarty_tpl->tpl_vars['informations']->value){?>
	<div class="hint clear" style="display:block;">
		<span id="see_more_infos">
			<b><a href="#" style="color:#00529B;" onclick="$('#see_more_infos').hide(); $('#infos_block').show();return false;"><?php echo smartyTranslate(array('s'=>'Click here to see more informations'),$_smarty_tpl);?>
</a></b>
		</span>
		<div id="infos_block" style="display:none;">
			<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['informations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
				<?php echo $_smarty_tpl->tpl_vars['info']->value;?>
<br />
			<?php } ?>
		</div>
	</div><br />
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['confirmations']->value)&&count($_smarty_tpl->tpl_vars['confirmations']->value)&&$_smarty_tpl->tpl_vars['confirmations']->value){?>
	<div class="conf" style="display:block;">
		<?php  $_smarty_tpl->tpl_vars['conf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['conf']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['confirmations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->key => $_smarty_tpl->tpl_vars['conf']->value){
$_smarty_tpl->tpl_vars['conf']->_loop = true;
?>
			<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
<br />
		<?php } ?>
	</div><br />
<?php }?>
<?php if (count($_smarty_tpl->tpl_vars['warnings']->value)){?>
	<div class="warn">
		<span style="float:right">
			<a id="hideWarn" href=""><img alt="X" src="../img/admin/close.png" /></a>
		</span>
		<?php if (count($_smarty_tpl->tpl_vars['warnings']->value)>1){?>
			<?php echo smartyTranslate(array('s'=>'There are %d warnings.','sprintf'=>count($_smarty_tpl->tpl_vars['warnings']->value)),$_smarty_tpl);?>

			<span style="margin-left:20px;" id="labelSeeMore">
				<a id="linkSeeMore" href="#" style="text-decoration:underline"><?php echo smartyTranslate(array('s'=>'Click here to see more'),$_smarty_tpl);?>
</a>
				<a id="linkHide" href="#" style="text-decoration:underline;display:none"><?php echo smartyTranslate(array('s'=>'Hide warning'),$_smarty_tpl);?>
</a>
			</span>
			<ul <?php if (count($_smarty_tpl->tpl_vars['warnings']->value)>1){?>style="display:none;"<?php }?> id="seeMore">
			<?php  $_smarty_tpl->tpl_vars['warning'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['warning']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['warnings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['warning']->key => $_smarty_tpl->tpl_vars['warning']->value){
$_smarty_tpl->tpl_vars['warning']->_loop = true;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</li>
			<?php } ?>
			</ul>
		<?php }else{ ?>
			<ul style="margin-top: 3px">
			<?php  $_smarty_tpl->tpl_vars['warning'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['warning']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['warnings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['warning']->key => $_smarty_tpl->tpl_vars['warning']->value){
$_smarty_tpl->tpl_vars['warning']->_loop = true;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</li>
			<?php } ?>
			</ul>
		<?php }?>
	</div>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>