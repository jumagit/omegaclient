<?php 	

include "check_if_logged_in.php";

require "../includes/db.php";

if ($_REQUEST['t'] == 'fetch') {


	$customer_id = clean($_POST['id']);

	$sql = "SELECT customer_id, customer_names, address, email_address, contact FROM customers WHERE customer_id = $customer_id";
	$result = query($sql);

	if(mysqli_num_rows($result) > 0) { 
	 $row = mysqli_fetch_array($result);
	} // if num_rows

	$connection->close();

    echo json_encode($row);

	
}