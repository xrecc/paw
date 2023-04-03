<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

function getParams(&$kwota,&$czas,&$procent){
	$kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$czas = isset($_REQUEST['czas']) ? $_REQUEST['czas'] : null;
	$procent = isset($_REQUEST['procent']) ? $_REQUEST['procent'] : null;
}

function validate(&$kwota,&$czas,&$procent,&$messages){
	if ( ! (isset($kwota) && isset($czas) && isset($procent))) {
		return false;
	}

	if ( $kwota == "") {
		$messages [] = 'Nie podano kwoty';
	}

	if ( $czas == "") {
		$messages [] = 'Nie podano na ile lat';
	}

	if ( $procent == "") {
		$messages [] = 'Nie podano oprocentowania';
	}

	if (count ($messages) !=0){
		return false;
	} 
		
		if (! is_numeric( $kwota )) {
			$messages [] = 'Kwota nie jest liczbą całkowitą';
		}
		
		if (! is_numeric( $czas )) {
			$messages [] = 'Liczba lat nie jest liczbą całkowitą';
		}
		if (! is_numeric( $procent )) {
			$messages [] = 'Procent nie jest liczbą całkowitą';
		}	
		if (count ($messages) !=0) return false;
		else return true;
}

function process(&$kwota,&$czas,&$procent,&$messages,&$result,&$resultyear,&$resultend) { 
	global $role;
		$kwota = intval($kwota);
		$czas = intval($czas);
		$procent = floatval($procent);
	
		$result = round((($kwota/($czas*12))*$procent),2);

		if ($role == 'admin'){
			$resultyear = $result*12;
		}else {
			$resultyear = 'tylko dla admina';
		}
		if ($role == 'admin'){
			$resultend = $result*($czas*12);
		}else {
			$resultend = 'tylko dla admina';
		}
}

$x = null;
$y = null;
$operation = null;
$result = null;
$messages = array();

getParams($kwota,$czas,$procent);
if (validate($kwota,$czas,$procent,$messages)){
	process($kwota,$czas,$procent,$messages,$result,$resultyear,$resultend);
}
include 'calc_view.php';