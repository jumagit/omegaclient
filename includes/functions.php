<?php

include "db.php";

function get_user_info($username)
{
    $sql = "SELECT sname, fname, email FROM users WHERE account_status=1 AND username='$username'";
    $result = query($sql);
    $data = array();
    while ($row = mysqli_fetch_array($result)) {
        $data[] = $row;
    }
    return $data;
}

//fetch user function



function fetch_users()
{

    $sql = "SELECT user_id,sname,role,fname, email,mobile,gender,account_status, created_by, created_on FROM users ";
    $result = query($sql);
    if (mysqli_num_rows($result) > 0) {

        $output = "";

        $count = 0;

        while ($trailRow = mysqli_fetch_array($result)) {

            $count++;
            $user_id = $trailRow['user_id'];
            $sname = $trailRow['sname'];
            $fname = $trailRow['fname'];
            $role = $trailRow['role'];
            $created_by = $trailRow['created_by'];
            $created_on = $trailRow['created_on'];
            $email = $trailRow['email'];
            $mobile = $trailRow['mobile'];
            $account_status = $trailRow['account_status'];
            $created_on = date_format(date_create($trailRow['created_on']), ' l jS F Y');

            if ($account_status == 1) {

                $accountStatus = "Active";

            } else {

                $accountStatus = "Inactive";
            }



            //role

            if ($role == 1) {

                $role = "Administrator";

            } else {

                $role = "User";
            }


            $output .= "<tr>
               <td>{$count}</td>
               <td>{$sname} {$fname}</td>
               <td>{$email}</td>
               <td>{$mobile}</td>
               <td>{$accountStatus}</td>  
               <td>{$role}</td>         
               <td><a onclick='makeAdmin($user_id)' class='text-info'><i class='fa fa-user'></i>  Admin  </a></td>
               <td><a onclick='revokeAdmin($user_id)' class='text-success'><i class='fa fa-cut'></i> Revoke </a></td>
               <td><a onclick='deactivateAccount($user_id)' class='text-info'><i class='fa fa-times-circle'></i>  Deactivate  </a></td>
               <td><a href='edit_users.php?edit={$user_id}' ><i class='fa fa-edit'></i></a></td>
               <td><a onclick='deleteUser($user_id)' class='text-danger'><i class='fa fa-trash'></i></a></td>

               </tr>";

        }

    }

    return $output;

}

//fetch log function

function fetch_logs()
{

    $sql = "SELECT * FROM system_access_logs ORDER BY id DESC";

    $result = query($sql);

    if (mysqli_num_rows($result) > 0) {

        $output = "";

        $count = 0;

        while ($trailRow = mysqli_fetch_array($result)) {

            $count++;
            $user = $trailRow['username'];
            $activityTime = $trailRow['activity_time'];
            $log_type = $trailRow['log_type'];
            $activity = $trailRow['activity'];

            $output .= "<tr>
           <td>{$count}</td>
           <td>{$user}</td>
           <td>{$activity}</td>
           <td>{$activityTime}</td>
           <td>{$log_type}</td>

           </tr>";

        }

    }

    return $output;
}


//brands
function fetch_customers()
{

    $sql = "SELECT * FROM customers WHERE client_id = ".$_SESSION['client_id']." ORDER BY customer_id DESC";

    $result = query($sql);

    if (mysqli_num_rows($result) > 0) {

        $output = "";

        $count = 0;

        while ($trailRow = mysqli_fetch_array($result)) {

                $count++;
                $customer_id = $trailRow['customer_id'];
                $customer_names = $trailRow['customer_names'];
                $contact = $trailRow['contact'];
                $email_address = $trailRow['email_address'];
                $address = $trailRow['address'];

               

            $output .= "<tr>
           <td>{$count}</td>
           <td>{$customer_names}</td>
           <td>{$email_address}</td>
           <td>{$address}</td>
           <td>{$contact}</td>
           <td><a href='customer_profile.php?edit={$customer_id}' ><i class='fa fa-edit'></i></a></td>
           <td><a onclick='deleteBrand($customer_id)' class='text-danger'><i class='fa fa-trash'></i></a></td>
           </tr>";

        }

    }

    return $output;
}


//categories 



function fetch_categories()
{

    $sql = "SELECT * FROM categories WHERE client_id = ".$_SESSION['client_id']." ORDER BY categories_id DESC";

    $result = query($sql);

    if (mysqli_num_rows($result) > 0) {

        $output = "";

        $count = 0;

        while ($trailRow = mysqli_fetch_array($result)) {

            $count++;
            $categories_id = $trailRow['categories_id'];
            $categories_active = $trailRow['categories_active'];
            $categories_name = $trailRow['categories_name'];
            $categories_status = $trailRow['categories_status'];
            if($categories_status == 1){
                $categories_status = "<i class='fa fa-battery-full'></i> Available";
            }else{
                $categories_status = "<i class='fa fa-battery-empty'></i> Unavailable";
            }

            $output .= "<tr>
           <td>{$count}</td>
           <td>{$categories_name}</td>
           <td>{$categories_status}</td>
           <td><a onclick='makeAvailable($categories_id)' class='text-info'><i class='fa fa-battery-full'></i> Available  </a></td>
           <td><a onclick='notAvailable($categories_id)' class='text-success'><i class='fa fa-battery-empty'></i> Not Available  </a></td>
           <td><a href='edit_categories.php?edit={$categories_id}' ><i class='fa fa-edit'></i></a></td>
           <td><a onclick='deleteBrand($categories_id)' class='text-danger'><i class='fa fa-trash'></i></a></td>
           </tr>";

        }

    }

    return $output;
}

//fetch clients
function fetch_clients()
{

    $sql = "SELECT * FROM clients ORDER BY client_id DESC";

    $result = query($sql);

    if (mysqli_num_rows($result) > 0) {

        $output = "";

        $count = 0;

        while ($trailRow = mysqli_fetch_array($result)) {

            $count++;
            $client_id = $trailRow['client_id'];
            $fullName = $trailRow['fullName'];
            $email = $trailRow['email'];
            $username = $trailRow['username'];
            $mobile = $trailRow['mobile'];
            $location = $trailRow['location'];
           

            $output .= "<tr>
           <td>{$count}</td>
           <td>{$fullName}</td>
           <td>{$email}</td>  
           <td>{$username}</td> 
           <td>{$mobile}</td>       
           <td>{$location}</td>
           <td><a href='edit_clients.php?edit={$client_id}' ><i class='fa fa-edit'></i></a></td>
           <td><a onclick='deleteClient($client_id)' class='text-danger'><i class='fa fa-trash'></i></a></td>
           </tr>";

        }

    }

    return $output;
}


//fetch products 


function fetch_products()
{

    $sql = "SELECT products.product_id, products.product_name, products.product_image,
    products.categories_id, products.quantity, products.active, products.status, 
     categories.categories_name,products.total_sales,products.price FROM products   
   INNER JOIN categories ON products.categories_id = categories.categories_id  
   WHERE  products.quantity>0 AND products.status = '1' AND  products.client_id = ".$_SESSION['client_id']."";

    $result = query($sql);

    if (mysqli_num_rows($result) > 0) {

        $output = "";

        $count = 0;

        while ($trailRow = mysqli_fetch_array($result)) {

            $count++;
            $product_id = $trailRow[0];          
            $product_image  = substr($trailRow[2], 3);
            $num_sold = $trailRow[8];
            $product_category = $trailRow[7];
            $product_name = $trailRow[1];          
            $quantity = $trailRow[4];
            $status  =  $trailRow[6];
            $price = $trailRow[9];
            $sales_made = $num_sold * $price;
            if ($status === '1') {
                $status = "Available";
            }else{
                $status = "Not Available"; 

            }
           
           

            $output .= "<tr>
           <td>{$count}</td>
           <td><img src='{$product_image}' width='50' height='50' alt='Product Image'></td>
           <td>{$product_name}</td>  
           <td>{$quantity}</td>                 
           <td>{$product_category}</td>
            <td><button class='btn btn-sm btn-danger'>{$num_sold} Sold</button></td> 
            <td><button class='btn btn-sm btn-primary'>{$sales_made} Total Amount </button></td> 
           <td>{$status}</td>           
           <td><a onclick='pNotAvailable($product_id)' class='text-success'><i class='fa fa-battery-empty'></i> Not Available  </a></td>
           <td><a href='edit_products.php?edit={$product_id}' class='text-info'><i class='fa fa-edit'></i></a></td>
           <td><a onclick='deleteProduct($product_id)' class='text-danger'><i class='fa fa-trash'></i></a></td>
           </tr>";

        }

    }

    echo $output;
}



//unavailable products 


function fetch_unavailable_products()
{

    $sql = "SELECT products.product_id, products.product_name, products.product_image,
    products.categories_id, products.quantity,  products.active, products.status, 
     categories.categories_name FROM products   
   INNER JOIN categories ON products.categories_id = categories.categories_id  
   WHERE  products.quantity < 1 AND products.status = '0' AND  products.client_id = ".$_SESSION['client_id']."";

    $result = query($sql);

    if (mysqli_num_rows($result) > 0) {

        $output = "";

        $count = 0;

        while ($trailRow = mysqli_fetch_array($result)) {

            $count++;
            $product_id = $trailRow[0];
           // $product_image = $trailRow[2];
            $product_image  = substr($trailRow[2], 3);
            // $product_brand = $trailRow[10];
            $product_category = $trailRow[7];
            $product_name = $trailRow[1];          
            $quantity = $trailRow[4];
            $status  =  $trailRow[6];

            if ($status === 1) {
                $status = "Available";
            }else{
                $status = "Not Available"; 

            }
           
           

            $output .= "<tr>
           <td>{$count}</td>
           <td><img src='{$product_image}' width='50' height='50' alt='Product Image'></td>
           <td>{$product_name}</td>  
           <td>{$quantity}</td> 
                
           <td>{$product_category}</td>
           <td>{$status}</td>
           <td><a onclick='pMakeAvailable($product_id)' class='text-info'><i class='fa fa-battery-full'></i> Available  </a></td>
           
           <td><a href='edit_products.php?edit={$product_id}' ><i class='fa fa-edit'></i></a></td>
           <td><a onclick='deleteProduct($product_id)' class='text-danger'><i class='fa fa-trash'></i></a></td>
           </tr>";

        }

    }

    echo $output;
}



function fetch_orders()
{

    $sql = "SELECT order_id, order_date, customer_id, payment_status FROM orders WHERE   client_id = ".$_SESSION['client_id']."";    

    $result = query($sql);

    if (mysqli_num_rows($result) > 0) {

        $output = "";

        $count = 0;

        while ($trailRow = mysqli_fetch_array($result)) {

            $count++; 

            $orderId =  $trailRow['order_id'];
            $order_id = base64_encode($orderId);
            $order_date = $trailRow['order_date'];
            $customer_id = $trailRow['customer_id'];

            //payment status
            $payment_status = $trailRow['payment_status'];

            if($payment_status == 1){
                $payment_status = "<span class='btn btn-outline-warning'>NoPayment</span>";
            }else if($payment_status == 2){
                $payment_status = "<span class='btn btn-outline-info'>Installment Payment</span>";
            }else{
                $payment_status = "<span class='btn btn-outline-success'>Full Payment</span>"; 
            }


            //fetching total order items           

            $countOrderItemSql = "SELECT SUM(quantityTaken) FROM order_item WHERE order_id = '$orderId' ";
            $itemCountResult = query($countOrderItemSql);  
            while ($p = mysqli_fetch_array($itemCountResult)) {
                $itemCountRow  = $p[0];   
            }         
           
            
           
            $fetch_customer = "SELECT customers.customer_names FROM customers WHERE customers.customer_id = $customer_id";
            $fetchCustomer = query($fetch_customer);
            while($row = mysqli_fetch_array($fetchCustomer)){
            $customerName = $row[0];
          }
       


         

            $output .= "<tr>
           <td>{$count}</td>
           <td>{$order_date}</td>
           <td><a href='customer_profile.php?id=$customer_id' class='btn btn-secondary'>{$customerName}</a></td>  
           <td><button class='btn btn-info'>{$itemCountRow}</button></td>           
                      
           <td>$payment_status</td>
           <td><a href='edit_order.php?id=$order_id' class='btn btn-outline-info'><i class='fa fa-edit'></i></a></td>
      
           <td><a href='invoice.php?id=$order_id'  class='btn btn-outline-success '><i class='fa fa-eye'></i></a></td>
            <td><a type='button'   class='btn btn-outline-primary' data-toggle='modal' id='paymentOrderModalBtn' data-target='#paymentOrderModal' onclick='paymentOrder($orderId)'> <i class='fas fa-credit-card'></i> Pay</a></td>
          
           <td><a onclick='printOrder($orderId)'  class='btn btn-outline-info '><i class='fa fa-print'></i></a></td>
           <td><a onclick='sendMail($orderId)'  class='btn btn-outline-dark '><i class='fa fa-envelope'></i></a></td>
           <td><a onclick='deleteOrder($orderId)' class='btn btn-outline-danger '><i class='fa fa-trash '></i></a></td>
           </tr>";

          
 // <td><a href='report_order.php?id=$order_id'   target='_blank' class='badge badge-primary text-white'><i class='fa fa-print'></i></a></td>
        }

    }else{

        echo" No orders ";
    }

    return $output;
}




function fetch_out_of_stock()
{

    $sql = "SELECT order_item.total,order_item.quantityTaken,products.product_name,orders.client_name, orders.client_contact,order_item.created_at FROM order_item INNER JOIN products on order_item.product_id = products.product_id  INNER JOIN orders on order_item.order_id = orders.order_id";    

    $result = query($sql);

    if (mysqli_num_rows($result) > 0) {

        $output = "";

        $count = 0;

        while ($trailRow = mysqli_fetch_array($result)) {
         $count++;
           

        
       

$created_on = f_date($trailRow[5]);


            $output .= "<tr>
           <td>{$count}</td>
           <td>{$trailRow[0]}</td>
           <td>{$trailRow[1]}</td>
           <td>{$trailRow[2]}</td>
           <td>{$trailRow[3]}</td>           
           <td>{$trailRow[4]}</td>
           <td>{$created_on}</td>
          
           </tr>";

        }

    }else{

        echo" No out stcok ";
    }

    return $output;
}