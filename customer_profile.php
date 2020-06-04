<?php include"includes/header.php"; ?>
<!-- Navigation Bar-->
<?php include"includes/navigation.php"; ?>
<!-- End Navigation Bar-->

<!-- page wrapper start -->
<div class="wrapper">
    <div class="page-title-box">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="state-information d-none d-sm-block">
                        <div class="state-graph">
                            <div id="header-chart-1"></div>
                            <div class="info">Balance $ 2,317</div>
                        </div>
                        <div class="state-graph">
                            <div id="header-chart-2"></div>
                            <div class="info">Item Sold 1230</div>
                        </div>
                    </div>

                    <h4 class="page-title">Customer Information</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Customer Information</a></li>
                       
                    </ol>
                </div>
            </div>
        </div>
        <!-- end container-fluid -->

        <?php 

    error_reporting(E_ALL);


if (isset($_GET['id'])) {  


    $fetch_customer = query("SELECT * FROM customers WHERE customer_id = '".$_GET['id']."'");

    if(mysqli_num_rows($fetch_customer) > 0) {

    while ($row = mysqli_fetch_array($fetch_customer)) {
            $customer_names = $row['customer_names'];
            $contact = $row['contact'];
            $address = $row['address'];
            $customer_id = $row['customer_id'];
          
            $email_address = $row['email_address'];           

    } }else{

        $msg = " <div class='alert alert-warning  alert-dismissible fade show'>
                    <button type='button' class='close' data-dismiss='alert'>×</button> <strong>Well done!</strong> No Customer Information Please...
                     <script type='text/javascript'>setTimeout(function() { window.location.href = 'orders.php';}, 2000);</script>
                </div>";
    }

 
}



//update Query
        if (isset($_POST['submit'])) {


                    $E_customer_names = clean($_POST['customer_names']);
                    $E_contact = clean($_POST['contact']);
                    $E_address = clean($_POST['address']);
                    $E_order_id = clean($_POST['order_id']);
                    $E_email_address = clean($_POST['email_address']);  
                    

                    $update_query = query(" UPDATE customers SET address = '$E_address', customer_names = '$E_customer_names', contact = '$E_contact',  email_address = '$E_email_address' WHERE customer_id = '$E_order_id' ");  
                       if(!empty($E_gender) AND !empty($E_email_address) AND !empty($E_contact) AND !empty($E_address)){
                      if ($update_query) {
                            writeLog("Made an edit on  Customer Information : {$E_email_address}  from {$IP}", $_SESSION['username'], "INFO");
                
                            $msg = '
                                <div class="col-lg-12">
                                    <div class="alert alert-success alert-dismissible fade show">
                                        <button type="button" class="close" data-dismiss="alert">×</button> <strong>Well done!</strong> Saving changes! please wait ..............
                                    </div>
                                    <script type="text/javascript">setTimeout(function() { window.location.href = "orders.php";}, 2000);</script>
                                 </div>
                                ';
                        } else {
                            die(mysqli_error($connection));
                        }   


                        }   



            
        }







         ?>

    </div>
    <!-- page-title-box -->

    <div class="page-content-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">


                        <div class="col-8 offset-2">
                        <div class="card-body p-20 m-30 " style="border: 1px solid lightgray;margin:30px;">

                            <h4 class="mt-0 ">Customer Profile</h4>

                             <?php if (isset($msg)) {echo $msg;}?>

                            <div class="alert alert-dark bg-dark  font-weight-normal  text-white alert-dismissible fade show"
                                role="alert"> <button type="button" class="close" data-dismiss="alert"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button> <strong> <i class=" mdi mdi-arrow-down-box"></i> </strong>Here you can edit  Customer Profile.
                            </div>

                             <hr>

                            <form id="personalInformation" method="post" action="#">


                                <div class="form-group">
                                    <label for="customer_names">Full Name</label>
                                    <input type="text" value="<?php if(isset($customer_names)){ echo $customer_names;} ?>"
                                        class="form-control" name="customer_names"
                                        data-bv-field="customer_names" id="address"
                                        required >
                                </div>


                                 <div class="form-group">
                                    <label for="address">Customer Address</label>
                                    <input type="text" value="<?php if(isset($address)){ echo $address; }?>"
                                        class="form-control"
                                        data-bv-field="address" id="address" name="address"
                                        required >
                                        <input type="hidden" name="order_id" value="<?php if(isset($customer_id)){ echo $customer_id; } ?>">
                                </div>
                                <div class="form-group">
                                    <label for="contact">Mobile Number</label>
                                    <input type="text" value="<?php if(isset($contact)){ echo $contact;} ?>"
                                        class="form-control" name="contact" 
                                        data-bv-field="contact"
                                        id="contact" required
                                        >
                                </div>
                                <div class="form-group">
                                    <label for="email_address">Email Address</label>
                                    <input type="email"
                                        value="<?php if(isset($email_address)){ echo $email_address;} ?>"
                                        class="form-control" name="email_address"
                                        id="email_address" required
                                        >
                                </div>
                             

                                <hr>


                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-primary pull-right">Update Customer Information</button>
                                </div>
                            </form>


                        </div>

                    </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end page content-->

</div>
<!-- page wrapper end -->


<!--   modal begins here -->




<!-- Footer -->
<?php include"includes/footer.php"; ?>