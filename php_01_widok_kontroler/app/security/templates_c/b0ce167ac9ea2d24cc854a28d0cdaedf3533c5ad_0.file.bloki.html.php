<?php
/* Smarty version 4.3.1, created on 2023-04-17 21:52:03
  from 'C:\xampp\htdocs\paw\php_01_widok_kontroler\app\bloki.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_643da363adcd20_34535544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0ce167ac9ea2d24cc854a28d0cdaedf3533c5ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\paw\\php_01_widok_kontroler\\app\\bloki.html',
      1 => 1681761101,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643da363adcd20_34535544 (Smarty_Internal_Template $_smarty_tpl) {
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
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
        
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1875370425643da363adbf50_74337336', 'header');
?>

    <header id="header">
        <span class="logo"><strong>Kalkulator</strong></span> <span>by Sebastian Brodziński</span>
        <nav>
            <a href="#menu">Menu</a>
        </nav>
    </header>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42091320643da363adc4d6_50501170', 'content');
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1268104722643da363adc979_07731948', 'footer');
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
class Block_1875370425643da363adbf50_74337336 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1875370425643da363adbf50_74337336',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Default header <?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_42091320643da363adc4d6_50501170 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_42091320643da363adc4d6_50501170',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Default content <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1268104722643da363adc979_07731948 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1268104722643da363adc979_07731948',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Default footer <?php
}
}
/* {/block 'footer'} */
}