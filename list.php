<!DOCTYPE html>
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
                        
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php">Home</a></li>
                    </ul>
                </div>
            </div>
        </nav>
       
        
    
        
        <section class="page-section" id="list">
            <div class="container">
                <br>
                
                <h2 class="text-center  text-secondary mb-0" style="font-family: serif;">AVAILABLE DONOR </h2>
                
                <br>

                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
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

    $query = "select * from list";
    $result = mysqli_query($link, $query);
?>
                        <table class="table">
                        
                        
                            <thead>
                                <th style="font-size: 20px;">Blood Type</th>
                                <th style="font-size: 20px;">Available</th>
                                <th style="font-size: 20px;">Recipient's</th>
                            </thead>
                            <?php
    
                                while($row = mysqli_fetch_array($result)){
                                $blood = $row['blood_type'];
                                $a = $row['avail'];
                                $re = $row['recipient'];
        
        

                                echo "<tr>
                                            <td>$blood</td>
                                            <td>$a</td>
                                            <td>$re</td>
               

                   
                                    </tr>";
        
                            }
                            ?>
                       
                       </table>
                    </div>
                </div>
            </div>
</body>
</html>
      