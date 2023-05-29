<?php
/* Smarty version 4.3.1, created on 2023-05-29 22:00:34
  from 'C:\xampp\htdocs\paw\php_01_widok_kontroler\app\views\ResultList.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64750462b674b6_17647030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26e15380fa7c3782f4d659362fa491484d81d3b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\paw\\php_01_widok_kontroler\\app\\views\\ResultList.html',
      1 => 1685385575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64750462b674b6_17647030 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156147996964750462b5c969_99086210', 'header');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20435542164750462b5d370_82222426', 'footer');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167445549864750462b5d771_41636897', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "bloki.html");
}
/* {block 'header'} */
class Block_156147996964750462b5c969_99086210 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_156147996964750462b5c969_99086210',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_20435542164750462b5d370_82222426 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_20435542164750462b5d370_82222426',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_167445549864750462b5d771_41636897 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_167445549864750462b5d771_41636897',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Wrapper -->
<div id="wrapper">
  <!-- Menu -->
  <nav id="menu">
    <ul class="actions stacked">
      <li>
        <a
          href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcShow"
          class="button primary fit"
          disabled
          >Powrót do kalkulatora</a
        >
      </li>

      <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="button fit" disabled
          >Wyloguj</a
        >
      </li>
    </ul>
    <a
      onclick="window.open('https://github.com/xrecc');return false;"
      href="#"
      class="icon brands alt fa-github"
    ></a>
  </nav>
  <section id="contact">
    <div>
      <section>
        <table id="tab_result" class="pure-table pure-table-bordered">
          <tr>
            <th>Nazwa</th>
            <th>Rata Miesięczna</th>
            <th>Kwota Roczna</th>
            <th>Kwota Końcowa</th>
            <th>Opcje</th>
          </tr>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?> <tr><td><?php echo $_smarty_tpl->tpl_vars['r']->value["nick"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["resultMonth"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["resultYear"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["resultEnd"];?>
</td><td><a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
resultDelete&id=<?php echo $_smarty_tpl->tpl_vars['r']->value['idresult'];?>
">Usuń</a></td></tr> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
      </section>
    </div>
  </section>
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
