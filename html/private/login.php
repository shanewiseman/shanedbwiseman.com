<?php

if(isset($_POST["username"]) and isset($_POST["password"])){
	
	if($_POST["username"] == "swiseman" and $_POST["password"] == "wisemanss"){
		session_start();
		$_SESSION["established"] = 1;

		echo "<html><body><a href='/private/portal.php'>Click Here</a></body></html>";
		exit();
	}
	
} 

header('HTTP/1.0 401 Unauthorized');
header( 'Location: http://www.shanedbwiseman.com/errorpages/401.html' );

?>
