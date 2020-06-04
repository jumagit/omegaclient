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

                    <h4 class="page-title">Create Order</h4>
                    <ol class="breadcrumb">

                        <li class="breadcrumb-item active">Add Order</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end container-fluid -->

    </div>
    <!-- page-title-box -->

    <div class="page-content-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card m-b-20">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Create Order</h4>
                          





                            <form class="form-horizontal pb-5" method="POST" action="#" id="createOrderForm">


                                <div class="container">

                                    <div class="card ">

                                        <div class="bg-dark">
                                            
                                            <h4 class="text-center text-white"><i class="mdi mdi-account-box"></i> Customer Information</h4>
                                        </div>
                                        <br>
                                          <div class="alert alert-info  font-weight-normal  alert-dismissible fade show"
                                role="alert"> <button type="button" class="close" data-dismiss="alert"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button> <strong> <i class=" mdi mdi-arrow-down-box"></i> </strong>Fill in customer information.
                               
                            </div>
                                        

                                        <div class="card-body bg-light">

                                            <div class="row">

                                        <div class="col-10 m-auto pb-3">


                                            <div class="form-group">
                                                <label class="control-label">Search Customers if Exist</label>
                                                <select class=" select2  form-control form-control-lg form-control form-control-lg-lg" name="customers"
                                                    id="customers" onchange="load_selected_customer_data(this.value)">
                                                    <option value="0" selected="selected" disabled="disabled">Search
                                                        Existing Customers</option>
                                                </select>
                                            </div>
                                        </div>

                                        <hr>



                                        <div class="col-md-6">
                                            <!--/form-group row-->
                                            <div class="form-group ">
                                                <label for="customerName" class=" control-label">customer Name</label>

                                                <input type="text" class="form-control form-control-lg" id="customerName"
                                                    name="customerName" required placeholder="customer Name"
                                                    autocomplete="off" />
                                                <small id="customerName_error"></small>
                                            </div>

                                            <!--/form-group row-->
                                            <div class="form-group ">
                                                <label for="customerContact" class=" control-label">customer
                                                    Contact</label>
                                                <input type="text" class="form-control form-control-lg" id="customerContact"
                                                    name="customerContact" placeholder="Contact Number" required />
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label for="emailAddress" class="control-label">Email Address</label>
                                                <input type="text" class="form-control form-control-lg" id="emailAddress"
                                                    placeholder="Enter Email Address" name="emailAddress" required />
                                            </div>

                                            <!--/form-group row-->
                                            <div class="form-group ">
                                                <label for="customerName" class=" control-label">customer
                                                    Address</label>

                                                <input type="text" class="form-control form-control-lg" id="address" name="address"
                                                    required placeholder="customer Address" />
                                            </div>


                                        </div>


                                    </div>
                                            


                                        </div>
                                    </div>

                                   

                                    

                                </div>


                                <hr>

                                <!-- upper customer information ends -->


                                <div class="container m-auto pb-5">

                                     <div class="card ">

                                        <div class="bg-dark">
                                            
                                            <h4 class="text-center text-white"><i class="mdi mdi-cart-plus"></i> Order Section</h4>
                                        </div>
                                        

                                        <div class="card-body bg-light">

                                 
                                    <div class="alert alert-info  font-weight-normal   alert-dismissible fade show"
                                        role="alert"> <button type="button" class="close" data-dismiss="alert"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button> <strong> <i class=" mdi mdi-arrow-down-box"></i> </strong> In this
                                        section, Select the Product from the dropdown and add the product to the cart
                                        form.
                                    </div>

                                    <table class="table table-striped table-inverse table-responsive" id="orderTable">
                                        <thead class="thead-inverse">
                                            <tr>
                                                <th><input type='checkbox' name='records'></td>
                                                </th>
                                                <th>Product Image</th>
                                                <th>Product Name</th>
                                                <th>Quantity Available</th>
                                                <th>Price</th>
                                                <th>Quantity Taken</th>
                                                <th>Total</th>
                                                <th>Remove</th>

                                            </tr>
                                        </thead>
                                        <tbody>


                                            <?php 

                                        $arrayNumber = 0;
                                        for($x = 1; $x < 4; $x++) { ?>


                                            <tr id="row<?php echo $x; ?>" class="<?php echo $arrayNumber; ?>">

                                                <td>

                                                    <div class="form-group">
                                                        <input type='checkbox' name='record'>
                                                    </div>
                                                </td>

                                                <td>

                                                    <div class="form-group">
                                                        <img src=""  width="50" height="50"
                                                            id="img<?php echo $x; ?>"
                                                            class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                                                            alt="" >
                                                    </div>
                                                </td>

                                                <td>

                                                    <div class="form-group">

                                                        <select class="custom-select" name="product_name[]"
                                                            id="product_name<?php echo $x; ?>"
                                                            onchange="getProductData(<?php echo $x; ?>)">
                                                            <option selected> ~~ Select Product ~~</option>
                                                            <?php
                                                                $productSql = "SELECT * FROM products WHERE quantity > 0 AND client_id = '{$_SESSION['client_id']}' ";
                                                                $productData = $connection->query($productSql);

                                                                while($row = mysqli_fetch_array($productData)) {									 		
                                                                echo "<option value='".$row['product_id']."' id='changeProduct".$row['product_id']."'>".$row['product_name']."</option>";
                                                                } // /while 

                                                                ?>
                                                        </select>
                                                    </div>

                                                </td>
                                                <td>

                                                    <div class="form-group">

                                                        <input type="text" name="quantity[]"
                                                            id="quantity<?php echo $x; ?>" class="form-control form-control-lg"
                                                            placeholder="">

                                                    </div>
                                                </td>
                                                <td>

                                                    <div class="form-group">

                                                        <input type="text" class="form-control form-control-lg" name="price[]"
                                                            id="price<?php echo $x; ?>">

                                                    </div>
                                                </td>

                                                <td>

                                                    <div class="form-group">

                                                        <input type="number" name="quantityTaken[]"
                                                            onchange="getTotal(<?php echo $x; ?>, this.value)"
                                                            id="quantityTaken<?php echo $x; ?>" class="form-control form-control-lg"
                                                            min="1">

                                                    </div>
                                                </td>



                                                <td>

                                                    <div class="form-group">

                                                        <input type="text" name="totalProductPrice[]"
                                                            id="totalProductPrice<?php echo $x; ?>" class="form-control form-control-lg"
                                                            disabled>

                                                    </div>
                                                </td>



                                                <td>

                                                    <div class="form-group">

                                                        <button class="btn btn-danger btn-lg " type="button"
                                                            onclick="deleteRow()">
                                                            X</button>

                                                    </div>

                                                </td>
                                            </tr>

                                            <?php
                                        $arrayNumber++;
                                        } // /for
			  		                    ?>

                                        </tbody>
                                    </table>

                                    

                                </div>

                            </div>




                                    <style>
                                        
                                        #due,#subTotal,#totalAmount,#grandTotal,#paymentType>option{
                                            font-size:24px !important;color:red;font-weight:bold;
                                        }#paid{ font-size:24px !important;color:green;font-weight:bold;}                                     

                                        
                                        
                                    </style>


                                    <hr>


                                    <div class="container" id="pay">


                                        <div class="card ">

                                        <div class="bg-dark">
                                            
                                            <h4 class="text-center text-white"> <i class="mdi mdi-credit-card-settings"></i> Payment Section</h4>
                                        </div>
                                        <br>
                                        <div class="alert alert-info  font-weight-normal   alert-dismissible fade show"
                                        role="alert"> <button type="button" class="close" data-dismiss="alert"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button> <strong> <i class=" mdi mdi-arrow-down-box"></i> </strong> In this
                                        section, fill in the form to pay.
                                    </div>
                                        

                                        <div class="card-body bg-light" style="border:2px solid lightblue;">

                                        <div class="row">


                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="subTotal" class="col-sm-12 control-label">Sub
                                                        Amount</label>
                                                    <div class="col-sm-12">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-dark text-white">UGX</span>
                                                            </div>
                                                                <input type="text" class="form-control form-control-lg" required id="subTotal"
                                                            name="subTotal" disabled="true" />
                                                        </div>
                                                    
                                                        <input type="hidden" class="form-control form-control-lg" required
                                                            id="subTotalValue" name="subTotalValue" />
                                                    </div>
                                                </div>
                                                <!--/form-group-->
                                                <!--/form-group-->

                                                     <div class="form-group row">
                                                    <label for="paymentStatus" class="col-sm-12 control-label">Payment
                                                        Status (check one Type only)</label>
                                                    <div class="col-sm-12">


                                                        <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="radio" id="empty" name="paymentStatus" value="1">
                                                          <label class="form-check-label" for="empty"> No Payment</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="radio" id="installment" value="2" name="paymentStatus">
                                                          <label class="form-check-label" for="installment">Installment</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="radio" id="full" value="3" name="paymentStatus">
                                                          <label class="form-check-label" for="full">Full Payment</label>
                                                        </div>


                                                    </div>
                                                </div>
                                               
                                                <!--/form-group-->
                                                
                                                <!--/form-group-->
                                                <div class="form-group row">
                                                    <label for="grandTotal" class="col-sm-12 control-label">Grand
                                                        Total</label>
                                                    <div class="col-sm-12">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-dark text-white">UGX</span>
                                                            </div>
                                                        <input type="text" class="form-control form-control-lg" id="grandTotal" required
                                                            name="grandTotal" disabled="true" />
                                                        </div>
                                                        <input type="hidden" class="form-control form-control-lg" id="grandTotalValue"
                                                            name="grandTotalValue" />
                                                    </div>
                                                </div>
                                                <!--/form-group-->
                                                
                                            </div>
                                            <!--/col-md-6-->

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="paid" class="col-sm-12 control-label">Paid Amount</label>
                                                    <div class="col-sm-12">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-dark text-white">UGX</span>
                                                            </div>
                                                        <input type="text" class="form-control form-control-lg" id="paid" name="paid"
                                                            autocomplete="off" onkeyup="paidAmount()" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/form-group-->
                                                <div class="form-group row">
                                                    <label for="due" class="col-sm-12 control-label">Due Amount</label>
                                                    <div class="col-sm-12">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-dark text-white">UGX</span>
                                                            </div>
                                                        <input type="text" class="form-control form-control-lg" id="due" name="due"
                                                            disabled="true" />
                                                        </div>
                                                        <input type="hidden" class="form-control form-control-lg" id="dueValue"
                                                            name="dueValue" />
                                                    </div>
                                                </div>
                                                <!--/form-group-->
                                                <div class="form-group row">
                                                    <label for="paymentType" class="col-sm-12 control-label">Payment
                                                        Method (check one method only)</label>
                                                    <div class="col-sm-12">


                                                        <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="radio" id="airtel" name="paymentType" value="1">
                                                          <label class="form-check-label" for="airtel"> <img src="assets/images/airtel.jpg" alt="" width="100"></label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="radio" id="mtn" value="2" name="paymentType">
                                                          <label class="form-check-label" for="mtn"> <img src="assets/images/mtn.jpg" alt="" width="100"></label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="radio" id="cente" value="3" name="paymentType">
                                                          <label class="form-check-label" for="cente"> <img src="assets/images/cente.png" alt="" width="100"></label>
                                                        </div>


                                                    </div>
                                                </div>
                                               
                                               
                                            </div>
                                            <!--/col-md-6-->




                                                </div>


                                            </div>



                                            <div class="card-footer">
                                                

                                                <div class="form-group">

                                    <div class=" btn-group btn-group-lg float-right">


                                        <button type="button" class="btn btn-primary " onclick="addRow()" id="addRowBtn">
                                            <i class="mdi mdi-plus-circle"></i> Add Row </button>

                                        <button type="submit" id="createOrderBtn" class="btn btn-success"><i
                                                class="fas fa-paper-plane"></i> Save
                                            Changes</button>

                                        <button type="reset" class="btn btn-warning" onclick="resetOrderForm()"><i
                                                class="fas fa-times-circle"></i> Reset
                                        </button>

                                    </div>
                                </div>


                                            </div>

                                        </div>

                                    </div>



                                </div>



                                
                            </form>


                            <!-- row add btn -->

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