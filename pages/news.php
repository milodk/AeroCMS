<?php/*select top 10 * from news order by ID DESC;*/?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="../themes/default/css/theme.css">
	<meta charset="utf-8">
	<title>Aero CMS</title>
</head>
<div id="container">
<a href="../pages/news.php"><div id="header">
</div></a>

<div id="nav">
<div id="navtext">
<ul>
<li><a href="..\pages\news.php">Home</a></li>
<li><a href="..\pages\register.php">Register</a></li>
<li><a href="..\pages\connect.php">How to Connect</a></li>
<li><a href="..\pages\ucp.php">User Panel</a></li>
<li><a href="..\pages\vote.php">Vote Now</a></li>
</ul>
</div>
</div>

<div id="main">
<div id="main_left">
<div id="newstitle">
<?php
define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/config/config.php'); 
$connect = mysql_connect($dbhost,$dbuname,$dbpass);
if (!$connect) {
	die(mysql_error());
	}
mysql_select_db($dbname);
$results = mysql_query("SELECT * FROM news");
while($row = mysql_fetch_array($results, MYSQLI_ASSOC)) {
	echo $row['Title'];
}
?>
</div>
<div id="newstext"><?php
$results = mysql_query("SELECT * FROM news LIMIT 1");
while($row = mysql_fetch_array($results)) {
	echo $row['Body'];
}
?><br/><br/>Written by <?php
$results = mysql_query("SELECT * FROM news LIMIT 1");
while($row = mysql_fetch_array($results)) {
	echo $row['Author'];
}
?>
</div>
</div>
<div id="main_right"></div>
</div>
<div id="footer"></div>
</div>