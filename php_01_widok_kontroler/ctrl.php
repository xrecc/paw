<?php
require_once 'init.php';

getRouter()->setDefaultRoute('calcShow');
getRouter()->setLoginRoute('login');

getRouter()->addRoute('resultList',		'ResultListCtrl');
getRouter()->addRoute('calcShow',    'CalcCtrl',  ['user','admin']);
getRouter()->addRoute('calcCompute', 'CalcCtrl',  ['user','admin']);
getRouter()->addRoute('login',       'LoginCtrl');
getRouter()->addRoute('logout',      'LoginCtrl', ['user','admin']);
getRouter()->addRoute('resultSave',		'CalcCtrl');
getRouter()->addRoute('resultDelete',	'CalcCtrl');

getRouter()->go(); 