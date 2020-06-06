<?php


include "check_if_logged_in.php";

require "../includes/db.php";

header('Content-Type: application/json');



//fetch.php;
if(isset($_POST["view"]))
{

 if($_POST["view"] != '')
 {
  $update_query = "UPDATE system_access_logs SET status=1 WHERE status=0";
  mysqli_query($connect, $update_query);
 }
 $query = "SELECT * FROM system_access_logs ORDER BY id DESC LIMIT 5";
 $result = query( $query);
 $output = '';
 
 if(mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_array($result))
  {
   $output .= '

   <a href="javascript:void(0);" class="dropdown-item notify-item  active"style="border-bottom:1px solid lightgray;">
        <div class="notify-icon bg-info text-white"><i class="mdi mdi-image"></i></div>
     <p class="notify-details"><b>'.$row['username'].'</b><span class="text-dark">'.$row['activity'].'</span></p>
  </a>

   ';
  }
 }
 else
 {
  $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
 }
 
 $query_1 = "SELECT * FROM system_access_logs WHERE status=0";
 $result_1 = query( $query_1);
 $count = mysqli_num_rows($result_1);
 $data = array(
  'notification'   => $output,
  'unseen_notification' => $count
 );
 echo json_encode($data);
}


















?>