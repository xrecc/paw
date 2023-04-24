<?php
/* Smarty version 4.3.1, created on 2023-04-24 18:23:44
  from 'C:\xampp\htdocs\paw\php_01_widok_kontroler\app\inna_chroniona.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6446ad1077aa55_87396794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdf7c80a852b85b2b336fa91e45c71ae73b2812b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\paw\\php_01_widok_kontroler\\app\\inna_chroniona.html',
      1 => 1682352835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6446ad1077aa55_87396794 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_634898626446ad10775fe7_65491434', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16907612096446ad107767a0_85385474', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6899951406446ad10776bc6_50047094', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../app/bloki.html");
}
/* {block 'header'} */
class Block_634898626446ad10775fe7_65491434 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_634898626446ad10775fe7_65491434',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_16907612096446ad107767a0_85385474 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_16907612096446ad107767a0_85385474',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_6899951406446ad10776bc6_50047094 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6899951406446ad10776bc6_50047094',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


		<!-- Wrapper -->
			<div id="wrapper">


				<!-- Menu -->
					<nav id="menu">
						<ul class="actions stacked">
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" class="button primary fit">Powrót do kalkulatora</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/security/logout.php" class="button fit">Wyloguj</a></li>
						</ul>
						<a onclick="window.open('https://github.com/xrecc');return false;" href="#" class="icon brands alt fa-github"></a>
					</nav>

				<!-- Main -->
					<div id="main" class="alt">

						<!-- Tekst -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>Inna chroniona strona</h1>
									</header>
									<p>Jest to inna chroniona strona. </p>
								</div>
							</section>

					</div>
			</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/lib/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/lib/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/lib/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/lib/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/lib/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/lib/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/lib/assets/js/main.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'content'} */
}
