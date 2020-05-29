<?php 
 require_once('includes/db.php');

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



require('rotation.php');
class PDF extends PDF_Rotate
{
    function Header()
    {
        /* Put the watermark */
        $this->SetFont('Arial','B',50);
        $this->SetTextColor(255,192,203);
        $this->RotatedText(35,190,'Omega Online Sales',45);
    }

    function RotatedText($x, $y, $txt, $angle)
    {
        /* Text rotated around its origin */
        $this->Rotate($angle,$x,$y);
        $this->Text($x,$y,$txt);
        $this->Rotate(0);
    }
}
  //cell(width,height,text,border,endline,[align])  
$pdf=new PDF('P','mm','A4');
$pdf->AddPage();
/*output the result*/
$pdf->SetFont('Arial','B',20);
$pdf->Cell(60 ,10,'',0,0);
$pdf->Cell(60 ,10,'Omega Sales Invoice',0,0);
$pdf->Cell(50 ,10,'',0,1);

$pdf->SetFont('Arial','B',15);
$pdf->Cell(71 ,5,'WET',0,0);
$pdf->Cell(59 ,10,'',0,0);
$pdf->Cell(59 ,5,'Details',0,1);
/*set font to arial, regular, 12pt*/
$pdf->SetFont('Arial','',10);
$pdf->Cell(130 ,5,'Near DAV',0,0);
$pdf->Cell(25 ,5,'Customer ID:',0,0);
$pdf->Cell(34 ,5,'0012',0,1);/*end of line*/
$pdf->Cell(130 ,5,'Delhi, 751001',0,0);
$pdf->Cell(25 ,5,'Invoice Date:',0,0);
$pdf->Cell(34 ,5,$orderDate,0,1);
$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Invoice No:',0,0);
$pdf->Cell(34 ,5,'ORD001',0,1);
$pdf->SetFont('Arial','B',15);
$pdf->Cell(130 ,5,'Bill To',0,0);
$pdf->Cell(59 ,5,'',0,0);
$pdf->SetFont('Arial','B',10);
/*make a dummy empty cell as a vertical spacer*/
$pdf->Cell(189 ,10,'',0,1);
/*make a dummy empty cell as a vertical spacer*/
$pdf->Cell(50 ,10,'',0,1);

$pdf->SetFont('Arial','B',10);

$pdf->Cell(10 ,6,'Sl',1,0,'C');
$pdf->Cell(80 ,6,'Description',1,0,'C');
$pdf->Cell(23 ,6,'Qty',1,0,'C');
$pdf->Cell(30 ,6,'Unit Price',1,0,'C');
$pdf->Cell(20 ,6,'Sales Tax',1,0,'C');
$pdf->Cell(25 ,6,'Total',1,1,'C');
/*Heading Of the table end*/
$pdf->SetFont('Arial','',10);
    for ($i = 0; $i <= 10; $i++) {
        $pdf->Cell(10 ,6,$i,1,0);
        $pdf->Cell(80 ,6,'HP Laptop',1,0);
        $pdf->Cell(23 ,6,'1',1,0,'R');
        $pdf->Cell(30 ,6,'15000.00',1,0,'R');
        $pdf->Cell(20 ,6,'100.00',1,0,'R');
        $pdf->Cell(25 ,6,'15100.00',1,1,'R');
    }
        

$pdf->Cell(118 ,6,'',0,0);
$pdf->Cell(25 ,6,'Subtotal',0,0);
$pdf->Cell(45 ,6,'151000.00',1,1,'R');


$pdf->Output();

?>
        
   

 
 ?>