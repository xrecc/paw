<?php

require_once dirname(__FILE__).'/../../config.php';

require_once $conf->root_path.'/app/security/security_class/LoginCtrl.class.php';

$ctrl = new LoginCtrl();
$ctrl->processLogin();