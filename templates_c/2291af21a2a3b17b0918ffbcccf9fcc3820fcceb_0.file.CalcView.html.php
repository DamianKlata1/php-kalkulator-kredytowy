<?php
/* Smarty version 4.1.0, created on 2022-03-28 14:52:33
  from 'E:\instalki\xampp\htdocs\php06\app\calc\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6241af91050935_30032369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2291af21a2a3b17b0918ffbcccf9fcc3820fcceb' => 
    array (
      0 => 'E:\\instalki\\xampp\\htdocs\\php06\\app\\calc\\CalcView.tpl',
      1 => 1648320212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6241af91050935_30032369 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19975499176241af90d581f0_39267756', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8489205926241af9104fe08_79510829', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../templates/main.tpl");
}
/* {block 'content'} */
class Block_19975499176241af90d581f0_39267756 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19975499176241af90d581f0_39267756',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section id="footer">
    <div class="inner">
        <a id="form"><h2 class="major">Kalkulator kredytowy</h2></a>
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
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
                    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
                <h3>Wystąpiły błędy: </h3>
                <ol class="err">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
                 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ol>
            <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
                <h3>Informacje: </h3>
                <ol class="inf">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ol>
            <?php }?>

            <?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
                <h3>Miesięczna rata:</h3>
                 <p class="res">
                <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
zł
                </p>
            <?php }?>
        </ul>
    </div>

</section>

<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_8489205926241af9104fe08_79510829 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_8489205926241af9104fe08_79510829',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section id="footer">
    <div class="inner">
        <ul class="copyright">
            <li>Stopka kalkulatora kredytowego</li>
            <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
    </div>
</section>

<?php
}
}
/* {/block 'footer'} */
}
