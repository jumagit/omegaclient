<?php

include "check_if_logged_in.php";

require "../includes/db.php";

// inserting brands

if ($_REQUEST['t'] == 'true') {

    if (isset($_SESSION['fullName'])) {
        $created_by = $_SESSION['fullName'];
    }

    $fullName = clean($_POST['fullName']);
    $username = clean($_POST['username']);
    $location = clean($_POST['location']);
    $mobile = clean($_POST['mobile']);
    $email = clean($_POST['email']);
    $password = generatePassword();
    $newpass =  md5($password);

    $sql = "INSERT INTO clients (fullName,email,mobile,location,username,password,cpassword,created_by)
     VALUES ('$fullName', '$email', '$mobile', '$location', '$username', '$newpass','$password', '$created_by')";

    $query = query($sql);

    //create clients 


    $client_body_body_message= '  <html>

    <body style="background-color:#e2e1e0;font-family: Open Sans, sans-serif;font-size:100%;font-weight:400;line-height:1.4;color:#000;">
         <table style="width:800px;margin:50px auto 10px;background-color:#fff;padding:50px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);-moz-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24); border-top: solid 10px green;">
              <thead>
                   <tr>
                        <th style="text-align:left;">
                             <img style="max-width: 150px;" src="https://www.bachanatours.in/book/img/logo.png" alt="online sales">
                        </th>


                        <th style="text-align:center;font-weight:400;">05th Apr, 2017</th>
                   </tr>
              </thead>
              <tbody>
                   <tr>
                        <td style="height:25px;"></td>
                   </tr>
                   <tr>
                        <td colspan="2" style="border: solid 1px #ddd;text-align:center; margin:0px auto;padding:10px 20px;">
                             <p style="font-size:18px;margin:0 0 10px 0;">

                                  <span style="font-weight:bold;display:inline-block;min-width:150px">Account Creation :</span>

                                  <b style="color:lime;font-weight:bold;margin:0">Success</b></p>

                        </td>
                   </tr>
                   <tr>
                        <td style="height:10px;"></td>
                   </tr>
                   <tr>
                        <td style="width:100%;padding:20px;vertical-align:top;text-align: center;">
                             <p style="margin:0 0 10px 0;padding:0;font-size:15px;">
                                  Hello  <span style="font-weight:bold;">'.$fullName.'</span>, Your Account Has been Successifully Created and below are your Login Credentials.
                             </p>


                        </td>

                   </tr>


                   <tr>
                        <td colspan="2" style="font-size:20px;padding:10px 10px 0 10px; text-align: center;">
                             <h5>Login Credentials</h5>
                        </td>
                   </tr>


                   <tr>
                        <td colspan="2" style="padding:10px 15px 0 10px;">

                             <table width="100%" style="text-align: center; font-size:16px;color:#666;border:1px solid #dddddd;padding:12px;font-family: arial, sans-serif;box-sizing: border-box;box-shadow: 0 0 10px #dddddd;">

                                  <thead style="padding:15px !important;">
                                       <tr>

                                            <th width="50%">Username</th>
                                            <th width="50%">Password</th>

                                       </tr>

                                  </thead>
                                  <tr>
                                       <td colspan="12">
                                            <hr>
                                       </td>
                                  </tr>

                                  <tbody>

                                       <tr style="border: 1px solid #dddddd;">
                                            <td width="50%"> <b style="color:red;font-weight:bold;margin:0">'.$username.'</b></td>
                                            <td width="50%"> <b style="color:red;font-weight:bold;margin:0">'.$password.'</b></td>

                                       </tr>
                                       <tr>
                                            <td colspan="12">
                                                 <hr>
                                            </td>
                                       </tr>


                                  </tbody>

                             </table>


                        </td>


                        <td colspan="2">
                        <tr style="border: 1px solid #dddddd;padding-top: 30px; text-align: center;">
                        <td width="100%">
                         <b style="color:#666;font-weight:bold;margin:0">You can now login via this link >>
                          <a style="padding-left: 4%;display:inline; text-align:right;color: blue;" href="http://localhost/newtrade/signin.php">Continue to login here</a>
                        </b>
                        </td>


                   </tr>
                   </td>
                   </tr>
              </tbody>
              <tfooter>
                   <tr>
                        <td colspan="2" style="font-size:14px;padding:30px 15px 0 15px;text-align: center;">
                             <strong style="display:block;margin:0 0 10px 0;">Regards</strong> Omaga Sales<br> Plot 47, Kampala Opposite Wandeya Southern Wing Market<br><br>
                             <b>Phone:</b> +256 702 396484<br>
                             <b>Email:</b> contact@omega.in
                        </td>
                   </tr>
              </tfooter>
         </table>
    </body>

</html>
    
    
    
                              ';




   $account =  sendMail('mukoovajumag8@gmail.com','Account Creation',$client_body_body_message);

    if ($query && $account) {
        $feed_back = array('status' => true, 'msg' => 'success');
    } else {
        $feed_back = array('status' => false, 'msg' => mysqli_error($connection));
    }

    $dataX = json_encode($feed_back);
    header('Content-Type: application/json');
    echo $dataX;

    $connection->close();

}

if ($_REQUEST['t'] == 'delete') {
    $id = $_GET['id'];
    $query = query("DELETE FROM clients WHERE client_id='{$id}'");
    if ($query) {
        $feed_back = array('status' => true, 'msg' => 'success');
    } else {
        $feed_back = array('status' => false, 'msg' => mysqli_error($connection));
    }
    $dataX = json_encode($feed_back);
    header('Content-Type: application/json');
    echo $dataX;
}


if ($_REQUEST['t'] == 'available') {
    $id = $_GET['id'];
    $query = query("UPDATE  brands  SET brand_status = '1' WHERE brand_id='{$id}'");
    if ($query) {
        $feed_back = array('status' => true, 'msg' => 'success');
    } else {
        $feed_back = array('status' => false, 'msg' => mysqli_error($connection));
    }
    $dataX = json_encode($feed_back);
    header('Content-Type: application/json');
    echo $dataX;
}



if ($_REQUEST['t'] == 'notavailable') {
    $id = $_GET['id'];
    $query = query("UPDATE  brands  SET brand_status = '0' WHERE brand_id='{$id}'");
    if ($query) {
        $feed_back = array('status' => true, 'msg' => 'success');
    } else {
        $feed_back = array('status' => false, 'msg' => mysqli_error($connection));
    }
    $dataX = json_encode($feed_back);
    header('Content-Type: application/json');
    echo $dataX;
}