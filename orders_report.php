<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$connection = mysqli_connect("localhost","root", "","store");


require_once('thirdparty/mpdf/mpdf.php');


//code

if (isset($_GET['id'])) {


$orderId = base64_decode($_GET['id']);



$sql = "SELECT orders.order_date, orders.customer_id, orders.sub_total, orders.grand_total, orders.paid, orders.due, customers.customer_names,customers.contact,orders.invoice_number, orders.payment_type  FROM orders INNER JOIN customers ON orders.customer_id = customers.customer_id WHERE orders.order_id = '$orderId' ";

$orderResult = mysqli_query($connection,$sql) OR die(mysqli_error($connection));
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

       
       if($payment === 1){
        $paymentType = "AIRTEL MOBILE MONEY";
       }elseif($payment ===2){
        $paymentType = "MTN MOBILE MONEY";
       }else{
        $paymentType ="CENTE MOBILE";
       }
    }


}




$table = '
  <div id="invoice-POS" style="font-family: arial, sans-serif;">
    
    <center id="top">
     
      <div class="info"> 
      <div class="heaf">
        
        <h2 style="font-weight:bold;color:red;font-size:25px;">OMEGA INVOICE</h2>
        </div>
      </div><!--End Info-->
    </center><!--End InvoiceTop-->
    
    <div id="mid">
     <div class="invoice-box">
        
            <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="assets/images/logo.png" style="width:90%; max-width:200px;">
                            </td>
                            
                            <td>
                                Invoice :<span style="color:red;font-weight:bold;"> '.$invoice_number.' </span><br>
                                Created: '.$orderDate.'<br>
                                Due:UGX <span style="color:green;font-weight:bold;">'.$due.'<span>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="heading">
                <td>
                   INVOICE
                </td>
                <td>
                   ADDRESS INFORMATION
                </td>
                
                
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Omega Consultants Limited.<br>
                                P.O. BOX 444,Jinja Road<br>
                                info@omega.co.ug<br>
                                +256 70565445
                            </td>
                            
                            <td>
                              <span style="color:red;">TO:</span>Mukoova '.$customer_names.'<br>
                                mukoovajuma183@gmail.com<br>
                                '.$contact.'
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
                    Check #
                </td>
            </tr>
            
            <tr class="details">
                <td>

              <span style="font-weight:bold;color:orange;"> '.$paymentType.'</span>

                ';
                   
                    

                $table.='
                </td>
                
                <td>
                    1000
                </td>
            </tr>
          
            </table>
	          

      </div>
      
    </div><!--End Invoice Mid-->
    
    <div id="bot">

					<div id="table">
						<table id="products">
							<tr class="tabletitle" style="text-transform:uppercase;">
								<td class="item"><h2>Item</h2></td>
								<td class="Hours"><h2>Qty</h2></td>
								<td class="Rate"><h2>Sub Total</h2></td>
							</tr>';
							
							
		
                $orderItemSql = "SELECT order_item.product_id,  order_item.quantityTaken, order_item.total,
                products.product_name, products.price FROM order_item
                   INNER JOIN products ON order_item.product_id = products.product_id 
                 WHERE order_item.order_id = $orderId";
                $orderItemResult = $connection->query($orderItemSql);
                $count =0;

			 while($row = $orderItemResult->fetch_array()) {    	
											
							
                    $table.='
						

							<tr class="service">
								<td class="tableitem"><p class="itemtext">'.$row[3].'</p></td>
								<td class="tableitem"><p class="itemtext">'.$row[1].'</p></td>
								<td class="tableitem"><p class="itemtext">UGX '. $row[2].'</p></td>
							</tr>';
							$grand_total += $row[2];
							}
						
                 
							$table.='


							

							<tr class="tabletitle">
								<td></td>
								<td class="Rate"><h2>TOTAL</h2></td>
								<td class="payment"><h2>UGX '.$grandTotal.'</h2></td>
							</tr>

						</table>
					</div><!--End Table-->

					<div id="legalcopy">
						<p class="legal"><strong>Thank you for your business!</strong>  Payment is expected within 31 days; please process this invoice within that time. There will be a 5% interest charge per month on late invoices. 
						</p><p class="legal"><strong>For more Information about our Services !</strong>  Reach us through <b style="color:red;">info@omega.co.ug</b> or <strong>Call</strong> +256 7760766965.
						</p>
					</div>
					
					
					
				

				</div><!--End InvoiceBot-->
  </div><!--End Invoice-->

';








$mpdf=new mPDF('c');
$mpdf->debug = true;
$mpdf->mirrorMargins = 1;
$mpdf->list_indent_first_level = 0;

$mpdf->SetDisplayMode('fullpage');
$mpdf->showWatermarkImage = true;
$mpdf->WriteHTML(
  '<watermarkimage src="assets/images/logo.png" alpha="0.1" size="200,90" />'
);

$stylesheet = file_get_contents('assets/css/receipt.css');
$mpdf->WriteHTML($stylesheet,1); // The parameter 1 tells that this is css/style only and no body/html/text

// Write some HTML code:
$mpdf->WriteHTML($table);

$filename = 'Report.pdf';

// Output a PDF file directly to the browser
$mpdf->Output($filename, "I");



// //  printReport($table, 'Print my order');

 
 ?>