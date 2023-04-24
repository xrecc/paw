<?php
/* Smarty version 4.3.1, created on 2023-04-24 18:23:30
  from 'C:\xampp\htdocs\paw\php_01_widok_kontroler\app\security\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6446ad02ec3640_96119388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '355174dc94618c8d8f9c82cb3418411b1d35cbff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\paw\\php_01_widok_kontroler\\app\\security\\login.html',
      1 => 1682352987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6446ad02ec3640_96119388 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18830969786446ad02eb7571_42122249', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8942315116446ad02eb7ed4_02840047', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6153843746446ad02eb8416_13075937', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../app/bloki.html");
}
/* {block 'header'} */
class Block_18830969786446ad02eb7571_42122249 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_18830969786446ad02eb7571_42122249',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_8942315116446ad02eb7ed4_02840047 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_8942315116446ad02eb7ed4_02840047',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_6153843746446ad02eb8416_13075937 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6153843746446ad02eb8416_13075937',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Wrapper -->
	<div id="wrapper">
		<!-- Main -->
			<div id="main" class="alt">

				<!-- Tekst -->
					<section id="one">
						<div class="inner">
							<header class="major">
								<h1>Logowanie</h1>
							</header>
						</div>
					</section>

			</div>

		<!-- Logowanie -->
			<section id="contact">
				<div class="inner">
					<section>
						<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/security/login.php">
							<div class="fields">
								<div class="field half">
									<label for="name">Podaj login</label>
									<input id="id_login" type="text" name="login" placeholder="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
" />
								</div>
								<div class="field half">
									<label for="email">Podaj hasło</label>
									<input id="id_pass" type="password" name="pass" placeholder="hasło" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->pass;?>
" />
								</div>
							</div>
							<ul class="actions">
								<li><input type="submit" value="Zaloguj" class="primary" /></li>
								<li><input type="reset" value="Wyczyść" /></li>
							</ul>
						</form>
					</section>
					

					<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
					<div id="msgFound">
						<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">
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
					</div>
				<?php }?>
			

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
