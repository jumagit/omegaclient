<?php 


		include "check_if_logged_in.php";

		require "../includes/db.php";
		header('Content-Type: application/json');  

            

            if(!isset($_POST['searchTerm'])){

            	 $fetch_query = query("SELECT * FROM customers WHERE client_id = '".$_SESSION['client_id']."' ");

            }else{

            	$search = $_POST['searchTerm'];


            	 $fetch_query = query("SELECT * FROM customers WHERE  customer_names LIKE '%".$search."%' AND client_id = '".$_SESSION['client_id']."' ");


            }        

           
              $data = array();

            if(mysqli_num_rows($fetch_query) > 0){

             

               while($row = mysqli_fetch_array($fetch_query)){


               	$data[] = array("id"=>$row['customer_id'], "text"=>$row['customer_names']);   

           }

              


       }

echo json_encode($data);


     








           








 ?>