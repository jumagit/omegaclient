<?php

include "check_if_logged_in.php";

require "../includes/db.php";


if ($_REQUEST['t'] == 'true') {



$orderId = clean($_POST['orderId']);

$valid = array('order' => array(), 'order_item' => array());

$sql = "SELECT orders.order_id, orders.order_date, orders.client_name, orders.client_contact, orders.sub_total, orders.vat, orders.total_amount, orders.discount, orders.grand_total, orders.paid, orders.due, orders.payment_type, orders.payment_status FROM orders 	
	WHERE orders.order_id = {$orderId}";

$result = query($sql);
$data = $result->fetch_row();
$valid['order'] = $data;


$connection->close();

echo json_encode($valid);

}


