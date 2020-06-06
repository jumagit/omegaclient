<?php


include "check_if_logged_in.php";

require "../includes/db.php";
header('Content-Type: application/json');



$sql = "SELECT DATE(created_at) AS day, COUNT(*) as total FROM customers WHERE client_id  = '{$_SESSION['client_id']}' AND created_at BETWEEN '2020-05-1' AND '2020-06-12' GROUP BY DATE(created_at) LIMIT 10";



// $sql = "SELECT order_id, order_date ,(SELECT COUNT(*) FROM customers ) AS total,payment_status FROM orders WHERE client_id  = '{$_SESSION['client_id']}' AND DATE(order_date) BETWEEN '2020-05-1' AND '2020-06-12' GROUP BY created_at LIMIT 10";

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