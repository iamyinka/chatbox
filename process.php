<?php 

include('database.php');

if(isset($_POST['submit'])) {
	$user = strip_tags($_POST['username']);
	$message = strip_tags($_POST['message']);
	
//	Set Timezone
	date_default_timezone_set('Asia/Kuala_lumpur');
	
	$time = date("h:i:s", time());
	
	
	if($user == '' || $message == '' || !isset($user) || !isset($message)) {
		$error = "Name or message box cannot be empty";
		header("Location: index.php?error=".urlencode($error));
		exit();
	} else {
		$query = "INSERT INTO shouts (username, message, time) VALUES ('$user', '$message', '$time')";
		
		if(!mysqli_query($connection, $query)) {
			die("Error: " . mysqli_error($connection));
		} else {
			header("Location: index.php");
			exit();
		}
	}
}


?>


