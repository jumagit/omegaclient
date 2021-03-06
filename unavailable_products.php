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
                    

                    <h2 class="">Missing Stock</h2>
                    
                </div>
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

                            <h4 class="mt-0 header-title">View All Unavailable Stock</h4>

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
                                     
                                        <th><i class="fa fa-edit"></i></th>
                                        <th><i class="fa fa-trash"></i></th>
                                    </tr>
                                </thead>


                                <tbody>


                               <?php  fetch_unavailable_products(); ?>
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



<!-- Footer -->
<?php include"includes/footer.php"; ?>