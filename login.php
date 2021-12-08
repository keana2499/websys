<?php 
session_start(); 

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

    $query = "select * from admins";
    $result = mysqli_query($link, $query);


if (isset($_POST['uname']) && isset($_POST['pass'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['pass']);

	if (empty($uname)) {
		header("Location: loginportal.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: loginportal.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);

        
		$sql = "SELECT * FROM admins WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['admin_id'] = $row['admin_id'];
            	header("Location: adminhome.php");
		        exit();
            }else{
				header("Location: loginportal.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: loginportal.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: loginportal.php");
	exit();
}