<?php 

@mysqli_connect("localhost", "netguru", "success12", "shoutit");

if(mysqli_connect_error()) {
	echo "Wrong connection to database. " . mysqli_connect_error();
} else {
	echo "You are successfully connected to the Database";
}


?>