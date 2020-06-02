<?php

include "check_if_logged_in.php";

require "../includes/db.php";

// inserting brands

if ($_REQUEST['t'] == 'true') {

    if (isset($_SESSION['fullName'])) {
        $created_by = $_SESSION['fullName'];
        $client_id = $_SESSION['client_id'];
    }

    $customer_names = clean($_POST['customer_names']);
    $contact = clean($_POST['contact']);
    $address = clean($_POST['address']);                   
    $email_address = clean($_POST['email_address']); 

    $sql_select = query("SELECT customer_names, address, contact FROM customers WHERE customer_names = '$customer_names' OR address = '$address' OR contact = '$contact' ") or die(mysqli_error($connection));


    $count = mysqli_num_rows($sql_select);


    if($count == 0)
    {

                           
    $insert_query = "INSERT INTO customers(address, customer_names, contact, email_address, client_id) VALUES ('$address', '$customer_names', '$contact', '$email_address', '$client_id')";
   

    $query = query($insert_query)or die(mysqli_error($connection));

    if ($query) {
        $feed_back = array('status' => true, 'msg' => 'success');
    } else {
        $feed_back = array('status' => false, 'msg' => mysqli_error($connection));
    }

   }else{

    $feed_back = array('status' => false , 'msg'=>  "Customer ".strtoupper($customer_names)."  already present in the System");


}

  

    $dataX = json_encode($feed_back);
    header('Content-Type: application/json');
    echo $dataX;

    $connection->close();

} // /if $_POST
