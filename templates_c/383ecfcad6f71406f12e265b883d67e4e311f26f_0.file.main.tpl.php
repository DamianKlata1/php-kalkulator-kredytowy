<?php
/* Smarty version 4.1.0, created on 2022-04-19 16:14:28
  from 'E:\xampp\htdocs\php07\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625ec3c49c50b0_80120268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '383ecfcad6f71406f12e265b883d67e4e311f26f' => 
    array (
      0 => 'E:\\xampp\\htdocs\\php07\\app\\views\\templates\\main.tpl',
      1 => 1650374479,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625ec3c49c50b0_80120268 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/main.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css" />
    <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/noscript.css" /></noscript>
</head>
<body class="is-preload">

<!-- Page Wrapper -->
<div id="page-wrapper">

    <!-- Header -->
    <header id="header">
        <h1><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/index.php">Strona główna</a></h1>
        <nav>
            <a href="#form"><p>Formularz</p></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="button">wyloguj</a>
        </nav>

    </header>
    <section id="wrapper">
        <header>
            <div class="inner">
                <h2><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h2>
                <p><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_header']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</p>
                <p><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
</p>
            </div>
        </header>
    </section>


    <!-- Footer -->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_902866836625ec3c49c3970_21233132', 'content');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1621955207625ec3c49c4629_45330037', 'footer');
?>


</div>




</body>
</html><?php }
/* {block 'content'} */
class Block_902866836625ec3c49c3970_21233132 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_902866836625ec3c49c3970_21233132',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1621955207625ec3c49c4629_45330037 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1621955207625ec3c49c4629_45330037',
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
