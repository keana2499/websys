<?php
	$servername = "localhost";
	$username = "root";     //server username
	$password = "";          //server password 
	$dbname = "wst_pro";  //database name

	$link = mysqli_connect($servername, $username, $password, $dbname);
			if (!$link) {
  				die("Connection failed: " . mysqli_connect_error());
			}
			/*else{
				echo "Connection Success";
			}*/

	$query = "select * from admin";
	$result = mysqli_query($link, $query);
?>

