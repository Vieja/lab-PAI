<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>PHP</title>
		<meta charset="utf-8"/>
		<?php require 'funkcje.php'?>
	</head>
	<body>

		<?php
			if(isSet($_POST["zaloguj"]))
			{
				$login = $_POST["login"];
				$haslo = $_POST["haslo"];

				if( ($login == $osoba1->login && $haslo == $osoba1->haslo) ||
					($login == $osoba2->login && $haslo == $osoba2->haslo) )
					{

					    $_SESSION['zalogowanyImie'] = $osoba1->imieNazwisko;
					    $_SESSION['zalogowany'] = 1;
					    header("Location:user.php");
					}
					else
					{
					    $_SESSION['zalogowany'] = 0;
					    header("Location:index.php");
					}
				//echo $login . " " . $haslo;
			}
		?>

	</body>
</html>
