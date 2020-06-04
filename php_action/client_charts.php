<?php


include "check_if_logged_in.php";

require "../includes/db.php";
header('Content-Type: application/json');


// $sql = "SELECT order_status, COUNT(order_status) AS total FROM orders GROUP BY order_status";
$sql = "SELECT order_id, order_date ,(SELECT COUNT(*) FROM customers WHERE customer_id = orders.customer_id) AS total,payment_status FROM orders WHERE client_id  = '{$_SESSION['client_id']}' AND DATE(order_date) BETWEEN '2020-05-1' AND '2020-06-12' GROUP BY order_id LIMIT 10";

//run sql query and store into variable
$result = query($sql);
$data = array();

foreach ($result as $row) {
 $data[] = $row;
}

//free memory and close db connection
$result->close();
$connection->close();

// IMPORTANT, output to json
echo json_encode($data);
















?>