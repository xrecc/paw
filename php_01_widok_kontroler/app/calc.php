<?php
require_once dirname(__FILE__).'/../config.php';

require_once _ROOT_PATH.'/smarty/libs/Smarty.class.php';
include _ROOT_PATH.'/app/security/check.php';

function getParams(&$form){
	$form['kwota'] = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$form['czas'] = isset($_REQUEST['czas']) ? $_REQUEST['czas'] : null;
	$form['procent'] = isset($_REQUEST['procent']) ? $_REQUEST['procent'] : null;
}

function validate(&$form,&$messages){
	if ( ! (isset($form['kwota']) && isset($form['czas']) && isset($form['procent']))) {
		return false;
	}


	$infos [] = 'Przekazano parametry.';

	if ( $form['kwota'] == "") {
		$messages [] = 'Nie podano kwoty';
	}

	if ( $form['czas'] == "") {
		$messages [] = 'Nie podano na ile lat';
	}

	if ( $form['procent'] == "") {
		$messages [] = 'Nie podano oprocentowania';
	}

	if (count ($messages) !=0){
		return false;
	} 
		
		if (! is_numeric( $form['kwota'] )) {
			$messages [] = 'Kwota nie jest liczbą całkowitą';
		}
		
		if (! is_numeric( $form['czas'] )) {
			$messages [] = 'Liczba lat nie jest liczbą całkowitą';
		}
		if (! is_numeric( $form['procent'] )) {
			$messages [] = 'Procent nie jest liczbą całkowitą';
		}	
		if (count ($messages) !=0) return false;
		else return true;
}

function process(&$form,&$messages,&$result,&$role) { 
	global $role;
		$form['kwota'] = intval($form['kwota']);
		$form['czas'] = intval($form['czas']);
		$form['procent'] = floatval($form['procent']);
	
		$result['month'] = round((($form['kwota']/($form['czas']*12))+($form['kwota']/($form['czas']*12))*($form['procent']/100)),2);

		if ($role == 'admin'){
			$result['year'] = $result['month']*12;
		}else {
			$result['year'] = 'tylko dla admina';
		}
		if ($role == 'admin'){
			$result['end'] = $result['month']*($form['czas']*12);
		}else {
			$result['end'] = 'tylko dla admina';
		}
}

$form = null;
$result = null;
$messages = array();

getParams($form);
if (validate($form,$messages)){
	process($form,$messages,$result,$role);
}
$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator kredytowy');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty');

$smarty->assign('role',$role);
$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);

$smarty->display(_ROOT_PATH.'/app/calc.html');