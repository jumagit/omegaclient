
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

        $sql = "SELECT * FROM users WHERE username = '$username'";

        $result = query($sql);

        if (mysqli_num_rows($result) == 1) {

            $hashed_password = md5($password);

            $mainSql = "SELECT * FROM users WHERE username = '$username' AND password = '$hashed_password'";

            $result2 = query($mainSql);

            if (mysqli_num_rows($result2) == 1) {

                while ($row = mysqli_fetch_array($result2)) {

                    $accountStatus = $row['account_status'];

                    session_regenerate_id();

                    $_SESSION['username'] = $row['username'];
                    $_SESSION['user_id'] = $row['user_id'];
                    $_SESSION['computerName'] = $computer;
                    $_SESSION['fullName'] = $row['sname'] . '' . $row['fname'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['accountType'] = $row['accountType'];
                    $_SESSION['mobile'] = $row['mobile'];
                    $_SESSION['gender'] = $row['gender'];

                    session_write_close();

                    if ($accountStatus = 1) {

                        if (writeLog("logged in from {$IP}", $_SESSION['username'], "SUCCESS")) {
                            $doLoginFeedback = "<div class='alert alert-success bg-success ' >                       
                         <p class='text-white '>  <strong> <i class='mdi mdi-checkbox-marked-circle-outline'></i> Credentials Accepted,  Signing you in ..............</p>
                        <script type='text/javascript'>setTimeout(function() { window.location.href = 'indexMain.php';}, 3000);</script>
                        </div>";
                        }

                    } else {

                        $doLoginFeedback = "<div class='alert alert-danger bg-danger message' >                       
                        <p class='text-white font-weight-bold'> <strong> <i class='mdi mdi-close-circle'></i> Sorry!</strong>, Check your Password or Username Used.</p>
                       <script type='text/javascript'>setTimeout(function() { window.location.href = 'login.php';}, 3000);</script>
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
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Online Trade</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
