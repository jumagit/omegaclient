<?php


include "check_if_logged_in.php";

require "../includes/db.php";
header('Content-Type: application/json');



$sql = "SELECT DAY(order_date) AS day, COUNT(*) as total FROM orders WHERE client_id  = '{$_SESSION['client_id']}' AND order_date BETWEEN '2020-05-1' AND '2020-06-12' GROUP BY DAY(order_date) LIMIT 10";



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