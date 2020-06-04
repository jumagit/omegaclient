<?php

include "check_if_logged_in.php";



require "../includes/db.php";

// inserting brands

if ($_REQUEST['t'] == 'true') {

    if (isset($_SESSION['fullName'])) {
        $created_by = $_SESSION['fullName'];
        $client_id = $_SESSION['client_id'];
    }

    $invoice_number =   generate_invoice_number();
    $address = clean($_POST['address']);
    $customerEmail = clean($_POST['emailAddress']);
   // $orderDate = now();
    $orderDate = date('Y-m-d');
    $clientName = clean($_POST['customerName']);
    $clientContact = clean($_POST['customerContact']);
    $subTotalValue = clean($_POST['subTotalValue']);  
    $grandTotalValue = clean($_POST['grandTotalValue']);
    $paid = clean($_POST['paid']);
    $dueValue = clean($_POST['dueValue']);
    $paymentType = clean($_POST['paymentType']);
    $paymentStatus = clean($_POST['paymentStatus']);

    if($paymentStatus == 1 OR $paymentStatus == 2){

        $orderStatus = 0;

    }else{

        $orderStatus = 1;
    }
   
    $client_id = $_SESSION['client_id'];
          //inserting into customers


    $order_present = query("SELECT paid FROM orders WHERE paid ='$paid' ");


    if(mysqli_num_rows($order_present) > 0 ) {

        $feed_back = array('status' => false, 'msg' =>' Order with "'.$invoice_number.'" exist already');


    }else{   


        $select_customer = "SELECT customer_id FROM customers WHERE email_address = '$customerEmail' ";

        $customer_find = query($select_customer) or die(mysqli_error($connection));


        if(mysqli_num_rows($customer_find) > 0){

            while ($r = mysqli_fetch_array($customer_find)) {
                $customer_id = $r[0];
            }  

        }else{

             $sql3 = "INSERT INTO customers (address, customer_names, contact, email_address, client_id) VALUES ( '$address', '$clientName', '$clientContact', '$customerEmail', '$client_id')"; 
                $sql3 = query($sql3);
                $customer_id = mysqli_insert_id($connection); 
          
        }

             
        //orders     
    $sql = "INSERT INTO orders (order_date,invoice_number, customer_id, sub_total, grand_total, paid, due, payment_type, payment_status,order_status,client_id)
	VALUES ('$orderDate', '$invoice_number','$customer_id', '$subTotalValue','$grandTotalValue', '$paid', '$dueValue', $paymentType, $paymentStatus,$orderStatus,$client_id)";

    $order_id;
    $orderStatus = false;
    if ($connection->query($sql) === true) {
        $order_id = $connection->insert_id;
        $valid['order_id'] = $order_id;

        $orderStatus = true;
    }


    //inserting into payments table 

      $sql1 = "INSERT INTO track_payments (client_name, amount_paid, balance, order_id) VALUES ('$clientName','$paid','$dueValue','$order_id')";
    $sql1 = query($sql1);

  
     writeLog("Made an order with Invoice Number {$invoice_number}", $_SESSION['username'], "SUCCESS");
  
    // echo clean(clean($_POST['productName'];
    $orderItemStatus = false;

    for ($x = 0; $x < count($_POST['product_name']); $x++) {
        $updateProductQuantitySql = "SELECT products.quantity,products.total_sales FROM products
		 WHERE products.product_id = " . $_POST['product_name'][$x] . "  ";
        $updateProductQuantityData = $connection->query($updateProductQuantitySql);

        while ($updateProductQuantityResult = mysqli_fetch_array($updateProductQuantityData)) {
            $updateQuantity[$x] = $updateProductQuantityResult[0] - $_POST['quantityTaken'][$x];
            $totalProductsSoldSofar[$x] =  $updateProductQuantityResult[1] + $_POST['quantityTaken'][$x];
            // update product table
            $updateProductTable = "UPDATE products SET quantity = '" . $updateQuantity[$x] . "', total_sales ='".$totalProductsSoldSofar[$x]."' WHERE product_id = " . $_POST['product_name'][$x] . "";
            $connection->query($updateProductTable);

            $totalPerProduct =  (int)$_POST['quantityTaken'][$x] * (float)$_POST['price'][$x];

            //echo $totalPerProduct;

            // add into order_item
            $orderItemSql = "INSERT INTO order_item (order_id, product_id, quantityTaken ,total, order_item_status)
				VALUES ('$order_id', '" . $_POST['product_name'][$x] . "', '" . $_POST['quantityTaken'][$x] . "', $totalPerProduct,1)";

            $query = query($orderItemSql);

            //out stock records


            if ($x == count($_POST['product_name'])) {
                $orderItemStatus = true;
            }
        } // while
    } // /for quantity

    if ($sql1) {
        
       
        $feed_back = array('status' => true, 'msg' => 'success');
     
    } else {
        $feed_back = array('status' => false, 'msg' => mysqli_error($connection));
    }
}

    $dataX = json_encode($feed_back);
    header('Content-Type: application/json');
    echo $dataX;







    $connection->close();



}
