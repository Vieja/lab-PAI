<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>PHP</title>
		<meta charset="utf-8"/>
		<?php require 'funkcje.php'?>
	</head>
	<body>
		<h1>
		<?php
			echo "Nasz system";
		?>
		</h1>

		<?php
			if(isSet($_POST["wyloguj"]))
			{
				$_SESSION['zalogowany'] = 0;	    
			}
		?>

		<form action="logowanie.php" method="post">
			<fieldset>
  			<legend>Logowanie:</legend>
				Login: <input type="text" name="login"><br>
				Haslo: <input type="password" name="haslo"><br>
				<input type="submit" value="Zaloguj" name="zaloguj">
			</fieldset>
		</form>
		<br>
		<form action="cookie.php" method="get">
			<fieldset>
			<legend>Stwórz ciasteczko:</legend>
				Czas: <input type="number" name="czas"><br>
				<input type="submit" value="Utwórz Cookie" name="utworzCookie">
				<?php
	            if(isSet($_COOKIE['cookie']))
	                echo 'Ciasteczko: ' . $_COOKIE['cookie'];
	            else
	            	echo 'Ciasteczko utraciło ważność';
	        	?>
        	</fieldset>
		</form>
		<br>
		<a href="user.php">Przejdź do user.php</a>

		 
	</body>
</html>
