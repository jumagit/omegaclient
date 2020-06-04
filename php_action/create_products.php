<?php

include "check_if_logged_in.php";

require "../includes/db.php";

// inserting products

if ($_REQUEST['t'] == 'true') {

    if (isset($_SESSION['fullName'])) {
        $created_by = $_SESSION['fullName'];
        $client_id = $_SESSION['client_id'];
    }

    $productName = clean($_POST['productName']);    
    $quantity = clean($_POST['quantity']);
    
    $price = money(clean($_POST['price']));
    
    $categoryName = clean($_POST['categoryName']);
    $productStatus = clean($_POST['productStatus']);

    $type = explode('.', $_FILES['productImage']['name']);
    $type = $type[count($type) - 1];
    $url = '../assets/images/stock/' . uniqid(rand()) . '.' . $type;


     $sql_select = query("SELECT product_name, price FROM products WHERE product_name = '".$productName."'") or die(mysqli_error($connection));


    $count = mysqli_num_rows($sql_select);


    if($count == 0)
    {



    if (in_array($type, array('gif', 'jpg', 'jpeg', 'png', 'JPG', 'GIF', 'JPEG', 'PNG'))) {
        if (is_uploaded_file($_FILES['productImage']['tmp_name'])) {
            if (move_uploaded_file($_FILES['productImage']['tmp_name'], $url)) {

                $sql = "INSERT INTO products (product_name, product_image, categories_id, quantity,price, active, status, created_by,client_id)
				VALUES ('$productName', '$url',  '$categoryName', '$quantity', '$price',  '$productStatus', 1, '$created_by','$client_id')";
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



                  }else{

                    $feed_back = array('status' => false , 'msg'=>  "Product ".strtoupper($productName)."  already present in the system");


                }



                
                $dataX = json_encode($feed_back);
                header('Content-Type: application/json');
                echo $dataX;



    $connection->close();

}



if ($_REQUEST['t'] == 'delete') {
    $id = $_GET['id'];
    $query = query("DELETE FROM products WHERE product_id='{$id}'");
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
    $query = query("UPDATE  products  SET status = 1 WHERE product_id='{$id}'");
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
    $query = query("UPDATE  products  SET status = 0 WHERE product_id='{$id}'");
    if ($query) {
        $feed_back = array('status' => true, 'msg' => 'success');
    } else {
        $feed_back = array('status' => false, 'msg' => mysqli_error($connection));
    }
    $dataX = json_encode($feed_back);
    header('Content-Type: application/json');
    echo $dataX;
}
