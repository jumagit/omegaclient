<?php include "includes/header.php";?>
<!-- Navigation Bar-->
<?php include "includes/navigation.php";?>
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

                    <h4 class="page-title">Users</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Users</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Users</li>
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

                            <h4 class="mt-0 header-title">View All Users</h4>

                            <div class="alert alert-dark bg-dark  font-weight-normal  text-white alert-dismissible fade show"
                                role="alert"> <button type="button" class="close" data-dismiss="alert"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button> <strong> <i class=" mdi mdi-arrow-down-box"></i> </strong>Here you view All registered Users
                            </div>
                           

                            <div class="d-block float-right" style="">
                                <button type="button" class="btn btn-warning waves-effect waves-light"
                                    data-toggle="modal" data-target=".bs-example-modal-lg"> <i
                                        class="mdi mdi-plus-circle"></i> Add User</button>
                            </div>


                            <table id="datatable-buttons"
                                class="table table-striped table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Full Names</th>
                                        <th>Email </th>
                                        <th>Mobile</th>
                                        <th>Account Status</th> 
                                        <th>User Role</th>                                      
                                        <th>Admin </th>
                                        <th>Revoke </th>
                                        <th>Deactivate Account</th>
                                        <th>Edit </th>
                                        <th>Trash </th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <?php echo fetch_users(); ?>
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
                <h5 class="modal-title mt-0" id="myLargeModalLabel"> <i class="mdi mdi-plus-circle"></i> Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <div class="card m-b-20">
                    <div class="card-body">

                        <div class="alert alert-dark bg-dark  font-weight-normal  text-white alert-dismissible fade show"
                            role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button> <strong> <i class=" mdi mdi-arrow-down-box"></i> </strong> Here you can add a User
                        </div>

                        <form action="" id="addUserForm">

                            <div class="row">


                                <div class="col-6">


                                    <div class="form-group row">

                                        <div class="col-sm-4">
                                            <label for="sname">FirstName :</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" name="sname" class="form-control"
                                                placeholder="Enter FirstName" required>
                                        </div>
                                    </div>


                                    <div class="form-group row">

                                        <div class="col-sm-4">
                                            <label for="lname">LastName :</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" name="lname" class="form-control"
                                                placeholder="Enter LastName" required>
                                        </div>
                                    </div>


                                    <div class="form-group row">

                                        <div class="col-sm-4">
                                            <label for="username">Username :</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" name="username" class="form-control"
                                                placeholder="Enter Username" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label for="email">Email :</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="email" name="email" class="form-control" parsley-type="email"
                                                required placeholder="Enter Email Address">
                                        </div>
                                    </div>



                                </div>

                                <!-- col-6 end -->

                                <div class="col-6">




                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label for="mobile">Phone :</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="number" name="mobile" class="form-control"
                                                data-parsley-type="number" placeholder="Enter Phone Contact" required
                                                data-parsley-minlength="10" data-parsley-maxlength="10">
                                        </div>
                                    </div>


                                    


                                    <div class="form-group row">
                                        <div class="col-sm-3">
                                            <label for="gender">Gender :</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <select name="gender" id="brandStatus" class="custom-select">
                                                <option value="#" selected="selected" disabled="disabled"> ~~ Select
                                                    Gender ~~
                                                </option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                            </select>
                                        </div>
                                    </div>




                                    <div class="form-group row">
                                        <div class="col-sm-3">
                                            <label for="role">Role :</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <select name="role" id="role" class="custom-select">
                                                <option value="#" selected="selected" disabled="disabled"> ~~ Select
                                                    Role ~~
                                                </option>
                                                <option value="1">Administrator</option>
                                                <option value="2">User</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                            </div>




                            <div class="form-group">
                                <div class="float-right">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        <i class="mdi mdi-content-save"></i> Save
                                    </button>
                                    <button type="reset" class="btn btn-dark waves-effect m-l-5 " data-dismiss="modal">
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
<?php include "includes/footer.php";?>