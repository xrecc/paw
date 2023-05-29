<?php
/* Smarty version 4.3.1, created on 2023-05-23 02:27:05
  from 'C:\xampp\htdocs\paw\php_01_widok_kontroler\ctrl.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_646c085913caf2_33478209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ac236b2267a8d80e00957ebec8cde8e4f8e9aa8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\paw\\php_01_widok_kontroler\\ctrl.php',
      1 => 1684788654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646c085913caf2_33478209 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php'; ?>

require_once 'init.php';

getRouter()->setDefaultRoute('calcShow');
getRouter()->setLoginRoute('login');

getRouter()->addRoute('resultList',		'ResultListCtrl');
getRouter()->addRoute('calcShow',    'CalcCtrl',  ['user','admin']);
getRouter()->addRoute('calcCompute', 'CalcCtrl',  ['user','admin']);
getRouter()->addRoute('login',       'LoginCtrl');
getRouter()->addRoute('logout',      'LoginCtrl', ['user','admin']);
getRouter()->addRoute('resultNew',		'ResultEditCtrl',	['user','admin']);
getRouter()->addRoute('resultSave',		'ResultEditCtrl',	['user','admin']);
getRouter()->addRoute('resultDelete',	'ResultEditCtrl',	['admin']);

getRouter()->go(); <?php }
}
