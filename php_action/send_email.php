<?php    

include "check_if_logged_in.php";

require "../includes/db.php";

// inserting brands

if ($_REQUEST['t'] == 'true') {

$orderId = $_GET['id'];



$sql = "SELECT orders.order_date, orders.customer_id, orders.sub_total, orders.grand_total, orders.paid, orders.due, customers.customer_names,customers.contact,orders.invoice_number, orders.payment_type,customers.email_address  FROM orders INNER JOIN customers ON orders.customer_id = customers.customer_id WHERE orders.order_id = '$orderId' ";

$orderResult = mysqli_query($connection,$sql);
   while($orderData = mysqli_fetch_array($orderResult)){
       
        $orderDate      = $orderData[0];
        $customer_id    = $orderData[1];        
        $subTotal       = $orderData[2];       
        $grandTotal     = $orderData[3];
        $paid           = $orderData[4];
        $due            = $orderData[5];
        $customer_names = $orderData[6];
        $contact        = $orderData[7];
        $invoice_number = $orderData[8];
        $payment        = $orderData[9];
        $email          = $orderData[10];  

       }
       if($payment === 1){
        $paymentType = "AIRTEL MOBILE MONEY";
       }elseif($payment ===2){
       $paymentType ="CENTE MOBILE";
         $paymentType = "MTN MOBILE MONEY";
       }else{
       }
    

}




$orderItemSql = "SELECT order_item.product_id,  order_item.quantityTaken, order_item.total,
products.product_name FROM order_item
   INNER JOIN products ON order_item.product_id = products.product_id 
 WHERE order_item.order_id = $orderId";
$orderItemResult = $connection->query($orderItemSql);

   


     $emailT = ' <html><head><title>Order Invoice</title></head>

     <body style="background-color:#e2e1e0;font-family: Open Sans, sans-serif;font-size:100%;font-weight:400;line-height:1.4;color:#000;">
          <table style="width:800px;margin:50px auto 10px;background-color:#fff;padding:50px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);-moz-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24); border-top: solid 10px green;">
               <thead>
                    <tr>
                         <th style="text-align:left;"><img style="max-width: 150px;" src="" alt="online sales"></th>
                         <th style="text-align:right;font-weight:400;">05th Apr, 2017</th>
                    </tr>
               </thead>
               <tbody>
                    <tr>
                         <td style="height:25px;"></td>
                    </tr>
                    <tr>
                         <td colspan="2" style="border: solid 1px #ddd;text-align:center; padding:10px 20px;">
                              <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:150px">Order status</span><b style="color:green;font-weight:bold;margin:0">Success</b></p>
                              <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:146px">Transaction ID</span> '.$invoice_number.'</p>
                              <p style="font-size:14px;margin:0 0 0 0;"><span style="font-weight:bold;display:inline-block;min-width:146px">Order amount</span> UGX '.$grandTotal.'</p>
                         </td>
                    </tr>
                    <tr>
                         <td style="height:10px;"></td>
                    </tr>
                    <tr>
                         <td style="width:50%;padding:20px;vertical-align:top">
                              <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px">Name</span>'.$customer_names.'</p>
                              <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Email</span> '.$email.'</p>
                              <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Phone</span> '.$contact.'</p>

                         </td>
                         <td style="width:50%;padding:20px;vertical-align:top">
                              <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Address</span> Khudiram Pally, Malbazar, </p>

                              <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">ID No.</span> 2556-1259-9842</p>

                         </td>
                    </tr>


                    <tr>
                         <td colspan="2" style="font-size:20px;padding:5px 10px 0 10px;colot:red; text-align: center;">
                              <h5>Items</h5>
                         </td>
                    </tr>


                    <tr>
                         <td colspan="2" style="padding:10px 15px 0 10px;">

                              <table width="100%" style="text-align: left; font-size:16px;color:#666;border:1px solid #dddddd;padding:12px;font-family: arial, sans-serif;box-sizing: border-box;box-shadow: 0 0 10px #dddddd;">

                               <thead style="padding:15px !important;">                                        
                                        <tr>
                                             <th width="10%">No.</th>
                                             <th width="10%">Item Name</th>
                                             <th width="10%">Price</th>
                                             <th width="10%">Quantity</th>
                                             <th width="10%">Total</th>
                                        </tr>

                                       </thead>
                                       <tr>
                                         <td colspan="12">
                                           <hr>
                                         </td>
                                       </tr>
                                        
                                     <tbody>';


                                     $x = 1;
                                   
                                     
                                    $count = 1;
                                     while($row = mysqli_fetch_array($orderItemResult)) {  

                                       
         
                                    $emailT .= '  <tr style="border: 1px solid #dddddd;">
                                       <td width="10%">'.$count.'</td>
                                       <td width="10%">'.$row[3].'</td>
                                       <td width="10%">1000</td>
                                       <td width="10%">'.$row[1].'</td>
                                       <td width="10%">'.$row[2].'</td>
                                     </tr>
                                     <tr>
                                         <td colspan="12">
                                           <hr>
                                         </td>
                                       </tr>
                                        
                                    ';

                                    $count++;
                                    
                                } // /while
                       
                                    


                         $emailT .=' <tr style="border: 1px solid #dddddd;">
                                       <td width="10%"></td>
                                       <td width="10%"></td>
                                        <td width="10%"></td>
                                       <td width="10%">
                                           <span  style="font-weight: bold;">Sub Total</span>
                                       </td>                                     
                                       <td width="10%"><span style="font-weight: bold;font-size: 16px">UGX '.$subTotal.'</span></td>
                                     </tr>
                                     <tr style="text-align: right;">
                                         <td colspan="12">
                                           <hr>
                                         </td>
                                       </tr>
                                        
                                       <tr style="border: 1px solid #dddddd;">
                                       <td width="10%"></td>
                                       <td width="10%"></td>
                                        <td width="10%"></td>
                                       <td width="10%">
                                         <span  style="font-weight: 700;">Total</span>
                                       </td>
                                      
                                       <td width="10%"><span style="font-weight: bolder;font-size: 18px;color: red;">UGX '.$grandTotal.'</span></td>
                                     </tr>
                                  </tbody>

                              </table>
                         </td>
                    </tr>
               </tbody>
               <tfooter>
                    <tr>
                         <td colspan="2" style="font-size:14px;padding:30px 15px 0 15px;text-align:center;">
                              <strong style="display:block;margin:0 0 10px 0;">Regards</strong> Omega Sales<br> Wandegeya Kampala, Uganda<br><br>
                              <b>Phone:</b> +256 702499649<br>
                              <b>Email:</b> info@omega.co.ug
                         </td>
                    </tr>
               </tfooter>
          </table>
     </body>

</html>';
// $connection->close();


$sendEmail  = sendMail('jameskabengwa46@gmail.com','Omega  Invoice',$emailT);

if ($sendEmail) {
     $feed_back = array('status' => true, 'msg' => 'success');
 } else {
     $feed_back = array('status' => false, 'msg' => 'failed');
 }

$dataX = json_encode($feed_back);
header('Content-Type: application/json');
echo $dataX;



        
        
        ?>