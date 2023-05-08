<?php
/* Smarty version 4.3.1, created on 2023-05-08 20:00:36
  from 'C:\xampp\htdocs\paw\php_01_widok_kontroler\app\views\bloki.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645938c40aacc2_58838480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68d0130bbeab58d5b008ea55df61396c13bdbdf3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\paw\\php_01_widok_kontroler\\app\\views\\bloki.html',
      1 => 1683568711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645938c40aacc2_58838480 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1342396360645938c40a9f90_89943539', 'header');
?>

    <header id="header">
        <span class="logo"><strong>Kalkulator</strong></span> <span>by Sebastian Brodziński</span>
        <nav>
            <a href="#menu">Menu</a>
        </nav>
    </header>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_714498855645938c40aa508_48918024', 'content');
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_644651294645938c40aa918_56736231', 'footer');
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
class Block_1342396360645938c40a9f90_89943539 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1342396360645938c40a9f90_89943539',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Default header <?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_714498855645938c40aa508_48918024 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_714498855645938c40aa508_48918024',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Default content <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_644651294645938c40aa918_56736231 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_644651294645938c40aa918_56736231',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Default footer <?php
}
}
/* {/block 'footer'} */
}
