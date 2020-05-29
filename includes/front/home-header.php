<?php
// Turn on output buffering
ob_start();
//Get the ipconfig details using system commond
system('ipconfig /all');
// Capture the output into a variable
$mycom = ob_get_contents();
// Clean (erase) the output buffer
ob_clean();
$find_mac = "Physical"; //find the "Physical" & Find the position of Physical text
$pmac = strpos($mycom, $find_mac);

?>


<?php

session_start();

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
                       <script type='text/javascript'>setTimeout(function() { window.location.href = 'signin.php';}, 3000);</script>
                       </div>";

                    }

                }

            } else {

                $doLoginFeedback = "<div class='alert bg-warning ' >                       
                <p class='text-white font-weight-bold'> <strong> <i class='mdi mdi-close-circle'></i> Sorry!</strong>,
                 Incorrect Password Entered, Try Again!</p>
               <script type='text/javascript'>setTimeout(function() { window.location.href = 'index.php';}, 3000);</script>
               </div>";

            }

        } else {

            $doLoginFeedback = "<div class='alert  bg-danger ' >                       
            <p class='text-white font-weight-bold'>
             <strong> <i class='mdi mdi-close-circle'></i> Sorry!</strong>,User Not Found In the System.</p>
           <script type='text/javascript'>setTimeout(function() { window.location.href = 'index.php';}, 3000);</script>
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
<link href="images/favicon.png" rel="icon" />

<title>Omega Sales</title>
<meta name="description" content="Quickai - Recharge & Bill Payment, Booking HTML5 Template">
<meta name="author" content="harnishdesign.net">

<!-- Web Fonts
============================================= -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

<!-- Stylesheet
============================================= -->
<link rel="stylesheet" type="text/css" href="frontend/vendor/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="frontend/vendor/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="frontend/vendor/owl.carousel/assets/owl.carousel.min.css" />
<link rel="stylesheet" type="text/css" href="frontend/vendor/owl.carousel/assets/owl.theme.default.min.css" />
<link rel="stylesheet" type="text/css" href="frontend/css/stylesheet.css" />

</head>
<body>
<!-- Preloader -->
<div id="preloader"><div data-loader="dual-ring"></div></div><!-- Preloader End -->

<!-- Document Wrapper   
============================================= -->
<div id="main-wrapper">

  <!-- Header
  ============================================= -->
  <header id="header">
    <div class="container">
      <div class="header-row">
        <div class="header-column justify-content-start"> 
          
          <!-- Logo
          ============================================= -->
          <div class="logo">
          	<a href="index.php" title="Quickai - HTML Template"><img src="frontend/images/logo.png" alt="Quickai" width="127" height="29" /></a>
          </div><!-- Logo end -->
          
        </div>
        
        <div class="header-column justify-content-end">
        
          <!-- Primary Navigation
          ============================================= -->
          <nav class="primary-menu navbar navbar-expand-lg">
            <div id="header-nav" class="collapse navbar-collapse" >
              <ul class="navbar-nav">
			  <li class="dropdown"> <a class="dropdown-toggle" href="#">Home</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="faq.php">Faq</a></li>
                    <li><a class="dropdown-item" href="support.php">Support</a></li>
                    <li><a class="dropdown-item" href="contact.php">Contact Us</a></li>
                  </ul>
                </li>
                <li class="login-signup ml-lg-2"><a class="pl-lg-4 pr-0"  href="signin.php" title="Login ">Login <span class="d-none d-lg-inline-block bg-primary"><i class="fa fa-user"></i></span></a></li>
              </ul>
            </div>
          </nav><!-- Primary Navigation end --> 
          
        </div>
        
        <!-- Collapse Button
        ============================================= -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav"> <span></span> <span></span> <span></span> </button>
      </div>
    </div>
  </header><!-- Header end -->