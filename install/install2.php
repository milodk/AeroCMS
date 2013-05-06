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
	<p>Trying to connect to database...</p>
	<?php
	// Create connection
	define('__ROOT__', dirname(dirname(__FILE__))); 
	require_once(__ROOT__.'/config/config.php'); 
	
	$con=mysqli_connect($dbhost,$dbuname,$dbpass,$dbname);

	// Check connection
	if (mysqli_connect_errno($con))
	  {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
	  }
	?>
	Succesful!<br/><br/>
	
	Attempting to import SQL files...
	<br/><br/>
	<?php
	$mysqli = new mysqli($dbhost,$dbuname,$dbpass,$dbname);

	if (mysqli_connect_error()) {
		exit('Connect Error (' . mysqli_connect_errno() . ') '
				. mysqli_connect_error());
	}
	
	$sql = file_get_contents('sql/beta.sql');
	if (!$sql){
		exit ('Oops, something went wrong, cannot open the SQL file!');
	}

	mysqli_multi_query($mysqli,$sql);

	$mysqli->close();
	?>
	Succesful!<br/><br/>
	
	Please delete the install folder to start using AeroCMS!
	
	<p class="footer">Created by Team Aero</p>
	<div>
	</div>
</body>