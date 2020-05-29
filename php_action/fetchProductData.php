<?php

include "check_if_logged_in.php";

require "../includes/db.php";


if ($_REQUEST['t'] == 'true') {

$sql = "SELECT product_id, product_name FROM products WHERE status > 0 AND active > 0";
$result = $connection->query($sql);


$data = $result->fetch_all();

$connection->close();

echo json_encode($data);

}


