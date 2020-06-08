<?php include"includes/header.php"; ?>
<!-- Navigation Bar-->
<?php include"includes/navigation.php"; ?>
<!-- End Navigation Bar-->

<!-- page wrapper start -->
<div class="wrapper">
    <div class="page-title-box">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12 text-center">
                    

                    <h2 class=""><i class="mdi mdi-credit-card"></i> Payments</h2>
                    
                </div>
            </div>
        </div>
        <!-- end container-fluid -->

        <?php 


          if (isset($_GET['id'])) {  

            $id = base64_decode($_GET['id']);  

           $sql = query("SELECT * FROM orders WHERE order_id = '$id'");

            if(mysqli_num_rows($sql) > 0) {

            while ($row = mysqli_fetch_array($sql)) {


              $due = $row['due'];
              $grandTotal =$row['grand_total'];
              $paidAmount = $row['paid'];
              $customer_id = $row['customer_id'];

                          } 
                      }
         
               }


               //payment update



         ?>

    </div>
    <!-- page-title-box -->

    <div class="page-content-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                       
                <div class="card-body p-20 m-30 " style="border: 1px solid lightgray;margin:30px;">

                    <h4 class="mt-0 ">Payments</h4>

                

                    <div class="alert alert-info  font-weight-normal  alert-dismissible fade show"
                        role="alert"> <button type="button" class="close" data-dismiss="alert"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> <strong> <i class=" mdi mdi-arrow-down-box"></i> </strong>Here you can edit  Make Payments.
                    </div>

                     <hr>

                    <form id="updatePayment" method="POST" action="">


                    <div class="form-group row">
                            <label for="due" class="col-sm-3 control-label">Due Amount</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="due" name="due" value="<?php echo $due; ?>" disabled="true" required="required" />
                                 <input type="hidden" name="customerId" value="<?php echo $customer_id; ?>">
                                <input type="hidden" name="orderId" value="<?php echo $id; ?>">
                                <input type="hidden" name="paidAmount" value="<?php echo $paidAmount; ?>">
                                <input type="hidden" name="grandTotal" value="<?php echo $grandTotal; ?>">
                            </div>
                   </div>
                <!--/form-group-->
                    <div class="form-group row">
                        <label for="payAmount" class="col-sm-3 control-label">Pay Amount</label>
                        <div class="col-sm-9">
                            
                            <input type="text" class="form-control" id="payAmount" name="payAmount" required="required" />
                        </div>
                    </div>



                 <!--/form-group-->
                <div class="form-group row ">
                        <label for="paymentStatus" class="col-sm-3 control-label">Payment Status</label>
                        <div class="col-sm-9">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" required="required"
                                    id="empty" name="paymentStatus" value="1">
                                <label class="form-check-label" for="empty"> No
                                    Payment</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" required="required"
                                    id="installment" value="2" name="paymentStatus">
                                <label class="form-check-label"
                                    for="installment">Installment</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" required="required"
                                    id="full" value="3" name="paymentStatus">
                                <label class="form-check-label" for="full">Full
                                    Payment</label>
                            </div>

                        </div>
                </div>
              


                <!--/form-group-->
                <div class="form-group row">
                        <label for="clientContact" class="col-sm-3 control-label">Payment Type</label>
                        <div class="col-sm-9">
                             <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" required="required"
                                    id="airtel" name="paymentType" value="1">
                                <label class="form-check-label" for="airtel"> <img
                                        src="assets/images/airtel.jpg" alt=""
                                        width="100"></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" required="required"
                                    id="mtn" value="2" name="paymentType">
                                <label class="form-check-label" for="mtn"> <img
                                        src="assets/images/mtn.jpg" alt=""
                                        width="100"></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio"
                                    id="cente" value="3" name="paymentType" required="required">
                                <label class="form-check-label" for="cente"> <img
                                        src="assets/images/cente.png" alt=""
                                        width="100"></label>
                            </div>

                        </div>
                </div>
                   
                    <button type="submit" name="update" class="btn btn-primary btn-lg btn-block waves-effect waves-light">
                                        <i class="mdi mdi-content-save"></i> Update Payment
                                    </button>

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