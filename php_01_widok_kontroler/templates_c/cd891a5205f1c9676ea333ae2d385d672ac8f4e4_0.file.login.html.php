<?php
/* Smarty version 4.3.1, created on 2023-05-29 21:58:57
  from 'C:\xampp\htdocs\paw\php_01_widok_kontroler\app\views\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647504014571d3_07616508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd891a5205f1c9676ea333ae2d385d672ac8f4e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\paw\\php_01_widok_kontroler\\app\\views\\login.html',
      1 => 1685385394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.html' => 1,
  ),
),false)) {
function content_647504014571d3_07616508 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1867349476647504014506c5_57437318', 'header');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1198989045647504014510e4_95443842', 'footer');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22421583664750401451515_14692452', 'content');
?>

      </section>
    </div>
  </div>
</div>
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "bloki.html");
}
/* {block 'header'} */
class Block_1867349476647504014506c5_57437318 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1867349476647504014506c5_57437318',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_1198989045647504014510e4_95443842 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1198989045647504014510e4_95443842',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_22421583664750401451515_14692452 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_22421583664750401451515_14692452',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Wrapper -->
<div id="wrapper">
  <!-- Main -->
  <div id="main" class="alt">
    <!-- Menu -->
    <nav id="menu">
      <a
        onclick="window.open('https://github.com/xrecc');return false;"
        href="#"
        class="icon brands alt fa-github"
      ></a>
    </nav>
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
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login">
              <div class="fields">
                <div class="field half">
                  <label for="name">Podaj login</label>
                  <input
                    id="id_login"
                    type="text"
                    name="login"
                    placeholder="login"
                  />
                </div>
                <div class="field half">
                  <label for="email">Podaj hasło</label>
                  <input
                    id="id_pass"
                    type="password"
                    name="pass"
                    placeholder="hasło"
                  />
                </div>
              </div>
              <ul class="actions">
                <li><input type="submit" value="Zaloguj" class="primary" /></li>
                <li><input type="reset" value="Wyczyść" /></li>
              </ul>
            </form>
          </section>

          <?php $_smarty_tpl->_subTemplateRender('file:messages.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
