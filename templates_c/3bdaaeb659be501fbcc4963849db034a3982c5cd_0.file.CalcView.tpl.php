<?php
/* Smarty version 4.1.0, created on 2022-04-19 16:14:28
  from 'E:\xampp\htdocs\php07\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625ec3c4931f43_29566881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bdaaeb659be501fbcc4963849db034a3982c5cd' => 
    array (
      0 => 'E:\\xampp\\htdocs\\php07\\app\\views\\CalcView.tpl',
      1 => 1650377451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_625ec3c4931f43_29566881 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25613894625ec3c4927342_71760524', 'content');
?>




<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_25613894625ec3c4927342_71760524 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_25613894625ec3c4927342_71760524',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<section id="footer">

    <div class="inner">
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
resultList" class="button primary">Wyświetl Historie Obliczeń</a>
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute">
            <div class="fields">
                <div class="field">
                    <label for="amount">Kwota</label>
                    <input type="text" name="amount" id="amount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->amount;?>
"/>
                </div>
                <div class="field">
                    <label for="years">Ile lat ?</label>
                    <input type="text" name="years" id="years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->years;?>
" />
                </div>
                <div class="field">
                    <label for="interest">Oprocentowanie</label>
                    <input type="text" name="interest" id="interest" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->interest;?>
"/>
                </div>
            </div>
            <ul class="actions">
                <a href="#submit"><li><input type="submit" value="Oblicz"  /></li></a>
            </ul>
        </form>
        <ul class ="contact">
                    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </ul>
    </div>

</section>



<?php
}
}
/* {/block 'content'} */
}
