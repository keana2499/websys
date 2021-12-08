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

  $sid = $_GET['update_id'];
  $sql = "Select * from `list` where id = $sid";

  $result = mysqli_query($link, $sql);
  $row = mysqli_fetch_assoc($result);
  $blood_type= $row['blood_type'];
  $avail= $row['avail'];
  $recipient = $row ['recipient'];
 
  

  if(isset($_POST['submit'])){
      $blood_type = $_POST['blood_type'];
      $avail = $_POST['avail'];
      $recipient = $_POST['recipient'];
     
      

      $mysql = "update `list` set  blood_type = '$blood_type', avail = '$avail', recipient = '$recipient' where id =$sid";

      $result = mysqli_query($link, $mysql);
        if ($result) {
          //echo "Data inserted successfully";
          header('location:listwork.php');
        }
        else {
          die(mysqli_error($link));
        }

  }
 
?>

<!doctype html>
<html lang="en">
   <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Share Blood, Save Life</title>
        
        <link rel="icon" type="image/x-icon" href="assets/blood.png" />

        
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="css/homestyle.css" rel="stylesheet" />
    </head>
  <body id="page-top">
     <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><i class="fa fa-heartbeat" style="font-size:48px;color:red"></i>Share Blood, Save Life</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                   
                    
                </button>
               <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        
                       <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="donorslist.php">Donor's</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="patientslist.php">Patient's</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="listwork.php">List</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="logout.php">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </nav>


        <section class="page-section" id="cdonateform">
            <div class="container">
                <br>
                
                <h2 class="text-center  text-secondary mb-0" style="font-family: serif;">Please Fillup this form.</h2>
                
                <br>
   <div class="row justify-content-center">
    <div class="col-lg-8 col-xl-7">

    
    
   <form method="post">
  <div class="container my-5">
      <form method="post">
 <!-- Blood Type input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="nametxt" type="text" name="blood_type" placeholder="Enter Blood Type..." data-sb-validations="required" value= <?php echo $blood_type;?>>
                                <label for="name">Blood Type</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Blood Type is required.</div>
                            </div>
<!-- Avail input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="nametxt" type="text" name="avail" placeholder="Enter Available..." data-sb-validations="required" value= <?php echo $avail;?>>
                                <label for="name">Available</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">This is required.</div>
                            </div>        
 <!-- Recipient input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="nametxt" type="text" name="recipient" placeholder="Enter Recipient..." data-sb-validations="required" value= <?php echo $recipient;?>>
                                <label for="name">Recipient</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">This is required.</div>
                            </div>        
  
  
  
  
      <button type="submit" class="btn btn-primary btn-xl" name="submit"><a href="donorslist.php" ></a><b style="font-style: italic;"> Update</a></button>
     
      <button type="button" class="btn btn-primary btn-xl" > <a href="listwork.php" class="text-ligth" style="text-decoration: none; color: white; font-style: italic;"><b>
         <b>Back</b></a>
    
                        </form>
                    </div>
                </div>
            </div>
        </section>
  </body>
</html>