<?php
	require_once('phpscripts/config.php');
	$ip = $_SERVER['REMOTE_ADDR']; //working with ip address'. we want to track b.c if they try and attack you know from where. also because it could be a client request. ie. you can only login at the office. or tracking
	//echo $ip; //will show up localhost ip 127.0.0.1 for local host
	if(isset($_POST['submit'])){
		//echo "Working!";//wont show up until you hit submit
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);//when you copy+paste a temp psw, you can sometimes grab whitespace by accident, thats why it doesnt work sometimes. trim removes that
		if($username !== "" && $password !== ""){	//checks for other accounts only if both fields are filled out != is okay, !== is not okay
			$result = logIn($username, $password, $ip);
			$message = $result;
		}else{ //not filled out
			$message = "Please fill out the required fields";
		}
	}
	date_default_timezone_set('America/Toronto');

	// 24hr clock
	$Hour = date('G');

	if ( $Hour >= 5 && $Hour <= 11 )//before 11am
	{
	    echo "Morning Sunshine!";
	}else if( $Hour >= 12 && $Hour <= 18 ) //from noon-6pm
 {
	    echo "Why hello there, how's your afternoon?";
	}else if( $Hour >= 19 || $Hour <= 4 ) //from 7pm-4am
 {
	    echo "Dober večer! Any plans for this evening?";
}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome! Zdravo!</title>
<link rel="stylesheet" href="css/main.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
</head>
<body>
<?php
	if(!empty($message)){ echo $message;}//onlyruns when empty with a msg
	?><div class="form">
	<form action="admin_login.php" method="post">

		<input type="text" name="username" value="" class="user" placeholder="Username" id="diamond">
		<br>
		<input type="password" name="password" value="" class="pw" placeholder="Password">
		<br>
		<input type="submit" name="submit" value="One of us!" class="sub" >
	</form>
</div>
</body>
</html>
