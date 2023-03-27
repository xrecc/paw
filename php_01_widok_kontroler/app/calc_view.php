<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
<style> 
body {
	background-color: #cbf5f1;
}
label {
	display: block;
	margin: 10px;
}
input {
	float: center;
}
button {
	margin: 10px;
	width: 100px;
	height: 25px;
	background-color: #dea2f2;
}
</style>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="get">
	<label for="id_kwota">Podaj kwotę: </label>
	<input id="id_kwota" type="text" name="kwota" value="<?php if (isset($kwota)) print($kwota); ?>" /><br />
	<label for="id_czas">Na ile lat: </label>
	<input id="id_czas" type="text" name="czas" value="<?php if (isset($czas)) print($czas); ?>" /><br />
	<label for="id_czas">Oprocentowanie: </label>
	<input id="id_procent" type="text" name="procent" value="<?php if (isset($procent)) print($procent); ?>" /><br />
	<button type="submit">Oblicz</button>
</form>	

<?php

if (isset($messages)) {
	echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
	foreach ( $messages as $msg ) {
		echo '<li>'.$msg.'</li>';
	}
	echo '</ol>';
}
?>
<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Rata miesięczna wynosi: '.round($result,2).'zł'; ?>
</div>
<?php } ?>

</body>
</html>