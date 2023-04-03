<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
</head>
<body>

<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">kolejna chroniona strona</a>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">
<form action="<?php print(_APP_ROOT);?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
	<fieldset>
		<legend>Kalkulator</legend>
			<label for="id_kwota">Podaj kwotę: </label>
			<input id="id_kwota" type="text" name="kwota" placeholder="kwota" value="<?php out($kwota) ?>" /><br />
			<label for="id_czas">Na ile lat: </label>
			<input id="id_czas" type="text" name="czas" placeholder="lata" value="<?php out($czas) ?>" /><br />
			<label for="id_czas">Oprocentowanie: </label>
			<input id="id_procent" type="text" name="procent" placeholder="oprocentowanie" value="<?php out($procent) ?>" /><br />
			<button type="submit" class="pure-button pure-button-primary">Oblicz</button>
	</fieldset>
</form>	

<?php

if (isset($messages)) {
	if (count($messages)>0){
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>
<?php if (isset($result)){ ?>
	
<form class="pure-form">
	<label for="id_result">Twoja rata miesięczna wynosi: </label><br />
    <input id="id_result" type="text" name="result" placeholder="<?php out($result) ?>" disabled="" /><br />
	<br />
	<label for="id_resultyear">Na rok wynosi: </label><br />
    <input id="id_resultyear" type="text" name="resultyear" placeholder="<?php out($resultyear) ?>" disabled="" /><br />
	<br />
	<label for="id_resultend">Końcowy koszt pożyczki wynosi: </label><br />
    <input id="id_resultend" type="text" name="resultend" placeholder="<?php out($resultend) ?>" disabled="" /><br />
</form>

<?php } ?>

</body>
</html>