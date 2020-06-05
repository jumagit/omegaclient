<?php 


include "check_if_logged_in.php";

require "../includes/db.php";


if($_POST) {	

  $orderId                      = clean($_POST['orderId']); 
  $customer_id                  = clean($_POST['customer_id']);  
  $subTotalValue 				= clean($_POST['subTotalValue']);   
  $grandTotalValue 			    = clean($_POST['grandTotalValue']);
  $paid 						= clean($_POST['paid']);
  $dueValue 					= clean($_POST['dueValue']);
  $paymentType 					= clean($_POST['paymentType']);
  $paymentStatus 				= clean($_POST['paymentStatus']);
  $client_id 				    = $_SESSION['client_id'];
  $customer_names               = clean($_POST['customerName']);
  $contact                      = clean($_POST['customerContact']);
  $address                      = clean($_POST['address']);  
  $email_address                = clean($_POST['emailAddress']); 


    //customer edit 

  $customer_edit  = query(" UPDATE customers SET address = '$address', customer_names = '$customer_names', contact = '$contact',  email_address = '$email_address' WHERE customer_id = '$customer_id' ");
			

 // order edit	
	$sql = query("UPDATE orders SET  customer_id = '$customer_id', sub_total = '$subTotalValue',  grand_total = '$grandTotalValue', paid = '$paid', due = '$dueValue', payment_type = '$paymentType', payment_status = '$paymentStatus', order_status = 1 ,client_id = '$client_id', WHERE order_id = '$orderId' ");

//payment track edit
	  $payment_insert = query("UPDATE  track_payments SET client_name='$customer_names',amount_paid='$paid', balance='$dueValue', WHERE order_id ='$orderId' ");          
	
//removing from orders -items
	
	// remove the order item data from order item table
	for($x = 0; $x < count($_POST['product_name']); $x++) {			
		$removeOrderSql = "DELETE FROM order_item WHERE order_id = '$orderId' ";
		query($removeOrderSql);	
	} // /for quantity

	
	// insert the order item data 
		for($x = 0; $x < count($_POST['product_name']); $x++) {			
			$updateProductQuantitySql = "SELECT * FROM products WHERE product_id = ".$_POST['product_name'][$x]."";
			$updateProductQuantityData = query($updateProductQuantitySql);
			
			while ($updateProductQuantityResult = mysqli_fetch_array($updateProductQuantityData)) {

				$updateQuantity[$x] = $updateProductQuantityResult['quantity'] - $_POST['quantityTaken'][$x];	
				 $totalProductsSoldSofar[$x] =  $updateProductQuantityResult['total_sales'] + $_POST['quantityTaken'][$x];						
					// update product table
					$updateProductTable = "UPDATE products SET quantity = '".$updateQuantity[$x]."', total_sales ='".$totalProductsSoldSofar[$x]."' WHERE product_id = ".$_POST['product_name'][$x]."";
					query($updateProductTable);

			// add into order_item
				$orderItemSql = "INSERT INTO order_item (order_id, product_id, quantityTaken,  total, order_item_status) 
				VALUES ({$orderId}, '".$_POST['product_name'][$x]."', '".$_POST['quantityTaken'][$x]."',  '".$_POST['totalRowPrice'][$x]."', 1)";

				$query = query($orderItemSql);		
			} // while	
		} // /for quantity
	

	

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
 
} 





 ?>