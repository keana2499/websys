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


$selected_id = $_GET['del_id'];
$sql = "delete from patients where id = '$selected_id'";
if (mysqli_query($link, $sql)) {
  echo "Record Deleted Successfully";
  header("location:patientslist.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($link);
}
?>