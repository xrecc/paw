<?php
/* Smarty version 4.3.1, created on 2023-04-17 21:52:03
  from 'C:\xampp\htdocs\paw\php_01_widok_kontroler\app\security\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_643da363a68f39_92226338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '256801afad51568f44308f02e08e946ea9d7523b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\paw\\php_01_widok_kontroler\\app\\security\\login.html',
      1 => 1681761097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643da363a68f39_92226338 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1972737124643da363a61481_12902568', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1549377583643da363a61b71_66458441', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1102482790643da363a61f86_95302879', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../app/bloki.html");
}
/* {block 'header'} */
class Block_1972737124643da363a61481_12902568 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1972737124643da363a61481_12902568',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_1549377583643da363a61b71_66458441 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1549377583643da363a61b71_66458441',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1102482790643da363a61f86_95302879 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1102482790643da363a61f86_95302879',
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
								<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/security/login.php">
									<div class="fields">
										<div class="field half">
											<label for="name">Podaj login</label>
											<input id="id_login" type="text" name="login" placeholder="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['login'];?>
" />
										</div>
										<div class="field half">
											<label for="email">Podaj hasło</label>
											<input id="id_pass" type="password" name="pass" placeholder="hasło" />
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Zaloguj" class="primary" /></li>
										<li><input type="reset" value="Wyczyść" /></li>
									</ul>
								</form>
							</section>
                            

<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
		<div id="msgFound">
			<ol style="padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
					<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ol>
		</div>
	<?php }
}?>


			</div>


</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'content'} */
}
