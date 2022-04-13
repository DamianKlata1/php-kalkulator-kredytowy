<?php
/* Smarty version 4.1.0, created on 2022-04-13 15:52:29
  from 'E:\instalki\xampp\htdocs\php07\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6256d59dafe260_36009115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dd095d153414fa59f2730ac3a4dd1228b5e243a' => 
    array (
      0 => 'E:\\instalki\\xampp\\htdocs\\php07\\app\\views\\CalcView.tpl',
      1 => 1649857824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6256d59dafe260_36009115 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19026618676256d59da1e558_24034108', 'content');
?>




<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_19026618676256d59da1e558_24034108 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19026618676256d59da1e558_24034108',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<section id="footer">

    <div class="inner">

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
