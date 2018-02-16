<?php

	session_start();
	function confirm_logged_in(){//protects pages
		if(!isset($_SESSION['user_id'])){//if session hasnt been set
			redirect_to("admin_login.php");
		}else {
			//destroys session
			//session_destroy();
		}
}

?>
