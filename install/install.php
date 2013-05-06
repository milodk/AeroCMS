<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="installstyle.css">
	<meta charset="utf-8">
	<title>AeroCMS</title>
</head>
<body>
	<div id="container">
	<img src="images/64x264.png"></img><h1></h1>
	
	<div id="body">
	<p>Welcome to the setup of AeroCMS, we're gonna need some information about your server:</p>
	<br \>
	<form action="" method="post" name="install" id="install">
	Database Host: <input type="text" name="dbhost">
	Database Username: <input type="text" name="dbuname">
	Database Password: <input type="password" name="dbpass">
	Website Database:
	<p id="subtext">Create an empty database with this name</p>
	<input type="text" name="dbname">
	World Database:
	<input type="text" name="worlddb">
	Characters Database:
	<input type="text" name="chardb">
	Auth Database:
	<input type="text" name="authdb">
	<input type="submit" name="Submit" value="Submit Information">
	</form>
	
	<p class="footer">Created by Team Aero</p>
	<div>
	</div>
	
	<?php
	if (isset($_POST["Submit"])) {
$string = '<?php
$dbhost = "'. $_POST["dbhost"]. '";
$dbuname = "'. $_POST["dbuname"]. '";
$dbpass = "'. $_POST["dbpass"]. '";
$dbname = "'. $_POST["dbname"]. '";

$worlddb = "'. $_POST["worlddb"]. '";
$chardb = "'. $_POST["chardb"]. '";
$authdb = "'. $_POST["authdb"]. '";
?>';
		$fp = fopen("../config/config.php", "w");
		fwrite($fp, $string);
		fclose($fp);
		header('Location: install2.php');
	}?>
</body>