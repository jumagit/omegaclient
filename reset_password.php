

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

include 'includes/db.php';
#Include database connection details
$token = $_REQUEST['token'];

$sql = "SELECT * FROM password_resets WHERE reset_key='$token'";
$qry = query($sql);
if(mysqli_num_rows($qry) === 1)
{
    if(isset($_POST['reset']))
    {
        while($row = mysqli_fetch_array($qry))
        {
            $username = $row['username'];
        }

        $pass1 = $_POST['password'];
        $pass2 = $_POST['newPassword'];

        if($pass1 !== $pass2)
        {
            $feedback = "<div class='alert text-white bg-warning' role='alert'>
            Your Passwords don't Match
        </div>";
        }
        else
        {
            $password  = md5($pass1);

            $sql1 = "UPDATE clients set password = '$password' WHERE username = '$username'";
            if(!(query($sql1)))
            {
                $feedback = "<div class='alert text-white bg-danger' role='alert'>
                    ".mysqli_error()."
                </div>";
            }
            else
            {
                $updateSQL2 = "DELETE FROM password_resets WHERE reset_key='{$token}'";
                if(!(query($updateSQL2)))
                {
                    $feedback = "<div class='alert text-white bg-danger' role='alert'>
                    ".mysqli_error()."
                </div>";
                   
                }
                else
                {
                    $feedback= "<div class='alert text-white bg-success' role='alert'>
                    Password Successfully Changed, redirecting you shortly  <script type='text/javascript'>setTimeout(function() { window.location.href = '".URL."indexClient.php';}, 3000);</script>
                        </div>";
             
                }

            }
        }
    }
}
else
{
    die("<div style='color: #a94442;background-color: #f2dede;border-color: #ebccd1;border: 1px solid transparent;font-family:Consolas; width:60%; margin:auto;padding:15px 25px;text-align: center'><p>Oops, This password reset token is invalid or has expired. </p></div>");
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
                  <h4 class="alert-heading"> Update your Password!</h4>  
                        <p>Please you can now set your new password below !</p>
                    
                </div>

            <?php }?>

                    <div class="p-2">
                        

                        <form class="form-horizontal m-t-10" method="POST" action="">

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control"  name="password" id="password" placeholder="Enter Your Password">
                            </div>

                            <div class="form-group">
                                <label for="newPassword">Password</label>
                                <input type="password" class="form-control"  name="newPassword" id="newPassword" placeholder="Confirm Your Password">
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-12 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit" name="reset">Change password</button>
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