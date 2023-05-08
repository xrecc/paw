<?php
/* Smarty version 4.3.1, created on 2023-05-08 20:32:00
  from 'C:\xampp\htdocs\paw\php_01_widok_kontroler\app\views\templates\bloki.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64594020a4ba80_67062007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30638a031787188c5ec3719766760a49c2d3c147' => 
    array (
      0 => 'C:\\xampp\\htdocs\\paw\\php_01_widok_kontroler\\app\\views\\templates\\bloki.html',
      1 => 1683570614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64594020a4ba80_67062007 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Generic - Forty by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/lib/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/lib/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
        
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207144597564594020a4ae44_25356995', 'header');
?>

    <header id="header">
        <span class="logo"><strong>Kalkulator</strong></span> <span>by Sebastian Brodziński</span>
        <nav>
            <a href="#menu">Menu</a>
        </nav>
    </header>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168239256264594020a4b357_25730147', 'content');
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26162587164594020a4b713_76559023', 'footer');
?>

            <footer id="footer">
                <div class="inner">
                    <ul class="copyright">
                        <li>&copy; Kalkulator kredytowy</li><li>Design: Sebastian Brodziński <a href="https://html5up.net">HTML5 UP</a></li>
                    </ul>
                </div>
            </footer>
</body>
</html><?php }
/* {block 'header'} */
class Block_207144597564594020a4ae44_25356995 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_207144597564594020a4ae44_25356995',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Default header <?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_168239256264594020a4b357_25730147 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_168239256264594020a4b357_25730147',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Default content <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_26162587164594020a4b713_76559023 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_26162587164594020a4b713_76559023',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Default footer <?php
}
}
/* {/block 'footer'} */
}
