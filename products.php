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

                    <h4 class="page-title">Products</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Agroxa</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Products</li>
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
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">View All Stock</h4>

                            <div class="alert alert-dark bg-dark  font-weight-normal  text-white alert-dismissible fade show"
                                role="alert"> <button type="button" class="close" data-dismiss="alert"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button> <strong> <i class=" mdi mdi-arrow-down-box"></i> </strong>Here you can view all Stock
                            </div>
                          
                            <div class="d-block float-right" style="">
                                <button type="button" class="btn btn-warning waves-effect waves-light"
                                    data-toggle="modal" data-target=".bs-example-modal-lg"> <i
                                        class="mdi mdi-plus-circle"></i> Add Product</button>
                            </div>


                            <table id="datatable-buttons"
                                class="table table-striped table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Quantity</th>                                       
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th><i class='fa fa-battery-full'></i> Available</th>
                                        <th><i class='fa fa-battery-empty'></i> Not Available</th>
                                        <th><i class="fa fa-edit"></i></th>
                                        <th><i class="fa fa-trash"></i></th>
                                    </tr>
                                </thead>


                                <tbody>


                               <?php  fetch_products(); ?>
                                </tbody>
                            </table>
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



<!--  Modal content for adding products -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header text-white"style="background-color: #015C9B;">
                <h5 class="modal-title mt-0" id="myLargeModalLabel"> <i class="mdi mdi-plus-circle"></i> Add Product
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <div class=" ">
                    <div class="card-body">



                        <div class="alert alert-dark bg-dark  font-weight-normal  text-white alert-dismissible fade show"
                            role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button> <strong> <i class=" mdi mdi-arrow-down-box"></i> </strong> Here you can add a
                            Product for Sale
                        </div>

                        <form class="form-horizontal" id="submitProductForm"
                             enctype="multipart/form-data">
                            

                            <div class="modal-body" style="max-height:450px; overflow:auto;">

                             

                                <div class="form-group row">
                                    <label for="productImage" class="col-sm-3 control-label">Product Image: </label>
                                    <label class="col-sm-1 control-label">: </label>
                                    <div class="col-sm-8">
                                        <!-- the avatar markup -->
                                        <div id="kv-avatar-errors-1" class="center-block" style="display:none;"></div>
                                        <div class="kv-avatar center-block">
                                            <input type="file" class="form-control" id="productImage"
                                                placeholder="Product Name" name="productImage" class="file-loading"
                                                style="width:auto;" />
                                        </div>

                                    </div>
                                </div> <!-- /form-group-->

                                <div class="form-group row">
                                    <label for="productName" class="col-sm-3 control-label">Product Name: </label>
                                    <label class="col-sm-1 control-label">: </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="productName"
                                            placeholder="Product Name" name="productName" autocomplete="off">
                                    </div>
                                </div> <!-- /form-group-->

                                <div class="form-group row">
                                    <label for="quantity" class="col-sm-3 control-label">Quantity: </label>
                                    <label class="col-sm-1 control-label">: </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="quantity" placeholder="Quantity"
                                            name="quantity" autocomplete="off">
                                    </div>
                                </div> <!-- /form-group-->

                                <div class="form-group row">
                                    <label for="quantity" class="col-sm-3 control-label">Price: </label>
                                    <label class="col-sm-1 control-label">: </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="price"   data-type="currency" placeholder="Product Price"
                                            name="price" autocomplete="off">
                                    </div>
                                </div> <!-- /form-group-->

                               

                                <!-- <div class="form-group row">
                                    <label for="rate" class="col-sm-3 control-label">Rate: </label>
                                    <label class="col-sm-1 control-label">: </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="rate" placeholder="Rate" name="rate"
                                            autocomplete="off">
                                    </div>
                                </div> -->

                               
                                <div class="form-group row">
                                    <label for="categoryName" class="col-sm-3 control-label">Category Name: </label>
                                    <label class="col-sm-1 control-label">: </label>
                                    <div class="col-sm-8">
                                        <select type="text" class="form-control" id="categoryName"
                                            placeholder="Product Name" name="categoryName">
                                            <option value="">~~SELECT~~</option>
                                            <?php 
				      	       $sql = "SELECT categories_id, categories_name FROM categories WHERE categories_active = 1 AND client_id = '{$_SESSION['client_id']}' ";
								$result = $connection->query($sql);

								while($row = $result->fetch_array()) {
									echo "<option value='".$row[0]."'>".$row[1]."</option>";
								} // while
								
				      	?>
                                        </select>
                                    </div>
                                </div> <!-- /form-group-->

                                <div class="form-group row">
                                    <label for="productStatus" class="col-sm-3 control-label">Status: </label>
                                    <label class="col-sm-1 control-label">: </label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="productStatus" name="productStatus">
                                            <option value="">~~SELECT~~</option>
                                            <option value="1">Available</option>
                                            <option value="2">Not Available</option>
                                        </select>
                                    </div>
                                </div> <!-- /form-group-->
                            </div> <!-- /modal-body -->

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal"> <i
                                        class="glyphicon glyphicon-remove-sign"></i> Close</button>

                                <button type="submit" class="btn btn-primary" id="createProductBtn"
                                    data-loading-text="Loading..." autocomplete="off"> <i
                                        class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
                            </div> <!-- /modal-footer -->
                        </form> <!-- /.form -->

                    </div>
                </div>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Footer -->
<?php include"includes/footer.php"; ?>