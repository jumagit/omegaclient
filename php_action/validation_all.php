<?php
error_reporting(0);
include "check_if_logged_in.php";

require "../includes/db.php";



function checking_any_field_existance($field,$id,$table,$column){

  global $connection;

      if (isset($_POST[$field])) {
   
            $field = $_POST[$field];
            $field = clean($field);   
            $sql = "SELECT $id FROM $table WHERE $column = '".$field."' ";              
            $result = query($sql);
            if (mysqli_num_rows($result) > 0)
             {
                echo "<small class='h6 text-danger'> <i class='fas fa-times-circle text-danger'></i> ".$field." already Existing</small>";
            }
            else{
                echo "<small class='h6 text-success'> <i class='fas fa-check'></i>  ".$column." is ok !!</small>";
            }             
       
    }
}


function email_validation($email,$table,$id){
   global $connection;
      if (isset($_POST[$email])) {
            $mail = $_POST[$email];
            $email = clean($mail);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
             echo "<small class='h6 text-danger'> <i class='fas fa-times-circle text-danger'></i> Please enter A valid Email Address</small>";
             }
             else
             {  

             $sql = "SELECT $id FROM $table WHERE email_address = '".$email."' ";

            $result = query($sql);
            if (mysqli_num_rows($result) > 0)
             {
                echo "<small class='h6 text-danger'> <i class='fas fa-times-circle text-danger'></i> Email already Taken</small>";
            }
            else{
                echo "<small class='h6 text-success'> <i class='fas fa-check'></i> Email is ok !!</small>";
            }
            } 
       }
    }

  


//mobile number checking 256-702-499-649


      function contact_validation($contact,$id,$table){
            if (isset($_POST[$contact])) {
                $contact = $_POST[$contact];
                $contact = clean($contact);
                $result = query("SELECT $id FROM $table WHERE contact = '$contact'");
                    if (mysqli_num_rows($result) > 0)
                     {
                        echo "<small class='h6 text-danger'> <i class='fas fa-times-circle text-danger'></i> Contact already Taken</small>";
                    }
                    else{
                        if(preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{3}$/", $contact)){
                             echo "<small class='h6 text-success'> <i class='fas fa-check'></i> Contact is ok !!</small>";           
                        }else{
                            echo "<small class='h6 text-danger'> <i class='fas fa-times-circle text-danger'></i> Wrong Number Format</small>";
                        }             

                    }
                
              }

        }


email_validation('email','customers','customer_id');
contact_validation('contact','customer_id','customers');
checking_any_field_existance('field','customer_id','customers','customer_names');
checking_any_field_existance('field','order_id','orders','client_name');










   

