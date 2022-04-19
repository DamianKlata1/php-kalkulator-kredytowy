<?php
/* Smarty version 4.1.0, created on 2022-04-19 18:25:08
  from 'E:\xampp\htdocs\php07\app\views\ResultList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625ee264ba4c01_19987656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bdc0092bc26fa431b7ac8a7427c24e8ef86250d' => 
    array (
      0 => 'E:\\xampp\\htdocs\\php07\\app\\views\\ResultList.tpl',
      1 => 1650385500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625ee264ba4c01_19987656 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_618014358625ee264b935e2_13018725', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_618014358625ee264b935e2_13018725 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_618014358625ee264b935e2_13018725',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="footer">
    <div class="inner">
        <?php if ($_smarty_tpl->tpl_vars['db']->value->count("results") > 0) {?>
            <table  class="alt">
                <thead>
                <tr>
                    <th>Kwota</th>
                    <th>Ile lat?</th>
                    <th>Oprocentowanie</th>
                    <th>Roczna rata</th>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                    <tr><td><?php echo $_smarty_tpl->tpl_vars['r']->value["amount"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["years"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["interest"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["result"];?>
</td></tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
            <?php if (inRole('admin')) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
resultListClear" class="button primary">Wyczyść</a><br><br>
            <?php }?>
        <?php }?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/index.php" class="button primary">Wróć do kalkulatora</a>
    </div>
</section>
<?php
}
}
/* {/block 'content'} */
}
