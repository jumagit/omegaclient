<?php 
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$connection = mysqli_connect("localhost","root", "","store");


require_once('thirdparty/mpdf/mpdf.php');

if(isset($_POST['submit'])) {

    $startDate = $_POST['start_date'];
    $date = DateTime::createFromFormat('m/d/Y',$startDate);
    $start_date = $date->format("Y-m-d");


    $endDate = $_POST['end_date'];
    $format = DateTime::createFromFormat('m/d/Y',$endDate);
    $end_date = $format->format("Y-m-d");
    
    $me = $_SESSION['client_id'];
    

    $sql = "SELECT * FROM orders WHERE order_date >= '$start_date' AND order_date <= '$end_date' AND order_status = 1 AND client_id = '$me' ";
    $query = mysqli_query($connection,$sql);

    $table = '
    <h3 style="padding-bottom:12px;text-align:center;">ORDER DETAILS REPORT  </h3>
    <table border="1" cellspacing="0" cellpadding="0" style="width:100%;">
        <tr>
            <th>Order Date</th>
            <th>Client Name</th>
            <th>Contact</th>
            <th>Grand Total</th>
        </tr>

        <tr>';
        $totalAmount = "";
        while ($result = mysqli_fetch_array($query)) {
            $table .= '<tr>
                <td><center>'.$result['order_date'].'</center></td>
                <td><center>'.$result['client_name'].'</center></td>
                <td><center>'.$result['client_contact'].'</center></td>
                <td><center>UGX  '.$result['grand_total'].'</center></td>
            </tr>'; 
            $totalAmount += $result['grand_total'];
        }
        $table .= '
        </tr>

        <tr>
            <td colspan="3"><center>Total Amount</center></td>
            <td><center><p style="color:red;font-size:22px;">UGX  '.$totalAmount.'</p></center></td>
        </tr>
    </table>
    ';  

$mpdf=new mPDF('c');
$mpdf->debug = true;
$mpdf->mirrorMargins = 1;
$mpdf->list_indent_first_level = 0;

$mpdf->SetDisplayMode('real');
$mpdf->showWatermarkImage = true;
$mpdf->WriteHTML(
  '<watermarkimage src="assets/images/logo.png" alpha="0.2" size="200,90" />'
);
$stylesheet = file_get_contents('assets/css/table.css');
$mpdf->WriteHTML($stylesheet,1); // The parameter 1 tells that this is css/style only and no body/html/text

// Write some HTML code:
$mpdf->WriteHTML($table);

$filename = 'Report.pdf';

// Output a PDF file directly to the browser
$mpdf->Output($filename, "I");



}

?>