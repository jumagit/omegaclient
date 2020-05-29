
        <?php include"includes/header.php"; ?>
        <!-- Navigation Bar-->
       <?php include"includes/navigation.php"; ?>
        <!-- End Navigation Bar-->

        <!-- page wrapper start -->
        <div class="wrapper">
            <div class="page-title-box">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="state-information d-none d-sm-block">
                                <div class="state-graph">
                                    <div id="header-chart-1"></div>
                                    <div class="info">Balance $ 2,317</div>
                                </div>
                                <div class="state-graph">
                                    <div id="header-chart-2"></div>
                                    <div class="info">Item Sold 1230</div>
                                </div>
                            </div>
                            
                            <h4 class="page-title">Invoice</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Agroxa</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                <li class="breadcrumb-item active">Invoice</li>
                            </ol>

                        </div>
                    </div>
                </div>
                <!-- end container-fluid -->
            
            </div>
            <!-- page-title-box -->
            <?php 





// inserting brands

if (isset($_GET['id'])) {

$orderId = $_GET['id'];

$sql = "SELECT order_date, client_name, client_contact, sub_total, vat, total_amount, discount, grand_total, paid, due, payment_place,gstn FROM orders WHERE order_id = $orderId";

$orderResult = $connection->query($sql);
$orderData = $orderResult->fetch_array();

$orderDate = $orderData[0];
$clientName = $orderData[1];
$clientContact = $orderData[2]; 
$subTotal = $orderData[3];
$vat = $orderData[4];
$totalAmount = $orderData[5]; 
$discount = $orderData[6];
$grandTotal = $orderData[7];
$paid = $orderData[8];
$due = $orderData[9];
$payment_place = $orderData[10];
$gstn = $orderData[11];


$orderItemSql = "SELECT order_item.product_id,  order_item.quantityTaken, order_item.total,
products.product_name, products.price FROM order_item
   INNER JOIN products ON order_item.product_id = products.product_id 
 WHERE order_item.order_id = $orderId";
$orderItemResult = $connection->query($orderItemSql);
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
                                                <h4 class="float-right font-16"><strong>Order # <span class="text-danger"> 12345 </span></strong></h4>
                                                <h3 class="mt-0">
                                                    <img src="assets/images/logo.png" alt="logo" height="24"/>
                                                </h3>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-6">
                                                    <address>
                                                        <strong>Billed To:</strong><br>
                                                        <?php echo $clientName; ?><br>
                                                        <?php 

                                                        if($payment_place == 1){
                                                            echo "Ugandan";
                                                        }else {
                                                            echo "Non Ugandan";
                                                        }
                                                        
                                                        ?><br>
                                                        Apt. 4B<br>
                                                        Springfield, ST 54321
                                                    </address>
                                                </div>
                                                <div class="col-6 text-right">
                                                    <address>
                                                        <strong>Shipped To:</strong><br>
                                                        Kenny Rigdon<br>
                                                        1234 Main<br>
                                                        Apt. 4B<br>
                                                        Springfield, ST 54321
                                                    </address>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 m-t-30">
                                                    <address>
                                                        <strong>Payment Method:</strong><br>
                                                        Visa ending **** 4242<br>
                                                        jsmith@email.com
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
                                                          while($row = $orderItemResult->fetch_array()) {  ?>                                                                  
                                                          
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
                                                            <tr>
                                                                <td class="no-line"></td>
                                                                <td class="no-line"></td>
                                                                <td class="no-line text-center">
                                                                    <strong>Shipping</strong></td>
                                                                <td class="no-line text-right">$15</td>
                                                            </tr>
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