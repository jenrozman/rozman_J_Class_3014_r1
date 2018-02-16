<?php
	require_once('phpscripts/config.php');
	 confirm_logged_in();
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to your admin panel login!</title>
<link rel="stylesheet" href="css/main.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
</head>
<body>
	<div class="slide">
<?php
	echo "Hello ", $_SESSION['user_name'], "!";

	echo " Your last login was ", $_SESSION['user_login'];
	$today = mktime(0, 0, 0,  date("m"), date("d"), date("y"));
?></div>
</body>
</html>
