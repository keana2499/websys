<?php
$servername = "localhost";
$username = "root";     //server username
$password = "";          //server password 
$dbname = "wst_pro";  //database name

$link = mysqli_connect($servername, $username, $password, $dbname);
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}
// else{
//  echo "connection success";
// }

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
   $query = "SELECT * FROM `donors` WHERE CONCAT(`donor_id`, `name`, `email`, `pnumber`, `blood_type`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `donors`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "wst_pro");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
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
        <section class="page-section" id="list">
            <div class="container">
                <br>
                
                <h2 class="text-center  text-secondary mb-0" style="font-family: serif;">LIST OF DONOR </h2>
                
                <br>

                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-10">
        <form action="" method="post">
            <input type="text" name="valueToSearch" placeholder="Type a Blood Type.."><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
             <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email Address</th>
                    <th>Phone Number</th>
                    <th>Blood Type</th>
                </tr>

                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['donor_id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['pnumber'];?></td>
                    <td><?php echo $row['blood_type'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
         
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
