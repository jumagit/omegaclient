
        <?php include"includes/header.php"; ?>
        <!-- Navigation Bar-->
       <?php include"includes/navigation.php"; ?>
        <!-- End Navigation Bar-->

        <!-- page wrapper start -->
        <div class="wrapper">
            <div class="page-title-box">
                <div class="container-fluid">

                <div class="row">
                <div class="col-sm-12 text-center">
                    

                    <h2 class="">Invoice </h2>
                    
                </div>
            </div>
                </div>
                <!-- end container-fluid -->
            
            </div>
            <!-- page-title-box -->
            <?php 





// inserting brands

            if (isset($_GET['id'])) {

            $orderId = base64_decode($_GET['id']);

            $sql = "SELECT order_date,customer_id, sub_total, grand_total, paid, due, invoice_number, payment_type  FROM orders WHERE order_id = $orderId";

            $orderResult = query($sql);
            while($orderData = mysqli_fetch_array($orderResult)){
            $orderDate = $orderData[0];
            $customer_id = $orderData[1]; 
            $subTotal = $orderData[2];
            $grandTotal = $orderData[3];
            $paid = $orderData[4];
            $due = $orderData[5];
            $invoice_number = $orderData[6];
            $payment_type = $orderData[7];

          }


          $sql2 = query("SELECT * FROM customers WHERE customer_id = $customer_id");

          while($c = mysqli_fetch_array($sql2)){ 
                $address           = $c['address'];
                $customer_names    = $c['customer_names'];
                $email             = $c['email_address'];
                $contact           = $c['contact'];
          }


            $orderItemSql = "SELECT order_item.product_id,  order_item.quantityTaken, order_item.total,
            products.product_name, products.price FROM order_item
               INNER JOIN products ON order_item.product_id = products.product_id 
             WHERE order_item.order_id = $orderId";
            $orderItemResult = query($orderItemSql);


            $count =0;







            ?>

            <div class="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card m-b-20">
                                <div class="card-body">
    
                                    <div class="row">
                                        <div class="col-9 m-auto">
                                            <div class="invoice-title">
                                                <h4 class="float-right font-16"><strong>Order : <span class="text-danger"> <?php echo $invoice_number; ?> </span></strong></h4>
                                                <h3 class="mt-0">
                                                    <img src="assets/images/logo.png" alt="logo" height="24"/>
                                                </h3>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                 <div class="col-6 text-left">
                                                    <address>
                                                        <strong>Shipped To:</strong><br>
                                                        Kenny Rigdon<br>
                                                        1234 Main<br>
                                                        Apt. 4B<br>
                                                        Springfield, ST 54321
                                                    </address>
                                                </div>
                                                <div class="col-6  text-right">
                                                    <address>
                                                        <strong>Billed To:</strong><br>
                                                        <?php echo $customer_names; ?><br>
                                                        <?php  echo $address; ?>
                                                    </address>
                                                </div>
                                               
                                            </div>
                                            <div class="row">
                                                <div class="col-6 m-t-30">
                                                    <address>
                                                        <strong>Payment Method:</strong><br>
                                                         <?php if($payment_type == 1) {?>
                                                        <p class="badge badge-danger">Airtel Mobile Money</p>
                                                         <?php }elseif($payment_type == 2) {?>

                                                          <p class="badge badge-info">MTN Mobile Money</p>
                                                         <?php }else{ ?>
                                                    <p class="badge badge-primary">Centenery Bank</p>

                                                         <?php } ?>
                                                    </address>
                                                </div>
                                                <div class="col-6 m-t-30 text-right">
                                                    <address>
                                                        <strong>Order Date:</strong><br>
                                                       <?php echo f_date($orderDate);  ?><br><br>
                                                    </address>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="row">
                                        <div class="col-9 m-auto">
                                            <div>
                                                <div class="p-2">
                                                    <h3 class="font-16 text-danger" ><strong>Order summary</strong></h3>
                                                </div>
                                                <div class="">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <td><strong>Item</strong></td>
                                                                <td class="text-center"><strong>Price</strong></td>
                                                                <td class="text-center"><strong>Quantity</strong>
                                                                </td>
                                                                <td class="text-right"><strong>Totals</strong></td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                                          <?php 
                                                          while($row = mysqli_fetch_array($orderItemResult)) {  ?>                                                                  
                                                          
                                                            <tr>
                                                                <td><?php echo $row[3];  ?></td>
                                                                <td class="text-center"><?php echo $row[4];  ?></td>
                                                                <td class="text-center"><?php echo $row[1];  ?></td>
                                                                <td class="text-right"><?php echo $row[2];  ?></td>
                                                            </tr>


                                                            <?php } ?>
                                                            
                                                            <tr>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line text-center">
                                                                    <strong>Subtotal</strong></td>
                                                                <td class="thick-line text-right">UGX <?php echo $subTotal;  ?></td>
                                                            </tr>
                                                          <!--   <tr>
                                                                <td class="no-line"></td>
                                                                <td class="no-line"></td>
                                                                <td class="no-line text-center">
                                                                    <strong>Shipping</strong></td>
                                                                <td class="no-line text-right">$15</td>
                                                            </tr> -->
                                                            <tr>
                                                                <td class="no-line"></td>
                                                                <td class="no-line"></td>
                                                                <td class="no-line text-center">
                                                                    <strong>Total</strong></td>
                                                                <td class="no-line text-right"><h4 class="m-0 text-danger">UGX <?php echo $grandTotal;  ?></h4></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
    
                                                    <div class="d-print-none">
                                                        <div class="float-right">
                                                        <!-- <button type="button"  class="btn btn-success waves-effect waves-light" onclick="printOrder(<?php echo $_GET['id']; ?>)"><i class="fa fa-print"></i></button> -->
                                                             <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="fa fa-print"></i> Print Receipt</a> 
                                                       
                                                           
                                                            <a href="#" class="btn btn-primary waves-effect waves-light">Send</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    
                                        </div>
                                    </div> <!-- end row -->
<?php  }  ?>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->  
                </div>
                <!-- end container-fluid -->
            </div>
            <!-- end page content-->

        </div>
        <!-- page wrapper end -->

        <!-- Footer -->
   <?php include "includes/footer.php"; ?>