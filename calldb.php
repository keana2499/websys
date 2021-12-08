<?php
session_start(); 
include "dbconn.php";


?>

<?php
	$name = $_POST['namet'];
	$email = $_POST['emailt'];
	$pnum = $_POST['numt'];
	$blood = $_POST['bloodt'];
	

$sql = "insert into donors(name, email, pnumber, blood_type) 
		values('$name','$email','$pnum', '$blood')";

//echo "$sql";

if (mysqli_query($link, $sql)) {
 
  
  echo '<script> alert ("Successfully")</script>';
  header("location:thanks.php");
  
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

?>
