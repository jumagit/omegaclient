<?php 	

include "check_if_logged_in.php";

require "../includes/db.php";

$productId = clean($_POST['productId']);

$sql = "SELECT product_id, product_name, product_image, categories_id, quantity, price,  status FROM products WHERE product_id = $productId";
$result = $connection->query($sql);

if($result->num_rows > 0) { 
 $row = $result->fetch_array();
} // if num_rows

$connection->close();

echo json_encode($row);