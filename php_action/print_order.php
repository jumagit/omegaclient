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

 $table = '<style>
 .invoice-box {
     max-width: 800px;
     margin: auto;
     padding: 30px;
     border: 1px solid #eee;
     box-shadow: 0 0 10px rgba(0, 0, 0, .15);
     font-size: 16px;
     line-height: 24px;
     font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
     color: #555;
 }
 
 .invoice-box table {
     width: 100%;
     line-height: inherit;
     text-align: left;
 }
 
 .invoice-box table td {
     padding: 5px;
     vertical-align: top;
 }
 
 .invoice-box table tr td:nth-child(2) {
     text-align: left;
 }

 .invoice-box table .topHeader td:nth-child(2) {
   text-align: right;
}
.center{
   text-align:center;
}

.invoice-box table .bep td:nth-child(2) {
   text-align: right;
}

.invoice-box table .information td:nth-child(2) {
   text-align: right;
}
 
 .invoice-box table tr.top table td {
     padding-bottom: 20px;
 }
 
 .invoice-box table tr.top table td.title {
     font-size: 45px;
     line-height: 45px;
     color: #333;
 }
 
 .invoice-box table tr.information table td {
     padding-bottom: 40px;
 }
 
 .invoice-box table tr.heading td {
     background: #eee;
     border-bottom: 1px solid #ddd;
     font-weight: bold;
 }
 
 .invoice-box table tr.details td {
     padding-bottom: 20px;
 }
 
 .invoice-box table tr.item td{
     border-bottom: 1px solid #eee;
 }
 
 .invoice-box table tr.item.last td {
     border-bottom: none;
 }
 
 .invoice-box table tr.total td:nth-child(2) {
     border-top: 2px solid #eee;
     font-weight: bold;
 }
 
 @media only screen and (max-width: 600px) {
     .invoice-box table tr.top table td {
         width: 100%;
         display: block;
         text-align: center;
     }
     
     .invoice-box table tr.information table td {
         width: 100%;
         display: block;
         text-align: center;
     }
 }
 
 /** RTL **/
 .rtl {
     direction: rtl;
     font-family: Tahoma, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
 }
 
 .rtl table {
     text-align: right;
 }
 
 .rtl table tr td:nth-child(2) {
     text-align: left;
 }
 </style>
</head>

<body>
 <div class="invoice-box">
     <table cellpadding="0" cellspacing="0">
         <tr class="top">
             <td colspan="12">
                 <table>
                     <tr class="topHeader">

                         <td class="title">
                             <img src="assets/images/logo.png" style="width:40%; ">
                         </td>
                             
                         
                         <td>
                             Invoice #: <span style="color:red">123</span><br>
                             Created: '.$orderDate.'<br>
                             Due: February 1, 2015
                         </td>
                     </tr>
                 </table>
             </td>
         </tr>
         <tr>
            <td colspan="4">
              <hr>
            </td>
         </tr>
         <tr class="information">
             <td colspan="4">
                 <table>
                     <tr>
                         <td>
                             Sparksuite, Inc.<br>
                             12345 Sunny Road<br>
                             Sunnyville, CA 12345
                         </td>
                       
                         
                         <td>
                             Acme Corp.<br>
                             '.$clientName.'<br>
                             '.$clientContact.'
                         </td>
                     </tr>
                 </table>
             </td>
         </tr>
         
         <tr class="heading">
             <td>
                 Payment Method
             </td>

             <td>
               
             </td>
             <td>
             
             </td>
             
             <td>
                 Check #
             </td>
         </tr>
         
         <tr class="details">
             <td>
                 Check
             </td>
               <td>
               
               </td>
               <td>
               
               </td>
             
             <td>
                 1000
             </td>
         </tr>';

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

         $table .='
         
         <tr>
         <td colspan="4">           
         <h4 style="text-align:center;color:red;"><b>ORDER DETAILS</b></h4>
         </td>
      </tr>
   

         <tr class="heading">
               <td>No.</td>              
               <td>Product Name</td>
               <td>Quantity</td>
               <td>Total</td>         
         </tr>         
         ';

         
   while($row = $orderItemResult->fetch_array()) {  
         
         $table .= ' <tr class="item">
         
            <td>
            '.$x.'
            </td>            
             
             <td>
             '.$row[3].'
             </td>

             <td>
             '.$row[1].'
             </td>

             <td>
             '.$row[2].'
             </td>
         </tr>       
       ';
         $x++;
         } // /while



             $table.= '

             <tr>
             <td colspan="4">
               
               <br>
             </td>
          </tr>

             <tr class="heading bep">
             <td></td>
             <td></td>         
             
             <td>
                Sub Total: UGX '.$subTotal.';
                <br>
             </td>
             
           </tr>          
         
         <tr class="heading bep">
             <td></td>
             <td></td>          
             
             <td>
                Total: UGX '.$grandTotal.'
             </td>
         </tr>
     </table>';
$connection->close();


echo $table;

		}