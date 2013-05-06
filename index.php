<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>AeroCMS</title>
</head>
	<?php 
			$filename = 'install/install.php';
			
			if (file_exists($filename)) {
				header('Location: install/install.php');
				echo "Redirecting you to the install!";
			}
			else {
				header('Location: pages/news.php');
				echo "Redirecting you to the news page!";
			}
	?>
</html>