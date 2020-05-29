<?php 


include "check_if_logged_in.php";

require "../includes/db.php";


if($_POST) {	

  $orderId                      = clean($_POST['orderId']);
  $orderDate 					= date('Y-m-d', strtotime($_POST['orderDate']));
  $clientName 					= clean($_POST['customerName']);
  $clientContact 				= clean($_POST['customerContact']);
  $subTotalValue 				= clean($_POST['subTotalValue']);
  $vatValue 					= clean($_POST['vatValue']);
  $totalAmountValue             = clean($_POST['totalAmountValue']);
  $discount 					= clean($_POST['discount']);
  $grandTotalValue 			    = clean($_POST['grandTotalValue']);
  $paid 						= clean($_POST['paid']);
  $dueValue 					= clean($_POST['dueValue']);
  $paymentType 					= clean($_POST['paymentType']);
  $paymentStatus 				= clean($_POST['paymentStatus']);
  $paymentPlace 				= clean($_POST['paymentPlace']);
  $gstn 				        = clean($_POST['gstn']);
  $userid 				        = $_SESSION['client_id'];
				
	$sql = query("UPDATE orders SET order_date = '$orderDate', client_name = '$clientName', client_contact = '$clientContact', sub_total = '$subTotalValue', vat = '$vatValue', total_amount = '$totalAmountValue', discount = '$discount', grand_total = '$grandTotalValue', paid = '$paid', due = '$dueValue', payment_type = '$paymentType', payment_status = '$paymentStatus', order_status = 1 ,user_id = '$userid',payment_place = '$paymentPlace' , gstn = '$gstn' WHERE order_id = {$orderId}");

	 $sql1 = "INSERT INTO track_payments(client_name,amount_paid,balance,order_id) VALUES ('$clientName','$paid','$dueValue','$orderId') ";
            $payment_insert = query($sql1);	
	
	
	$readyToUpdateOrderItem = false;
	// add the quantity from the order item to product table
	for($x = 0; $x < count($_POST['product_name']); $x++) {		
		//  product table
		$updateProductQuantitySql = "SELECT products.quantity FROM products WHERE products.product_id = ".$_POST['product_name'][$x]."";
		$updateProductQuantityData = query($updateProductQuantitySql);			
			
		while ($updateProductQuantityResult = mysqli_fetch_array($updateProductQuantityData)) {
			// order item table add product quantity
			$orderItemTableSql = "SELECT order_item.quantityTaken FROM order_item WHERE order_item.order_id = {$orderId}";
			$orderItemResult = $connection->query($orderItemTableSql);
			$orderItemData = $orderItemResult->fetch_row();

			$editQuantity = $updateProductQuantityResult[0] + $orderItemData[0];							

			$updateQuantitySql = "UPDATE products SET quantity = '$editQuantity' WHERE product_id = ".$_POST['product_name'][$x]."";
			$connection->query($updateQuantitySql);		
		} // while	
		
		if(count($_POST['product_name']) == count($_POST['product_name'])) {
			$readyToUpdateOrderItem = true;			
		}
	} // /for quantity

	// remove the order item data from order item table
	for($x = 0; $x < count($_POST['product_name']); $x++) {			
		$removeOrderSql = "DELETE FROM order_item WHERE order_id = {$orderId}";
		$connection->query($removeOrderSql);	
	} // /for quantity

	if($readyToUpdateOrderItem) {
			// insert the order item data 
		for($x = 0; $x < count($_POST['product_name']); $x++) {			
			$updateProductQuantitySql = "SELECT products.quantity FROM products WHERE products.product_id = ".$_POST['product_name'][$x]."";
			$updateProductQuantityData = $connection->query($updateProductQuantitySql);
			
			while ($updateProductQuantityResult = $updateProductQuantityData->fetch_row()) {
				$updateQuantity[$x] = $updateProductQuantityResult[0] - $_POST['quantity'][$x];							
					// update product table
					$updateProductTable = "UPDATE products SET quantity = '".$updateQuantity[$x]."' WHERE product_id = ".$_POST['product_name'][$x]."";
					$connection->query($updateProductTable);

					// add into order_item
				$orderItemSql = "INSERT INTO order_item (order_id, product_id, quantityTaken,  total, order_item_status) 
				VALUES ({$orderId}, '".$_POST['product_name'][$x]."', '".$_POST['quantityTaken'][$x]."',  '".$_POST['totalRowPrice'][$x]."', 1)";

				$query = query($orderItemSql);		
			} // while	
		} // /for quantity
	}

	

	 if ($query) {
        $feed_back = array('status' => true, 'msg' => 'success');
    } else {
        $feed_back = array('status' => false, 'msg' => mysqli_error($connection));
    }

    $dataX = json_encode($feed_back);
    header('Content-Type: application/json');
    echo $dataX;

    $connection->close();

	;
 
} // /if $_POST
// echo json_encode($valid);







 ?>