<?php    

include "check_if_logged_in.php";

require "../includes/db.php";

// inserting brands

if ($_REQUEST['t'] == 'true') {

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
products.product_name FROM order_item
   INNER JOIN products ON order_item.product_id = products.product_id 
 WHERE order_item.order_id = $orderId";
$orderItemResult = $connection->query($orderItemSql);

   


     $emailT = ' <html><head><title>Order Invoice</title></head>

     <body style="background-color:#e2e1e0;font-family: Open Sans, sans-serif;font-size:100%;font-weight:400;line-height:1.4;color:#000;">
          <table style="width:800px;margin:50px auto 10px;background-color:#fff;padding:50px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);-moz-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24); border-top: solid 10px green;">
               <thead>
                    <tr>
                         <th style="text-align:left;"><img style="max-width: 150px;" src="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" alt="online sales"></th>
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
                              <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:146px">Transaction ID</span> abcd1234567890</p>
                              <p style="font-size:14px;margin:0 0 0 0;"><span style="font-weight:bold;display:inline-block;min-width:146px">Order amount</span> UGX '.$grandTotal.'</p>
                         </td>
                    </tr>
                    <tr>
                         <td style="height:10px;"></td>
                    </tr>
                    <tr>
                         <td style="width:50%;padding:20px;vertical-align:top">
                              <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px">Name</span>'.$clientName.'</p>
                              <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Email</span> palash@gmail.com</p>
                              <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Phone</span> '.$clientContact.'</p>

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
                                     $cgst = 0;
                                     $igst = 0;
                                     if($payment_place == 2)
                                     {
                                        $igst = $subTotal*18/100;
                                     }
                                     else
                                     {
                                        $cgst = $subTotal*9/100;
                                     }
                                     $total = $subTotal+2*$cgst+$igst;
                            
                               
                                     
                                    $count = 1;
                                     while($row = $orderItemResult->fetch_array()) {  

                                       
         
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
                              <strong style="display:block;margin:0 0 10px 0;">Regards</strong> Omega Sales<br> Gorubathan, Pin/Zip - 735221, Darjeeling, West bengal, India<br><br>
                              <b>Phone:</b> +256 702499649<br>
                              <b>Email:</b> info@omegasales.com
                         </td>
                    </tr>
               </tfooter>
          </table>
     </body>

</html>';
$connection->close();


$sendEmail  = sendMail('mukoovajumag8@gmail.com','Sales going on',$emailT);

if ($sendEmail) {
     $feed_back = array('status' => true, 'msg' => 'success');
 } else {
     $feed_back = array('status' => false, 'msg' => 'failed');
 }

$dataX = json_encode($feed_back);
header('Content-Type: application/json');
echo $dataX;



        }
        
        ?>