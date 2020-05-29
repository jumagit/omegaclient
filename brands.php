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

                    <h4 class="page-title">Brands</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Brands</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Brands</li>
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

                            <h4 class="mt-0 header-title">View All Brands</h4>
                           
                            <div class="alert alert-dark bg-dark  font-weight-normal  text-white alert-dismissible fade show"
                                role="alert"> <button type="button" class="close" data-dismiss="alert"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button> <strong> <i class=" mdi mdi-arrow-down-box"></i> </strong>Here you view All registered Brands
                            </div>

                            <div class="d-block float-right" style="">
                                <button type="button" class="btn btn-warning waves-effect waves-light"
                                    data-toggle="modal" data-target=".bs-example-modal-lg"> <i
                                        class="mdi mdi-plus-circle"></i> Add Brand</button>
                            </div>


                            <table id="datatable-buttons"
                                class="table table-striped table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Brand Name</th>
                                        <th>Brand Status</th>
                                        <td><i class='fa fa-battery-full'></i> Available</td>
                                        <td><i class='fa fa-battery-empty'></i> Not Available</td>
                                        <td><i class='fa fa-edit'></i></td>
                                        <td><i class='fa fa-trash'></i></td>
                                    </tr>
                                </thead>


                                <tbody>



                                   <?php echo fetch_brands();  ?>
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
            <div class="modal-header text-white" style="background-color: #015C9B;">
                <h5 class="modal-title mt-0" id="myLargeModalLabel"> <i class="mdi mdi-plus-circle"></i> Add Brand</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <div class="card m-b-20">
                    <div class="card-body">



                        <div class="alert alert-dark bg-dark  font-weight-normal  text-white alert-dismissible fade show"
                            role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button> <strong> <i class=" mdi mdi-arrow-down-box"></i> </strong> Here you can add a
                            Brand
                        </div>

                        <form action="" id="addBrandForm">

                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="brand_name">Brand Name :</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="brand_name" class="form-control"
                                        placeholder="Enter Brand Name">
                                </div>
                            </div>



                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="password">Status :</label>
                                </div>
                                <div class="col-sm-9">
                                    <select name="brandStatus" id="brandStatus" class="custom-select">
                                        <option value="#" selected="selected" disabled="disabled"> ~~ Select Status ~~
                                        </option>
                                        <option value="Available">Available</option>
                                        <option value="NotAvailable">Not Available</option>
                                    </select>
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="float-right">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        <i class="mdi mdi-content-save"></i> Save
                                    </button>
                                    <button type="reset"  data-dismiss="modal"  class="btn btn-dark waves-effect m-l-5">
                                        <i class="mdi mdi-close-circle"></i> Cancel
                                    </button>
                                </div>
                            </div>



                        </form>

                    </div>
                </div>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Footer -->
<?php include"includes/footer.php"; ?>