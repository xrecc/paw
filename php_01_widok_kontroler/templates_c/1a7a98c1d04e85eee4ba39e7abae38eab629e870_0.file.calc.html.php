<?php
/* Smarty version 4.3.1, created on 2023-05-15 22:12:56
  from 'C:\xampp\htdocs\paw\php_01_widok_kontroler\app\views\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64629248953939_67814570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a7a98c1d04e85eee4ba39e7abae38eab629e870' => 
    array (
      0 => 'C:\\xampp\\htdocs\\paw\\php_01_widok_kontroler\\app\\views\\calc.html',
      1 => 1684181570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.html' => 1,
  ),
),false)) {
function content_64629248953939_67814570 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19922317676462924884fb94_28414271', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118381922864629248850779_13187193', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140618840164629248850bb6_18058065', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "bloki.html");
}
/* {block 'header'} */
class Block_19922317676462924884fb94_28414271 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_19922317676462924884fb94_28414271',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_118381922864629248850779_13187193 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_118381922864629248850779_13187193',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_140618840164629248850bb6_18058065 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_140618840164629248850bb6_18058065',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<!-- Wrapper -->
	<div id="wrapper">

		<!-- Menu -->
			<nav id="menu">
				<ul class="actions stacked">
					<span style="text-align: center;">Zalogowano jako:</span>
					<?php if ((inRole('admin'))) {?>
						<span style="float:right; color:red" >Użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
 (rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
)</span>
					<?php } else { ?>
						<span style="float:right;" >Użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
 (rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
)</span>
					<?php }?>
					<!-- <?php if ((inRole('admin'))) {?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="button primary fit" disabled>Kolejna chroniona strona</a></li>
					<?php }?> -->
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="button fit" disabled>Wyloguj</a></li>	
				</ul>
				<a onclick="window.open('https://github.com/xrecc');return false;" href="#" class="icon brands alt fa-github"></a>
			</nav>

		<!-- Main -->
			<div id="main" class="alt">

				<!-- Tekst -->
					<section id="one">
						<div class="inner">
							<header class="major">
								<h1>Kalkulator kredytowy</h1>
							</header>
							<span class="image main"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/lib/images/coins-gf67c0c9b2_1920.jpg" alt="" /></span>
							<p>Jest to kalkulator wyliczający miesięczną ratę na podstawie kwoty kredytu, ilości lat i oprocentowania. Rola admina zyskuje jeszcze wgląd do kwoty rocznej i końcowej. </p>
						</div>
					</section>

			</div>

		<!-- Kalkulator -->
			<section id="contact">
				<div class="inner">
					<section>
						<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute">
							<div class="fields">
								<div class="field half">
									<label for="name">Podaj kwote</label>
									<input id="id_kwota" type="text" name="kwota" autocomplete="off" placeholder="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
" /><br />
								</div>
								<div class="field half">
									<label for="email">Podaj ile lat</label>
									<input id="id_czas" type="text" name="czas" autocomplete="off" placeholder="lata" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->czas;?>
" /><br />
								</div>
								<div class="field">
									<label for="message">Podaj oprocentowanie</label>
									<input id="id_procent" type="text" name="procent" autocomplete="off" placeholder="oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->procent;?>
" /><br />
								</div>
							</div>
							<ul class="actions">
								<li><input type="submit" value="Oblicz" class="primary" /></li>
								<li><input type="reset" value="Wyczyść" /></li>
							</ul>
						</form>
					</section>

					<?php $_smarty_tpl->_subTemplateRender('file:messages.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->month))) {?> 
	<section class="split">
		<section>
			<div class="contact-method">
				<span class="icon solid alt fa-envelope"></span>
				<label for="id_result">Rata miesięczna</label>
				<input id="id_result" type="text" name="result" placeholder="<?php echo $_smarty_tpl->tpl_vars['res']->value->month;?>
" disabled /><br />
			</div>
		</section>
		<section>
			<div class="contact-method">
				<span class="icon solid alt fa-phone"></span>
				<label for="id_resultyear">Kwota roczna</label>
				<input id="id_resultyear" type="text" name="resultyear" placeholder="<?php echo $_smarty_tpl->tpl_vars['res']->value->year;?>
" disabled /><br />
			</div>
		</section>
		<section>
			<div class="contact-method">
				<span class="icon solid alt fa-home"></span>
				<label for="id_resultend">Kwota końcowa</label>
				<input id="id_resultend" type="text" name="resultend" placeholder="<?php echo $_smarty_tpl->tpl_vars['res']->value->end;?>
" disabled /><br />
			</div>
		</section>
	</section>
</div>
</section>
<?php }?>

			</div>

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