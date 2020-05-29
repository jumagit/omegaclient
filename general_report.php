<?php 

require_once 'includes/db.php';

if(isset($_POST['submit'])) {

    $startDate = clean($_POST['start_date']);
    $date = DateTime::createFromFormat('m/d/Y',$startDate);
    $start_date = $date->format("Y-m-d");


    $endDate = clean($_POST['end_date']);
    $format = DateTime::createFromFormat('m/d/Y',$endDate);
    $end_date = $format->format("Y-m-d");

    $sql = "SELECT * FROM orders WHERE order_date >= '$start_date' AND order_date <= '$end_date' AND order_status = 1 AND client_id = '{$_SESSION['client_id']}'";
    $query = query($sql);

    $table = '
    <h3 style="padding-bottom:12px;text-align:center;">ORDER DETAILS REPORT</h3>
    <table border="1" cellspacing="0" cellpadding="0" style="width:100%;">
        <tr>
            <th>Order Date</th>
            <th>Client Name</th>
            <th>Contact</th>
            <th>Grand Total</th>
        </tr>

        <tr>';
        $totalAmount = "";
        while ($result = $query->fetch_assoc()) {
            $table .= '<tr>
                <td><center>'.$result['order_date'].'</center></td>
                <td><center>'.$result['client_name'].'</center></td>
                <td><center>'.$result['client_contact'].'</center></td>
                <td><center>'.$result['grand_total'].'</center></td>
            </tr>'; 
            $totalAmount += $result['grand_total'];
        }
        $table .= '
        </tr>

        <tr>
            <td colspan="3"><center>Total Amount</center></td>
            <td><center>'.$totalAmount.'</center></td>
        </tr>
    </table>
    ';  

printReport($table,"General Report");
   // echo $table;

}

?>