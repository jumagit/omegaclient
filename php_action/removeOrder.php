<?php

include "check_if_logged_in.php";

require "../includes/db.php";

if ($_REQUEST['t'] == 'delete') {
    $id = $_GET['id'];

if ($id) {

    $sql = "UPDATE orders SET order_status = 2 WHERE order_id = {$id}";

    $orderItem = "UPDATE order_item SET order_item_status = 2 WHERE  order_id = {$id}";

    if (query($sql) === true && query($orderItem) === true) {
        $feed_back = array('status' => true, 'msg' => 'success');
    } else {
        $feed_back = array('status' => false, 'msg' => mysqli_error($connection));
    }
    $dataX = json_encode($feed_back);
    header('Content-Type: application/json');
    echo $dataX;
    $connection->close();

} 

}// /if $_POST
