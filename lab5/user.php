<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>PHP</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<?php 
			require_once('funkcje.php');
			if($_SESSION['zalogowany']!=1)
    			header("Location:index.php");
			else
    			echo "Zalogowany jako ".$_SESSION['zalogowanyImie'];
		?>
		<form action="index.php" method="post">
			<fieldset>
  			<legend>Zakończ</legend>
				<input type="submit" value="Wyloguj" name="wyloguj">
			</fieldset>
		</form>
		<br>
		<form action="user.php" method="post" enctype='multipart/form-data'>
			<fieldset>
  			<legend>Załącz plik</legend>
		    <input type="file" name="myfile" id="file"><br />
		    <input type="submit" value="Upload" name="upload">
		    <?php
            if(isSet($_POST["upload"]))
            {
                $currentDir = getcwd();
                $uploadDirectory = "/zdjeciaUzytkownikow/";
                $fileName = $_FILES['myfile']['name'];
                $fileSize = $_FILES['myfile']['size'];
                $fileTmpName = $_FILES['myfile']['tmp_name'];
                $fileType = $_FILES['myfile']['type'];
                if($fileName != "" and
                    ($fileType == 'image/png' or $fileType == 'image/jpeg' or $fileType == 'image/JPEG' or $fileType == 'image/PNG'))
                {
                    $uploadPath = $currentDir . $uploadDirectory . $fileName;
                    if(move_uploaded_file($fileTmpName, $uploadPath))
                        //echo "Zdjęcie zostało załadowane na serwer FTP";
                        echo "<img src=".$uploadDirectory.$fileName." height=200 width=300 />";
                }
            }
        	?>
        	</fieldset>
		</form>
		<br>
		<a href="index.php">Powrót do index.php</a>
	</body>
</html>