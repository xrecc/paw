<?php
require_once dirname(__FILE__).'/../config.php';

$kwota = $_REQUEST ['kwota'];
$czas = $_REQUEST ['czas'];
$procent = $_REQUEST ['procent'];

if ( ! (isset($kwota) && isset($czas) && isset($procent))) {
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

if ( $kwota == "") {
	$messages [] = 'Nie podano kwoty';
}

if ( $czas == "") {
	$messages [] = 'Nie podano na ile miesięcy';
}

if ( $procent == "") {
	$messages [] = 'Nie podano oprocentowania';
}

if (empty( $messages )) {
	
	if (! is_numeric( $kwota )) {
		$messages [] = 'Kwota nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $czas )) {
		$messages [] = 'Liczba miesięcy nie jest liczbą całkowitą';
	}
	if (! is_numeric( $procent )) {
		$messages [] = 'Procent nie jest liczbą całkowitą';
	}	

}

if (empty ( $messages )) { 
	
	$kwota = intval($kwota);
	$czas = intval($czas);
	$procent = floatval($procent);
	
	$result = ($kwota/($czas*12))*$procent;
}

include 'calc_view.php';