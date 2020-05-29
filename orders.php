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

                    <h4 class="page-title">Orders</h4>
                    <ol class="breadcrumb">

                        <li class="breadcrumb-item active">Orders</li>
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
                    <div class="card m-b-20" >
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Orders</h4>

                            <div class="alert alert-dark bg-dark  font-weight-normal  text-white alert-dismissible fade show"
                                role="alert"> <button type="button" class="close" data-dismiss="alert"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button> <strong> <i class=" mdi mdi-arrow-down-box"></i> </strong>Here you can view
                                Orders of Different Customers.
                            </div>


                            <div class="d-block float-right" style="">

                                <a href="create_order.php" class="btn btn-primary waves-effect waves-light"> <i
                                        class="mdi mdi-plus-circle"></i> Add Order</a>


                            </div>


                            <table id="datatable-buttons"
                                class="table table-striped table-bordered dt-responsive nowrap text-center"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Order Date</th>
                                        <th>Customer Name</th>
                                        <th>Contact</th>
                                        <th>Total Order Item</th>
                                        <th>Payment Status</th>
                                        <th><i class="fa fa-edit"></i></th>
                                        <th><i class="fa fa-eye"></i></th>
                                        <th><i class="fas fa-credit-card"></i></th>
                                        <th><i class='fa fa-print'></i></th>
                                        <th><i class='fa fa-envelope'></i></th>
                                        <th><i class="fa fa-trash"></i></th>
                                    </tr>
                                </thead>


                                <tbody>

                                    <?php echo fetch_orders(); ?>

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

<!-- Footer -->


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true" id="paymentOrderModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #015C9B;">
                <h5 class="modal-title text-white mt-0" id="myLargeModalLabel"> <i class="fa fa-credit-card">   </i> Edit Payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body" style="max-height:500px; overflow:auto;">
                <div class="form-group row">
                    <label for="due" class="col-sm-3 control-label">Due Amount</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="due" name="due" disabled="true" required="required" />
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
                <div class="form-group row">
                    <label for="clientContact" class="col-sm-3 control-label">Payment Type</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="paymentType" id="paymentType" required="required">
                            <option value="">~~SELECT~~</option>
                            <option value="1">Cheque</option>
                            <option value="2">Cash</option>
                            <option value="3">Credit Card</option>
                        </select>
                    </div>
                </div>
                <!--/form-group-->
                <div class="form-group row">
                    <label for="clientContact" class="col-sm-3 control-label">Payment Status</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="paymentStatus" id="paymentStatus" required="required">
                            <option value="">~~SELECT~~</option>
                            <option value="1">Full Payment</option>
                            <option value="2">Advance Payment</option>
                            <option value="3">No Payment</option>
                        </select>
                    </div>
                </div>
                <!--/form-group-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="fa fa-close"></i>
                        Close</button>
                    <button type="button" class="btn btn-primary" id="updatePaymentOrderBtn"
                        data-loading-text="Loading..."> <i class="fa fa-save"></i> Save changes</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->





<?php include"includes/footer.php"; ?>