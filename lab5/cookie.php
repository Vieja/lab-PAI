<!DOCTYPE html>
<html>
	<head>
		<title>PHP</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<?php
			if(isSet($_GET["utworzCookie"])){
				$czas = $_GET['czas'];
				setcookie("cookie", 1, time()+$czas, "/");
			}
		?>
		<a href="index.php">Wstecz</a><br>
	</body>
</html>
