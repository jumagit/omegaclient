<?php
session_start();

//Turn on output buffering
ob_start();
//Get the ipconfig details using system commond
system('ipconfig /all');
//Capture the output into a variable
$mycom = ob_get_contents();
//Clean (erase) the output buffer
ob_clean();

$find_mac = "Physical"; //find the "Physical" & Find the position of Physical text
$pmac = strpos($mycom, $find_mac);

?>


<?php


include "includes/db.php";

//login functionality

if (isset($_POST['login'])) {

    $username = clean($_POST['username']);
    $password = clean($_POST['password']);
    #$compName = gethostbyaddr($_SERVER['REMOTE_ADDR']);
    $computer = substr($mycom, ($pmac + 36), 17);

    if (!empty($username) and !empty($password)) {

        //fetching credentials from the database

        $sql = "SELECT * FROM clients WHERE username = '$username'";

        $result = query($sql);

        if (mysqli_num_rows($result) == 1) {

            $hashed_password = md5($password);

            $mainSql = "SELECT * FROM clients WHERE username = '$username' AND password = '$hashed_password'";

            $result2 = query($mainSql);

            if (mysqli_num_rows($result2) == 1) {

                while ($row = mysqli_fetch_array($result2)) {

                    $accountStatus = $row['account_status'];

                    session_regenerate_id();

                    $_SESSION['username'] = $row['username'];
                    $_SESSION['client_id'] = $row['client_id'];
                    $_SESSION['computerName'] = $computer;
                    $_SESSION['fullName'] = $row['fullName'];
                    $_SESSION['email'] = $row['email'];                    
                    $_SESSION['mobile'] = $row['mobile'];
                  

                    session_write_close();

                    if ($accountStatus = 1) {

                        if (writeLog("logged in from {$IP}", $_SESSION['username'], "SUCCESS")) {
                            $doLoginFeedback = "<div class='alert alert-success bg-success ' >                       
                         <p class='text-white '>  <strong> <i class='mdi mdi-checkbox-marked-circle-outline'></i> Credentials Accepted,  Signing you in ..............</p>
                        <script type='text/javascript'>setTimeout(function() { window.location.href = 'indexClient.php';}, 3000);</script>
                        </div>";
                        }

                    } else {

                        $doLoginFeedback = "<div class='alert alert-danger bg-danger message' >                       
                        <p class='text-white '> <strong> <i class='mdi mdi-close-circle'></i> Sorry!</strong>, Check your Password or Username Used.</p>
                       <script type='text/javascript'>setTimeout(function() { window.location.href = 'login.php';}, 3000);</script>
                       </div>";

                    }

                }

            } else {

                $doLoginFeedback = "<div class='alert bg-warning ' >                       
                <p class='text-white font-weight-bold'> <strong> <i class='mdi mdi-close-circle'></i> Sorry!</strong>,
                 Incorrect Password Entered, Try Again!</p>
               <script type='text/javascript'>setTimeout(function() { window.location.href = 'login.php';}, 3000);</script>
               </div>";

            }

        } else {

            $doLoginFeedback = "<div class='alert  bg-danger ' >                       
            <p class='text-white font-weight-bold'>
             <strong> <i class='mdi mdi-close-circle'></i> Sorry!</strong>,User Not Found In the System.</p>
           <script type='text/javascript'>setTimeout(function() { window.location.href = 'login.php';}, 3000);</script>
           </div>";
        }

    }

}

?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="new/images/favicon.png" rel="icon" />
    <title>OMEGA - Payment System</title>
    <meta name="description"
        content="Payment System.">
   

    <!-- Web Fonts
============================================= -->
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i'
        type='text/css'>

    <!-- Stylesheet
============================================= -->
    <link rel="stylesheet" type="text/css" href="new/vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="new/vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="new/vendor/bootstrap-select/css/bootstrap-select.css" />  
    <link rel="stylesheet" type="text/css" href="new/vendor/owl.carousel/assets/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="new/css/stylesheet.css" />
</head>

<body>

    <!-- Preloader -->
    <!-- <div id="preloader">
  <div data-loader="dual-ring"></div>
</div> -->
    <!-- Preloader End -->

    <!-- Document Wrapper   
============================================= -->
    <div id="main-wrapper">


        <!-- Header
  ============================================= -->
        <header id="header" class="bg-danger" style="border-bottom: 4px solid #fff;">
            <div class="container ">
                <div class="header-row">
                    <div class="header-column justify-content-start">
                        <!-- Logo
          ============================= -->
                        <div class="logo"> <a class="d-flex" href="index.php" title="OMEGA"><img
                                    src="assets/images/logo-white.png" width="121" height="33" alt="Payyed" /></a>
                        </div>
                        <!-- Logo end -->
                        <!-- Collapse Button
          ============================== -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav">
                            <span></span> <span></span> <span></span> </button><!-- Collapse Button end -->

                        <!-- Primary Navigation
          ============================== -->
                        <nav class="primary-menu navbar navbar-expand-lg ">
                            <div id="header-nav" class="collapse navbar-collapse "
                                style="text-align:center !important;">
                                <ul class="navbar-nav mr-auto bg-danger ">

                                    <li><a href="about-us.php" class="text-white pl-2">About Us</a></li>
                                    <li><a href="Services.php" class="text-white pl-2">Services</a></li>
                                    <li><a href="help.php" class="text-white pl-2">Help</a></li>
                                    <li><a href="contact.php" class="text-white pl-2">Contact Us</a></li>


                                </ul>
                            </div>
                        </nav>
                        <!-- Primary Navigation end -->
                    </div>

                    <div class="header-column justify-content-end">
                        <!-- Login & Signup Link
          ============================== -->
                        <nav class="login-signup navbar navbar-expand">
                            <ul class="navbar-nav">
                                <li><a href="help.php" class="text-white text-center">Help</a></li>
                                <li class="align-items-center h-auto ml-sm-3"><a class="btn btn-info  d-sm-block"
                                        href="login.php"><i class="fa fa-user-circle"></i> Account</a></li>
                                <li><a href="#"><img src="new/images/bg/ug.webp" width="120" height="50" alt=""></a>
                                </li>
                            </ul>
                        </nav>
                        <!-- Login & Signup Link end -->
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->