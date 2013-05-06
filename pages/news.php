<?php/*select top 10 * from news order by ID DESC;*/?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="../themes/default/css/theme.css">
	<meta charset="utf-8">
	<title>Aero CMS</title>
</head>
<div id="container">

<div id="header">
Header
</div>

<div id="nav">

<ul>
<li><a href="..\pages\news.php">Home</a></li>
<li><a href="..\pages\register.php">Register</a></li>
<li><a href="..\pages\connect.php">How to Connect</a></li>
<li><a href="..\pages\ucp.php">User Panel</a></li>
<li><a href="..\pages\vote.php">Vote Now</a></li>
</ul>

</div>

<div id="main">

<div id="main_left">
<?php
// connecting to host

define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/config/dbconfig.php'); 
	
mysql_connect($dbhost,$dbuname,$dbpass); // replace this with your data
mysql_select_db($dbname); // database name here

$title = mysql_query(";");
?>
</div>
<div id="main_right">Sidebar</div>

</div>

<div id="footer">Footer</div>
</div>