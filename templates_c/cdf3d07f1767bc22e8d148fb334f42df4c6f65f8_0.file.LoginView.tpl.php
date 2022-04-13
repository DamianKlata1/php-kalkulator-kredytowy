<?php
/* Smarty version 4.1.0, created on 2022-04-11 14:28:28
  from 'E:\instalki\xampp\htdocs\php07\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62541eec844f00_80684295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdf3d07f1767bc22e8d148fb334f42df4c6f65f8' => 
    array (
      0 => 'E:\\instalki\\xampp\\htdocs\\php07\\app\\views\\LoginView.tpl',
      1 => 1649679745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_62541eec844f00_80684295 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192630036262541eec83db22_72362240', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_192630036262541eec83db22_72362240 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_192630036262541eec83db22_72362240',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<section id="footer">
	<div class="inner">
		<a id="form"><h2 class="major">Logowanie do systemu</h2></a>
			<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post"  class="pure-form pure-form-aligned bottom-margin">
				<div class="fields">
					<fieldset>
						<div class="pure-control-group">
							<label for="id_login">login: </label>
							<input id="id_login" type="text" name="login"/>
						</div>
						<div class="pure-control-group">
							<label for="id_pass">pass: </label>
							<input id="id_pass" type="password" name="pass" /><br />
						</div>
						<div class="pure-controls">
							<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
						</div>
					</fieldset>
				</div>
			</form>
	</div>
</section>

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
