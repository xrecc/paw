<?php
/* Smarty version 4.3.1, created on 2023-05-08 20:02:42
  from 'C:\xampp\htdocs\paw\php_01_widok_kontroler\app\views\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64593942757185_24330878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4522ba06548cfba694cfaed2a9cfac3b98e346db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\paw\\php_01_widok_kontroler\\app\\views\\calc.html',
      1 => 1683568713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64593942757185_24330878 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179569594364593942748540_31604922', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1008225621645939427490c1_55309108', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124382397264593942749526_16824198', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "bloki.html");
}
/* {block 'header'} */
class Block_179569594364593942748540_31604922 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_179569594364593942748540_31604922',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_1008225621645939427490c1_55309108 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1008225621645939427490c1_55309108',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_124382397264593942749526_16824198 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_124382397264593942749526_16824198',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<!-- Wrapper -->
	<div id="wrapper">

		<!-- Menu -->
			<nav id="menu">
				<!-- <ul class="actions stacked">
					<?php if ($_smarty_tpl->tpl_vars['role']->value == 'admin') {?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/inna_chroniona.php" class="button primary fit" disabled>Kolejna chroniona strona</a></li>
					<?php }?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/security/logout.php" class="button fit" disabled>Wyloguj</a></li>	
				</ul> -->
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
						<form method="post" action="#">
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
	<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
			<h4>Informacje: </h4>
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
	<?php }
if ((isset($_smarty_tpl->tpl_vars['res']->value->month))) {?> 
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
