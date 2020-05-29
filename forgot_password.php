<?php
#Turn on output buffering
ob_start();
#Get the ipconfig details using system command
system('ipconfig /all');

#Capture the output into a variable
$mycom=ob_get_contents();
#Clean (erase) the output buffer
ob_clean();

$findme = "Physical";
#Search the "Physical" | Find the position of Physical text
$pmac = strpos($mycom, $findme);

# Get Physical Address
#$comp=substr($mycom,($pmac+36),17);
#Display Mac Address
#echo '<h1 style="color: #ff0000;">'.$comp.'</h1>';
?>
<?php
#Start session
session_start();

#Include database connection details
if(isset($_POST['request']))
{
    include('includes/db.php');

    $username = $_POST['username'];
    $token = bin2hex(openssl_random_pseudo_bytes(16));

    $sql1 = "SELECT * FROM clients WHERE username = '$username'";
    $result = query($sql1);
    if(mysqli_num_rows($result) === 1)
    {
        while ($row = mysqli_fetch_array($result))
        {
            $email = $row['email'];
            $fullNames = $row['fullName'];
        }
        if(!empty($email))
        {
            $subject = "Password Reset Token";

            $body = "
            <p>&nbsp;</p>
            <p>Dear {$fullNames},</p>
            <p>This email was sent automatically by the OMEGA Stores in response to your request to reset your password.</p> 
            <p>To reset your password, either click  or copy and paste the next link into the address bar of web browser.</p>
            <p><a href='".URL."reset_password.php?token={$token}'>".URL."reset_password.php?token={$token}</a></p>
            <p>If you didn't initiate this password reset request, please ignore this email. Your password won't be changed.</p>
            <p>&nbsp;</p>
            <p>Thank you</p>
            <p><small>Please don't reply this email !</small></p>
            <p>&nbsp;</p>";


            $SQL2 = "SELECT * FROM password_resets WHERE username='{$username}'";
            $query = query($SQL2);
            if((mysqli_num_rows($query) === 1))
            {
                $deleteKey3 = "DELETE FROM password_resets WHERE username='{$username}'";
                if(!(query($deleteKey3)))
                {
                    die(mysqli_error());
                }
                else
                {
                    $SQL3 = "INSERT INTO password_resets(reset_key,username)VALUES('$token','$username')";
                    if(!query($SQL3))
                    {
                        die(mysqli_error());
                    }
                    else
                    {
                        $mail =  sendMailFront($email,$subject,$body);
                        if(!$mail) // Dont forget to add "!" condition
                        {
                            $feedback = 'Failed';
                        }
                        else
                        {
                            $feedback = "Your password request was successful. Please check your email <strong>{$email}</strong>, for further instructions";
                        }
                    }
                }
            }
            else
            {
                $SQL3 = "INSERT INTO password_resets(reset_key,username)VALUES('{$token}','{$username}')";
                if(!query($SQL3))
                {
                    die(mysqli_error());
                }
                else
                {
                   $mail =  sendMailFront($email,$subject,$body);
                    if(!$mail) // Dont forget to add "!" condition
                    {
                        $feedback = "Fail";
                    }
                    else
                    {
                        $feedback = "Your password request was successful. Please check your email <strong>{$email}</strong>, for further instructions";
                    }
                }
            }
        }
        else
        {
            die("<div style='color: #a94442;background-color: #f2dede;border-color: #ebccd1;border: 1px solid transparent;font-family:Century Gothic; width:60%; margin:auto;padding:15px 25px;'><p><strong>ERROR: </strong></p><p>Sorry {$fullNames},</p> <p>We failed to send you a password reset link because your account has no defined Contact Email.</p> <p>Please contact the system administrator for a manual password reset !</p></div>");
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

        <!-- Background -->
        <div class="account-pages"></div>

        <!-- Begin page -->
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center m-0">
                        <a href="index.html" class="logo logo-admin"><img src="assets/images/logo.png" height="30" alt="logo"></a>
                    </h3>
                    <?php if(isset($feedback))
                     {?>
                
                <div class="alert alert-info" role="alert">
                  <h4 class="alert-heading">Password Reset Request Successful !</h4>
                  <p><?php echo $feedback; ?></p>
                </div>

            <?php }else{?>
                <div class="alert alert-info" role="alert">
                  <h4 class="alert-heading">Don't Worry!</h4>
                  <p>Everyone forgets their password now and then. Just type the username you use for login and we will send you the reset link to your email address we have on file.</p>
                </div>

            <?php }?>

                    <div class="p-3">
                        <h4 class="text-muted font-18 mb-3 text-center">Reset Password</h4>
                        <div class="alert text-white bg-info" role="alert">
                            We'll send password reset link to your email.!
                        </div>

                        <form class="form-horizontal m-t-30" method="POST" action="">

                            <div class="form-group">
                                <label for="username">username</label>
                                <input type="text" class="form-control"  name="username" id="username" placeholder="Enter Your Username">
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-12 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit" name="request">Request Reset Link</button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="text-white">Remember It ? <a href="login.php" class="text-white btn btn-danger"> Sign In Here </a> </p>
                <p class="text-white"> © <?php echo date('Y');?> Copyright Reserved to Omega Sales</p>
            </div>

        </div>

        <!-- END wrapper -->

        <!-- jQuery  -->
  <?php  include"includes/front/footer.php"; ?>