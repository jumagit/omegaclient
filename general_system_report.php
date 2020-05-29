<?php 

require_once 'includes/db.php';

if(isset($_POST['submit'])) {

    $startDate = clean($_POST['start_date']);
    $date = DateTime::createFromFormat('m/d/Y',$startDate);
    $start_date = $date->format("Y-m-d");


    $endDate = clean($_POST['end_date']);
    $format = DateTime::createFromFormat('m/d/Y',$endDate);
    $end_date = $format->format("Y-m-d");

    $sql = "SELECT * FROM orders WHERE order_date >= '$start_date' AND order_date <= '$end_date' and order_status = 1";
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
         if(mysqli_num_rows($result) > 0){
        while ($result = $query->fetch_assoc()) {
            $table .= '<tr>
                <td><center>'.$result['order_date'].'</center></td>
                <td><center>'.$result['client_name'].'</center></td>
                <td><center>'.$result['client_contact'].'</center></td>
                <td><center>'.$result['grand_total'].'</center></td>
            </tr>'; 
            $totalAmount += $result['grand_total'];
        }}else{

             $table .= '<tr>
                
                <td><center>No orders Found </center></td>
            </tr>'; 

        }
        $table .= '
        </tr>

        <tr>
            <td colspan="3"><center>Total Amount</center></td>
            <td><center>'.$totalAmount.'</center></td>
        </tr>
    </table>
    ';

    $sql2 = query("SELECT * FROM clients WHERE DATE(created_on) >= '$start_date' AND DATE(created_on) <= '$end_date'");  
    // $sql2 = query("SELECT * FROM clients ");  


     $table .= '
    <h3 style="padding-bottom:12px;text-align:center;">REGISTERED CLIENTS</h3>
    <table border="1" cellspacing="0" cellpadding="0" style="width:100%;">
        <tr>
            <th>Registered Date</th>
            <th> FullName</th>
            <th>Contact</th>            
            <th>Email</th>
            <th>Created By</th>
        </tr>

        <tr>';
         if(mysqli_num_rows($sql2) > 0){
         while ($row = mysqli_fetch_array($sql2)) {
            $table .= '<tr>
                <td><center>'.$row['created_on'].'</center></td>
                <td><center>'.$row['fullName'].'</center></td>
                <td><center>'.$row['mobile'].'</center></td>                
                <td><center>'.$row['email'].'</center></td>
                <td><center>'.$row['created_by'].'</center></td>
            </tr>';
              }}else{

           $table .= '<tr>
                
                <td colspan="10"><center>No clients Found</center></td>
            </tr>';

              }
        $table .= '
        </tr>

        
    </table>
    ';
    //users


    $sql3 = query("SELECT * FROM users WHERE DATE(created_on) >= '$start_date' AND DATE(created_on) <= '$end_date'");  
    // $sql2 = query("SELECT * FROM clients ");  


     $table .= '
    <h3 style="padding-bottom:12px;text-align:center;">REGISTERED USERS</h3>
    <table border="1" cellspacing="0" cellpadding="0" style="width:100%;">
        <tr>
            <th>Registered Date</th>
            <th> FullName</th>
            <th>Username</th>
            <th>Email</th>
            <th>Created By</th>
        </tr>

        <tr>';

        if(mysqli_num_rows($sql3) > 0){
         while ($r = mysqli_fetch_array($sql3)) {
            $table .= '<tr>
                <td><center>'.$r['created_on'].'</center></td>
                <td><center>'.$r['sname'].' '.$r['fname'].'</center></td>
                <td><center>'.$r['mobile'].'</center></td>
                <td><center>'.$r['email'].'</center></td>
                <td><center>'.$r['created_by'].'</center></td>
            </tr>';
              }}else{

            $table .= '
            <tr>
            <td colspan="12"><center>No Users found.</center></td>
            </tr>
            ';
              }
        $table .= '
        </tr>

        
    </table>
    ';

printReport($table,"General System Report");
   // echo $table;

}

?>