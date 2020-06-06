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
                    
                    <h2 class="text-center"> <i class="fa fa-plus-circle"></i> Add Customer</h2>
                   
                </div>
            </div>


            
                    
        </div>
        <!-- end container-fluid -->

        <?php 

    error_reporting(E_ALL);




         ?>

    </div>
    <!-- page-title-box -->

    <div class="page-content-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">


                       
                        <div class="card-body p-20 m-30 " style="border: 1px solid lightgray;margin:30px;">

                            <h4 class="mt-0 "> Add Customer</h4>

                            

                            <div class="alert alert-info  font-weight-normal  alert-dismissible fade show"
                                role="alert"> <button type="button" class="close" data-dismiss="alert"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button> <strong> <i class=" mdi mdi-arrow-down-box"></i> </strong>Here you can add  Customer .
                            </div>

                             <hr>

                            <form  method="post" action="" id="addCustomerForm">


                              <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">


                                     <div class="form-group">
                                    <label for="customer_names">Full Name</label>
                                    <input type="text" value=""
                                        class="form-control" name="customer_names"
                                        placeholder="Enter Customer Name" id="customer_names"
                                        required >
                                        <small id="customer_names_error"></small>
                                      </div>


                                 <div class="form-group">
                                    <label for="address">Customer Address</label>
                                    <input type="text" value=""
                                        class="form-control" placeholder="Enter Customer Address" 
                                        data-bv-field="address" id="address" name="address"
                                        required >
                                         <small id="address_error"></small>
                                       
                                </div>
                                    


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    
                                     <div class="form-group">
                                    <label for="contact">Mobile Number (256-7xx-xxx-xxx)</label>
                                    <input type="text" value=""
                                        class="form-control" name="contact" 
                                        data-bv-field="contact"  placeholder="Mobile Number" 
                                        id="contact" required
                                        >
                                         <small id="contact_error"></small>
                                </div>
                                <div class="form-group">
                                    <label for="email_address">Email Address</label>
                                    <input type="email"
                                        value=""
                                        class="form-control" name="email_address" placeholder="Enter Email Address" 
                                        id="email_address" required
                                        >

                                         <small id="email_address_error"></small>
                                </div>
                             


                                </div>

                            </div>


                               
                               

                              

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Add Customer</button>
                                </div>
                            </form>


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