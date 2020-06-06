<?php

include "check_if_logged_in.php";

require "../includes/db.php";

// inserting brands

if ($_REQUEST['t'] == 'true') {

    if (isset($_SESSION['fullName'])) {
        $created_by = $_SESSION['fullName'];
        $client_id = $_SESSION['client_id'];
    }

    $categoriesName = $_POST['categoriesName'];
    $categoriesStatus = $_POST['categoriesStatus'];


    $sql_select = query("SELECT categories_name FROM categories WHERE categories_name = '".$categoriesName."'") or die(mysqli_error($connection));


    $count = mysqli_num_rows($sql_select);


    if($count == 0)
    {
    $sql = "INSERT INTO categories (categories_name, categories_active, categories_status,created_by,client_id)
	VALUES ('$categoriesName', '$categoriesStatus', '1','$created_by','$client_id')";

    $query = query($sql)or die(mysqli_error($connection));

    if ($query) {
        $feed_back = array('status' => true, 'msg' => 'success');
    } else {
        $feed_back = array('status' => false, 'msg' => mysqli_error($connection));
    }

   }else{

    $feed_back = array('status' => false , 'msg'=>  "Category ".strtoupper($categoriesName)."  already present in the table");


}

  

    $dataX = json_encode($feed_back);
    header('Content-Type: application/json');
    echo $dataX;

    $connection->close();

} // /if $_POST



if ($_REQUEST['t'] == 'delete') {
    $id = $_GET['id'];
    $query = query("DELETE FROM categories WHERE categories_id='{$id}'");

    $products =query("DELETE FROM products WHERE categories_id = '{$id}' ");
    if ($query && $products) {
        $feed_back = array('status' => true, 'msg' => 'success');
    } else {
        $feed_back = array('status' => false, 'msg' => mysqli_error($connection));
    }
    $dataX = json_encode($feed_back);
    header('Content-Type: application/json');
    echo $dataX;
}
