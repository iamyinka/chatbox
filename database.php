<?php 

$connection = mysqli_connect("localhost", "netguru", "success12", "shoutit");

if(mysqli_connect_errno()) {
	echo "Wrong connection to database. " . mysqli_connect_error();
}


?>