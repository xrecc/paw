<?php
require_once dirname(__FILE__).'/../config.php';
require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
include $conf->root_path.'/app/security/check.php';

$smarty = new Smarty();
$smarty->assign('conf',$conf);

$smarty->assign('page_title','Kalkulator kredytowy');
$smarty->assign('page_description','obiektowość');
$smarty->assign('page_header','obiektowość');

$smarty->assign('role',$role);
if($role == 'admin'){
    $smarty->display($conf->root_path.'/app/inna_chroniona.html');
}
else{
    header("Location: ".$conf->app_url);
}