<?php

include "check_if_logged_in.php";

require "../includes/db.php";

// inserting brands

if ($_REQUEST['t'] == 'true') {

    if (isset($_SESSION['fullName'])) {
        $created_by = $_SESSION['fullName'];
    }

   
    $clientID = clean($_POST['pic_client_id']);
    $type = explode('.', $_FILES['ProfileImage']['name']);
    $type = $type[count($type) - 1];
    $url = '../assets/images/users/' . uniqid(rand()) . '.' . $type;


    if (in_array($type, array('gif', 'jpg', 'jpeg', 'png', 'JPG', 'GIF', 'JPEG', 'PNG'))) {
        if (is_uploaded_file($_FILES['ProfileImage']['tmp_name'])) {
            if (move_uploaded_file($_FILES['ProfileImage']['tmp_name'], $url)) {

          $sql = "UPDATE clients SET profileImage = '$url' WHERE client_id = '$clientID' ";

                $query = query($sql);
                if ($query) {
                    $feed_back = array('status' => true, 'msg' => 'success');
                } else {
                    $feed_back = array('status' => false, 'msg' => mysqli_error($connection));
                }



            } else {
                return false;
            } // /else
        } // if
    } // if in_array



   
    $dataX = json_encode($feed_back);
    header('Content-Type: application/json');
    echo $dataX;

    $connection->close();

    
}
