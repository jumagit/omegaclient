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

                    <h4 class="page-title">Categories</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Plane Page</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Plane Page</li>
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

                            <h4 class="mt-0 header-title">Edit Order</h4>
                            <div class="alert alert-dark bg-dark  font-weight-normal  text-white alert-dismissible fade show"
                                role="alert"> <button type="button" class="close" data-dismiss="alert"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button> <strong> <i class=" mdi mdi-arrow-down-box"></i> </strong>Here you can Edit
                                Customer Order
                            </div>

                            <?php

                               $orderId = $_GET['id'];

                              $sql = "SELECT orders.order_id, orders.order_date, orders.client_name, orders.client_contact, orders.sub_total, orders.vat, orders.total_amount, orders.discount, orders.grand_total, orders.paid, orders.due, orders.payment_type, orders.payment_status,orders.payment_place,orders.gstn FROM orders  
                                WHERE orders.order_id = {$orderId}";

                              $result = query($sql);
                              $data = $result->fetch_row();
                              ?>


                            <hr>


                            <form class="form-horizontal pb-5" method="POST" action="#" id="editOrderForm">


                                <div class="col-md-8 m-auto">


                                    <div class="form-group row">
                                        <label for="orderDate" class="col-sm-4 control-label">Order Date</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="orderDate" name="orderDate"
                                                value="<?php echo $data[1];  ?>" required />
                                        </div>
                                    </div>
                                    <!--/form-group row-->
                                    <div class="form-group row">
                                        <label for="customerName" class="col-sm-4 control-label">customer Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="customerName"
                                                name="customerName" required value="<?php echo $data[2];  ?>"
                                                autocomplete="off" />
                                        </div>
                                    </div>
                                    <!--/form-group row-->
                                    <div class="form-group row">
                                        <label for="customerContact" class="col-sm-4 control-label">customer
                                            Contact</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="customerContact"
                                                name="customerContact" value="<?php echo $data[3];  ?>" required
                                                autocomplete="off" />
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


                                             $orderId = $_GET['id'];

                                              $orderItemSql = "SELECT order_item.order_item_id, order_item.order_id, order_item.product_id, order_item.quantityTaken, order_item.total FROM order_item WHERE order_item.order_id = '$orderId' ";
                                              $orderItemResult = query($orderItemSql);

                                             $arrayNumber = 0;
                                              $x = 1;
                                              while($orderItemData = mysqli_fetch_array($orderItemResult)) { ?>

                                            <tr id="row<?php echo $x; ?>" class="<?php echo $arrayNumber; ?>">

                                                <td>

                                                    <div class="form-group">
                                                        <input type='checkbox' name='record'>
                                                    </div>
                                                </td>

                                                <td>

                                                    <div class="form-group">

                                                        <?php

                                                    $productSql = "SELECT product_id, product_image FROM products WHERE  status == 1 AND quantity != 0 AND client_id =  '{$_SESSION['client_id']}' ";
                                                    $productData = query($productSql);

                                                    while($row = mysqli_fetch_array($productData)) {                     

                                                    if($row['product_id'] == $orderItemData['product_id']) { 

                                                        $url = substr($row['product_image'],3);

                                                        echo' <img src="'.$url.'" alt="image" width="50" height="50" name="product_image[]"
                                                        id="product_image<?php echo $x; ?>"
                                                        class="img-fluid
                                                        ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                                                        alt="Product Image">';


                                                        }
                                                        else {



                                                        }


                                                        } //while

                                                        ?>

                                                    </div>
                                                </td>

                                                <td>

                                                    <div class="form-group">

                                                        <select class="custom-select" name="product_name[]"
                                                            id="product_name<?php echo $x; ?>"
                                                            onchange="getProductData(<?php echo $x; ?>)">
                                                            <!--   <option selected> ~~ Select Product ~~</option> -->
                                                            <?php
                                                                $productSql = "SELECT product_id, product_name FROM products WHERE quantity > 0 AND client_id =  '{$_SESSION['client_id']}' ";
                                                                $productData = $connection->query($productSql);

                                                                while($row = mysqli_fetch_array($productData)) { 

                                                                  $selected = "";
                                                                  if($row['product_id'] == $orderItemData['product_id']) {
                                                                    $selected = "selected";
                                                                  } else {
                                                                    $selected = "";
                                                                  }

                                                                  echo "<option value='".$row['product_id']."' id='changeProduct".$row['product_id']."' ".$selected." >".$row['product_name']."</option>";
                                                                } // /while 


                                                              

                                                                ?>
                                                        </select>
                                                    </div>

                                                </td>



                                                <td>

                                                    <div class="form-group">

                                                        <?php

                                                        $productSql = "SELECT product_id, quantity FROM products WHERE  status = 1 AND quantity != 0";
                                                        $productData = query($productSql);

                                                        while($row = mysqli_fetch_array($productData)) {                     
                                                        
                                                          if($row['product_id'] == $orderItemData['product_id']) { 
                                                           
                                                            echo'<input type="text" name="quantity[]"
                                                            id="available_quantity'.$row['product_id'].'" value="'.$row['quantity'].'" class="form-control"  />';
                                                        }
                                                           else {
                                                        
                                                          }

                                                         
                                                        } //while

                                                      ?>



                                                    </div>
                                                </td>



                                                <td>

                                                    <div class="form-group">

                                                        <?php

                                                    $productSql = "SELECT product_id, price FROM products WHERE  status = 1 AND quantity != 0";
                                                    $productData = query($productSql);

                                                    while($row = mysqli_fetch_array($productData)) {                     

                                                    if($row['product_id'] == $orderItemData['product_id']) { 
                                                    
                                                        echo'<input type="text" class="form-control" name="price[]"
                                                        id="price'.$x.'"  value="'.$row['price'].'"  />';
                                                    }
                                                    else {

                                                    }




                                                    
                                                    } //while

                                                    ?>





                                                    </div>
                                                </td>

                                                <td>

                                                    <div class="form-group">

                                                        <input type="number" name="quantityTaken[]"
                                                            onchange="getTotal(<?php echo $x; ?>, this.value)"
                                                            id="quantityTaken<?php echo $x; ?>" class="form-control"
                                                            min="1"
                                                            value="<?php echo $orderItemData['quantityTaken']; ?>">

                                                    </div>
                                                </td>



                                                <td>

                                                    <div class="form-group">

                                                        <input type="text" name="totalProductPrice[]"
                                                            id="totalProductPrice<?php echo $x; ?>" class="form-control"
                                                            value="<?php echo $orderItemData['total']; ?>" disabled>


                                                        <input type="hidden" name="totalRowPrice[]"
                                                            id="totalRowPrice<?php echo $x; ?>" class="form-control"
                                                            value="<?php echo $orderItemData['total']; ?>">



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
                                        $x++;
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
                                                        <input type="text" class="form-control"
                                                            value="<?php echo $data[4]; ?>" required id="subTotal"
                                                            name="subTotal" disabled="true" />
                                                        <input type="hidden" class="form-control"
                                                            value="<?php echo $data[4]; ?>" required id="subTotalValue"
                                                            name="subTotalValue" />
                                                    </div>
                                                </div>
                                                <!--/form-group-->
                                                <!--/form-group-->
                                                <div class="form-group row">
                                                    <label for="totalAmount" class="col-sm-3 control-label">Total
                                                        Amount</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="totalAmount"
                                                            value="<?php echo $data[6]; ?>" required name="totalAmount"
                                                            disabled="true" />
                                                        <input type="hidden" class="form-control" id="totalAmountValue"
                                                            value="<?php echo $data[6]; ?>" required
                                                            name="totalAmountValue" />
                                                    </div>
                                                </div>
                                                <!--/form-group-->
                                                <div class="form-group row">
                                                    <label for="discount"
                                                        class="col-sm-3 control-label">Discount</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="discount" required
                                                            value="<?php echo $data[7]; ?>" name="discount"
                                                            onkeyup="discountFunc()" autocomplete="off" />
                                                    </div>
                                                </div>
                                                <!--/form-group-->
                                                <div class="form-group row">
                                                    <label for="grandTotal" class="col-sm-3 control-label">Grand
                                                        Total</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="grandTotal" required
                                                            name="grandTotal" disabled="true"
                                                            value="<?php echo $data[8]; ?>" />
                                                        <input type="hidden" class="form-control" id="grandTotalValue"
                                                            name="grandTotalValue" value="<?php echo $data[8]; ?>" />
                                                    </div>
                                                </div>
                                                <!--/form-group-->
                                                <div class="form-group row">
                                                    <label for="vat"
                                                        class="col-sm-3 control-label gst"><?php if($data[13] == 2) {echo "IGST 18%";} else echo "VAT 18%"; ?></label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="vat" name="gstn"
                                                            value="<?php echo $data[5]; ?>" readonly="true" />
                                                        <input type="hidden" class="form-control" id="vatValue"
                                                            value="<?php echo $data[5]; ?>" name="vatValue" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/col-md-6-->

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="paid" class="col-sm-3 control-label">Paid Amount</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="paid" name="paid"
                                                            value="<?php echo $data[9]; ?>" autocomplete="off"
                                                            onkeyup="paidAmount()" required />
                                                    </div>
                                                </div>
                                                <!--/form-group-->
                                                <div class="form-group row">
                                                    <label for="due" class="col-sm-3 control-label">Due Amount</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="due" name="due"
                                                            value="<?php echo $data[10]; ?>" disabled="true" />
                                                        <input type="hidden" class="form-control" id="dueValue"
                                                            value="<?php echo $data[10]; ?>" name="dueValue" />
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
                                                        <select class="form-control" name="paymentType" id="paymentType"
                                                            required>
                                                            <option value="">~~SELECT~~</option>
                                                            <option value="1" <?php if($data[11] == 1) {
                                                                echo "selected";
                                                              } ?>>Cheque</option>
                                                            <option value="2" <?php if($data[11] == 2) {
                                                                echo "selected";
                                                              } ?>>Cash</option>
                                                            <option value="3" <?php if($data[11] == 3) {
                                                                echo "selected";
                                                              } ?>>Credit Card</option>
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
                                                            <option value="1" <?php if($data[12] == 1) {
                                                                echo "selected";
                                                              } ?>>Full Payment</option>
                                                            <option value="2" <?php if($data[12] == 2) {
                                                                echo "selected";
                                                              } ?>>Advance Payment</option>
                                                            <option value="3" <?php if($data[10] == 3) {
                                                                echo "selected";
                                                              } ?>>No Payment</option>
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
                                                            <option value="1" <?php if($data[13] == 1) {
                                                                echo "selected";
                                                              } ?>>In Uganda</option>
                                                            <option value="2" <?php if($data[13] == 2) {
                                                                echo "selected";
                                                              } ?>>Out of Uganda</option>
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


                                        <input type="hidden" name="orderId" id="orderId"
                                            value="<?php echo $_GET['id']; ?>" />

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