<!DOCTYPE html>
    <head>
        <title>Zadanie 3</title>
        <meta charset="utf-8">
    </head>
    <body>
  <h1> zadanie 3</h1><hr><br>

	<form method="POST">
		<label for="rasa">Rasa:</label>
		<select id="rasa" name="rasa">
			<option selected disabled>--Wybierz swoją rasę--</option>
			<option>Człowiek</option>
			<option>Troll</option>
			<option>Elf</option>
		</select>

		<p style="margin-bottom: 0px;">Płeć:</p>
		<input type="radio" name="plec" id="mezczyzna" value="Mężczyzna">
		<label for="mezczyzna">Mężczyzna</label>

		<input type="radio" name="plec" id="kobieta" value="Kobieta">
		<label for="kobieta">Kobieta</label>

		<input type="radio" name="plec" id="inna" value="Inna">
		<label for="inne">Inna</label>

		<p style="margin-bottom: 0px;">Klasa postaci</p>
		<input type="checkbox" name="klasa" value="Wojownik">
		<label>Wojownik</label>

		<input type="checkbox" name="klasa" value="Łucznik">
		<label>Łucznik</label>

		<input type="checkbox" name="klasa" value="Mag">
		<label>Mag</label></br>

		<button type="submit" name="hodowla">Wpisz dane</button>
	</form>

	<?php

		if(isset($_POST['loginButton'])) {
			login();
		}
		if(isset($_POST['kom'])) {
			kom();
		}
		if(isset($_POST['klasa'])) {
			ankieta();
		}
		function ankieta() {
			$rasa = $_POST['rasa'];
			$plec = $_POST['plec'];
			$klasa = $_POST['klasa'];


			echo "</br>Jesteś: ".$rasa.".</br>Twoja płeć to: ".$plec.".</br>Twoja klasa postaci  to: ".$klasa;

		}

	?>

</body>
</html>