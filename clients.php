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

                    <h4 class="page-title">Clients</h4>
                    <ol class="breadcrumb">
                      
                        <li class="breadcrumb-item active">Clients</li>
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

                            <h4 class="mt-0 header-title">Suppliers</h4>
                            <div class="alert alert-dark bg-dark  font-weight-normal  text-white alert-dismissible fade show"
                                role="alert"> <button type="button" class="close" data-dismiss="alert"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button> <strong> <i class=" mdi mdi-arrow-down-box"></i> </strong>Here you view All registered Suppliers
                            </div>
                           

                            <div class="d-block float-right" style="">
                                <button type="button" class="btn btn-primary waves-effect waves-light"
                                    data-toggle="modal" data-target=".bs-example-modal-lg"> <i
                                        class="mdi mdi-plus-circle"></i> Add Client</button>
                            </div>

                            <table id="datatable-buttons"
                                class="table table-striped table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Full Names</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Mobile</th>
                                        <th>Location</th>
                                        <th>Edit</th>
                                        <th>Trash</th>
                                    </tr>
                                </thead>


                                <tbody>
                                  <?php echo fetch_clients(); ?>
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


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header text-white " style="background-color: #015C9B;">
                <h5 class="modal-title mt-0" id="myLargeModalLabel"> <i class="mdi mdi-plus-circle"></i> Add Client</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <div class="card m-b-20">
                    <div class="card-body">



                        <div class="alert alert-dark bg-dark  font-weight-normal  text-white alert-dismissible fade show"
                            role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button> <strong> <i class=" mdi mdi-arrow-down-box"></i> </strong> Here you can add a
                            Client
                        </div>

                        <form action="" id="addClientForm">

                            <div class="row">


                                <div class="col-6">


                                    <div class="form-group row">

                                        <div class="col-sm-4 ">
                                            <label for="username">Full Name :</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" name="fullName" class="form-control"
                                                placeholder="Enter Full Names" required>
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


                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label for="location">Location :</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" name="location" class="form-control"
                                                placeholder="Enter Location" required>
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
                                        <div class="col-sm-4">
                                            <label for="username">Username :</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" name="username" class="form-control"
                                                placeholder="Enter Username" required>
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
<?php include"includes/footer.php"; ?>