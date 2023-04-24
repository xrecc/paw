<?php
require_once 'Config.class.php';

$conf = new Config();

$conf->server_name = 'localhost:80';
$conf->server_url ='http://'.$conf->server_name;
$conf->app_root = '/paw/php_01_widok_kontroler';
$conf->app_url = $conf->server_url.$conf->app_root;
$conf->root_path = dirname(__FILE__);

?>