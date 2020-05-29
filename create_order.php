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
                            <div class="alert alert-dark bg-dark  font-weight-normal  text-white alert-dismissible fade show"
                                role="alert"> <button type="button" class="close" data-dismiss="alert"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button> <strong> <i class=" mdi mdi-arrow-down-box"></i> </strong>Here you can create
                                Customer Order
                            </div>


                           


                            <form class="form-horizontal pb-5" method="POST" action="#"
                                id="createOrderForm">


                                <div class="col-md-12 m-auto">

                                          <h5 class="text-center pt-2 ">Customer Information</h5>
                                           <hr>

                                    <div class="row">
                                        

                                        <div class="col-md-6">


                                                     <div class="form-group ">
                                                       <label for="orderDate" class="control-label">Order Date</label>                                    
                                                        <input type="text" class="form-control" id="orderDate" name="orderDate"
                                                            required  placeholder="Select Date" />
                                                    </div>
                                                
                                                <!--/form-group row-->
                                                    <div class="form-group ">
                                                    <label for="customerName" class=" control-label">customer Name</label>
                                                 
                                                        <input type="text" class="form-control" id="customerName"
                                                            name="customerName" required placeholder="customer Name" autocomplete="off" />
                                                    </div>
                                                
                                                <!--/form-group row-->
                                                <div class="form-group ">
                                                    <label for="customerContact" class=" control-label">customer
                                                        Contact</label>
                                                    
                                                        <input type="text" class="form-control" id="customerContact"
                                                            name="customerContact" placeholder="Contact Number" required
                                                           />
                                                    </div>
                                                
                                                        


                                        </div>


                                        <div class="col-md-6">


                                               <div class="form-group ">
                                                       <label for="orderDate" class="control-label">Email Address</label>                                    
                                                        <input type="text" class="form-control" id="emailAddress" placeholder="Enter Email Address" name=" emailAddress"
                                                            required />
                                                    </div>
                                                
                                                <!--/form-group row-->
                                                    <div class="form-group ">
                                                    <label for="customerName" class=" control-label">customer Address</label>
                                                 
                                                        <input type="text" class="form-control" id="address"
                                                            name="address" required placeholder="customer Address" />
                                                    </div>
                                                
                                                <!--/form-group row-->
                                                <div class="form-group ">
                                                    <label for="customerContact" class=" control-label">customer
                                                        Contact</label>
                                                    
                                                        <input type="text" class="form-control" id="customerContact"
                                                            name="customerContact" placeholder="Contact Number" required
                                                           />
                                                    </div>
                                                
                                            

                                        </div>


                                    </div>



                                  


                                </div>


                                <hr>

                                <!-- upper customer information ends -->


                                <div class="container m-auto pb-5">

                                    <h5 class="text-center pt-2 ">Order Section</h5>
                                    <div class="alert alert-dark bg-dark  font-weight-normal  text-white alert-dismissible fade show"
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
                                                        <img src="" alt="image" width="50" height="50"
                                                            id="img<?php echo $x; ?>"
                                                            class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                                                            alt="">
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
                                                            id="quantity<?php echo $x; ?>" class="form-control" 
                                                            placeholder="">

                                                    </div>
                                                </td>
                                                <td>

                                                    <div class="form-group">

                                                        <input type="text" class="form-control" name="price[]"
                                                            id="price<?php echo $x; ?>" >

                                                    </div>
                                                </td>

                                                <td>

                                                    <div class="form-group">

                                                        <input type="number" name="quantityTaken[]"
                                                            onchange="getTotal(<?php echo $x; ?>, this.value)" 
                                                            id="quantityTaken<?php echo $x; ?>" class="form-control"
                                                            min="1">

                                                    </div>
                                                </td>



                                                <td>

                                                    <div class="form-group">

                                                        <input type="text" name="totalProductPrice[]"
                                                            id="totalProductPrice<?php echo $x; ?>" class="form-control"
                                                            disabled>

                                                    </div>
                                                </td>



                                                <td>

                                                    <div class="form-group">

                                                        <button class="btn btn-danger " type="button"
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

                                    <hr>


                                    <div class="container">

                                        <div class="row">


                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="subTotal" class="col-sm-3 control-label">Sub
                                                        Amount</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" required id="subTotal"
                                                            name="subTotal" disabled="true" />
                                                        <input type="hidden" class="form-control" required id="subTotalValue"
                                                            name="subTotalValue" />
                                                    </div>
                                                </div>
                                                <!--/form-group-->
                                                <!--/form-group-->
                                                <div class="form-group row">
                                                    <label for="totalAmount" class="col-sm-3 control-label">Total
                                                        Amount</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="totalAmount" required
                                                            name="totalAmount" disabled="true" />
                                                        <input type="hidden" class="form-control" id="totalAmountValue" required
                                                            name="totalAmountValue" />
                                                    </div>
                                                </div>
                                                <!--/form-group-->
                                                <div class="form-group row">
                                                    <label for="discount"
                                                        class="col-sm-3 control-label">Discount</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="discount" required
                                                            name="discount" onkeyup="discountFunc()"
                                                            autocomplete="off" />
                                                    </div>
                                                </div>
                                                <!--/form-group-->
                                                <div class="form-group row">
                                                    <label for="grandTotal" class="col-sm-3 control-label">Grand
                                                        Total</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="grandTotal" required
                                                            name="grandTotal" disabled="true" />
                                                        <input type="hidden" class="form-control" id="grandTotalValue"
                                                            name="grandTotalValue" />
                                                    </div>
                                                </div>
                                                <!--/form-group-->
                                                <div class="form-group row">
                                                    <label for="vat" class="col-sm-3 control-label gst">GST 18%</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="vat" name="gstn"
                                                            readonly="true" />
                                                        <input type="hidden" class="form-control" id="vatValue"
                                                            name="vatValue" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/col-md-6-->

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="paid" class="col-sm-3 control-label">Paid Amount</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="paid" name="paid"
                                                            autocomplete="off" onkeyup="paidAmount()" required/>
                                                    </div>
                                                </div>
                                                <!--/form-group-->
                                                <div class="form-group row">
                                                    <label for="due" class="col-sm-3 control-label">Due Amount</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="due" name="due"
                                                            disabled="true" />
                                                        <input type="hidden" class="form-control" id="dueValue"
                                                            name="dueValue" />
                                                    </div>
                                                </div>
                                                <!--/form-group-->
                                                <div class="form-group row">
                                                    <label for="customerContact" class="col-sm-3 control-label">Payment
                                                        Type</label>
                                                    <div class="col-sm-9">
                                                    <!-- <div class="btn-group">

                                                    <button type="button" class="btn btn-primary">MTN Momo</button>
                                                    <button type="button" class="btn btn-danger">Airtel Money</button>
                                                    <button type="button" class="btn btn-dark"> <i class="fa fa-dollar-sign text-light"></i>  Cash</button>
                                                    
                                                    </div> -->
                                                        <select class="form-control" name="paymentType"
                                                            id="paymentType" required>
                                                            <option value="">~~SELECT~~</option>
                                                            <option value="1">Cheque</option>
                                                            <option value="2">Cash</option>
                                                            <option value="3">Credit Card</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--/form-group-->
                                                <div class="form-group row">
                                                    <label for="customerContact" class="col-sm-3 control-label">Payment
                                                        Status</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" required name="paymentStatus"
                                                            id="paymentStatus">
                                                            <option value="">~~SELECT~~</option>
                                                            <option value="1">Full Payment</option>
                                                            <option value="2">Advance Payment</option>
                                                            <option value="3">No Payment</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--/form-group-->
                                                <div class="form-group row">
                                                    <label for="customerContact" class="col-sm-3 control-label">Payment
                                                        Place</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" required name="paymentPlace"
                                                            id="paymentPlace">
                                                            <option value="">~~SELECT~~</option>
                                                            <option value="1">In Uganda</option>
                                                            <option value="2">Out Of Uganda</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--/form-group-->
                                            </div>
                                            <!--/col-md-6-->




                                        </div>

                                    </div>



                                </div>



                                <div class="form-group">

                                    <div class=" btn-group float-right">


                                        <button type="button" class="btn btn-primary" onclick="addRow()" id="addRowBtn">
                                            <i class="mdi mdi-plus-circle"></i> Add Row </button>

                                        <button type="submit" id="createOrderBtn" class="btn btn-success"><i
                                                class="mdi mdi-checked"></i> Save
                                            Changes</button>

                                        <button type="reset" class="btn btn-warning" onclick="resetOrderForm()"><i
                                                class="mdi mdi-erase"></i> Reset
                                        </button>

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