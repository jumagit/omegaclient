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
                <div class="col-md-6">
                    <div class="card m-b-30">
                        <h4 class="card-header bg-primary text-light font-16 mt-0">Client Details</h4>
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="directory-img float-left mr-4">
                                    <img class="rounded-circle thumb-lg img-thumbnail"
                                        src="assets/images/users/user-2.jpg" alt="Generic placeholder image">
                                </div>
                                <h5 class="font-16 mt-0">
                                    <?php if(isset($_SESSION['fullName'])){echo $_SESSION['fullName']; } else{echo "Not set";} ?>
                                </h5>
                                <p class="text-muted mb-2">Creative Director</p>

                                <p class="text-muted">
                                    <span class="mdi mdi-star text-warning"></span>
                                    <span class="mdi mdi-star text-warning"></span>
                                    <span class="mdi mdi-star text-warning"></span>
                                    <span class="mdi mdi-star text-warning"></span>
                                    <span class="mdi mdi-star"></span>
                                </p>
                            </div>
                            <hr>
                            <div class="social-icons ">
                                <ul class="social-links list-inline mb-0 p-2">
                                    <li class="list-inline-item">
                                        <a title="" data-placement="top" class="btn-danger tooltips"
                                            data-toggle="tooltip" href="" data-original-title="Facebook"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a title="" data-placement="top" class="btn-info tooltips" data-toggle="tooltip"
                                            href="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a title="" data-placement="top" class="btn-primary tooltips"
                                            data-toggle="tooltip" href="" data-original-title="1234567890"><i
                                                class="fa fa-phone"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a title="" data-placement="top" class="btn-info tooltips" data-toggle="tooltip"
                                            href="" data-original-title="@skypename"><i class="fab fa-skype"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <a href="#" class="btn btn-primary mt-3"> <i class="fa fa-edit"></i> Edit Profile</a>
                        </div>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card m-b-30">
                        <h4 class="card-header bg-primary text-light font-16 mt-0">Company Biography</h4>
                        <div class="card-body">
                            <h4 class="card-title font-18 mt-0">About the Company</h4>
                            <p class="card-text card p-3">With supporting text below as a natural lead-in to
                                additional content.With supporting text below as a natural lead-in to
                                additional content With supporting text below as a natural lead-in to
                                additional content
                                With supporting text below as a natural lead-in to
                                additional content</p>
                            <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i> Edit Bio</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-4 ">
                    <div class="card m-b-30  text-left">
                        <h4 class="card-header bg-primary text-light font-16 mt-0">Change Username</h4>
                        <div class="card-body">
                            <form action="" id="changeUsername">

                                <div class="form-group">
                                    <div class="text-left">
                                        <label for="username">Username </label>
                                    </div>
                                    <div class="">
                                        <input type="hidden" name="user_id" id="user_id"
                                            value="<?php echo $result['user_id'] ?>" />
                                        <input type="text" name="username" required class="form-control"
                                            value="<?php echo $_SESSION['fullName']; ?>">
                                    </div>
                                </div>


                                <div class="form-group text-center">

                                    <button type="submit" class="btn btn-block btn-primary waves-effect waves-light">
                                        <i class="mdi mdi-content-save"></i> Change Username
                                    </button>
                                </div>


                            </form>
                        </div>

                    </div>
                </div>

                <div class="col-lg-8 ">
                    <div class="card m-b-30  text-left">
                        <h4 class="card-header bg-primary text-light font-16 mt-0">Change Password</h4>
                        <div class="card-body">
                            <form action="" id="changePassword">

                                <div class="form-group row">

                                    <div class="col-sm-4">
                                        <label for="currentPassword">Current Password </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="password" name="currentPassword" class="form-control"
                                            placeholder="Enter your Old Password" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-4">
                                        <label for="password">New Password </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="password" name="newPassword" class="form-control" id="pass2"
                                            placeholder="Enter your Favourite Password" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-4">
                                        <label for="confirmPassword">Confirm Password </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="password" name="confirmPassword" data-parsley-equalto="#pass2"
                                            class="form-control" placeholder="Confirm Your Chosen Password" required>
                                    </div>
                                </div>


                                <div class="form-group ">
                                    <input type="hidden" name="puser_id" id="puser_id"
                                        value="<?php echo $result['user_id'] ?>" />
                                    <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">
                                        <i class="mdi mdi-content-save"></i> Change Password
                                    </button>
                                </div>

                            </form>

                        </div>

                    </div>
                </div>

               
            </div>
            <!-- end row -->




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
                                    <button type="reset" data-dismiss="modal" class="btn btn-dark waves-effect m-l-5">
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