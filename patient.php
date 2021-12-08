
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
        <!-- Patient Form-->
        <section class="page-section" id="patientform">
            <div class="container">
                <br>
                
                <h2 class="text-center  text-secondary mb-0" style="font-family: serif;">Please Fillup this form.</h2>
                
                <br>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        
                        <form method="post" action = "calldbpatient.php">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="nametxt" type="text" name="namet" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Patient name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="emailtxt" type="email" name="emailt" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phonetxt" type="tel" name="numt" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!-- Blood type input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="bloodtxt" type="text" name="bloodt" placeholder="Enter your Blood Type here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="bloodtype">Blood type</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A Bloodtype is required.</div>
                            </div>
                            
                        
                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl" type="submit" name="submit" value = "Submit">Submit</button>
                            
                            
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <script src="js/scripts.js"></script>
        
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
      