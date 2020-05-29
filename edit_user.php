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

                    <h4 class="page-title">Edit User</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Edit User</a></li>
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
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Edit User</h4>
                            <div class="alert alert-dark bg-dark  font-weight-normal  text-white alert-dismissible fade show"
                            role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button> <strong> <i class=" mdi mdi-arrow-down-box"></i> </strong> Here you can Edit User
                        </div>
                          


                            <form action="" id="addUserForm" class="pt-2">

                                <div class="row">


                                    <div class="col-6">


                                        <div class="form-group row">

                                            <div class="col-sm-4">
                                                <label for="username">Username :</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" name="username" class="form-control"
                                                    placeholder="Enter Username">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="productPrice">Email :</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="Enter Email Address">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="password">Password :</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="password" name="password" class="form-control"
                                                    placeholder="Enter Password">
                                            </div>
                                        </div>



                                    </div>

                                    <!-- col-6 end -->

                                    <div class="col-6">


                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="username">Username :</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" name="username" class="form-control"
                                                    placeholder="Enter Username">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="productPrice">Email :</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="Enter Email Address">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="password">Password :</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="password" name="password" class="form-control"
                                                    placeholder="Enter Password">
                                            </div>
                                        </div>



                                    </div>




                                </div>




                                <div class="form-group">
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            <i class="mdi mdi-content-save"></i> Save
                                        </button>
                                        <button type="reset" class="btn btn-dark waves-effect m-l-5 "
                                            data-dismiss="modal">
                                            <i class="mdi mdi-close-circle"></i> Cancel
                                        </button>
                                    </div>
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