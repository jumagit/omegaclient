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
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Create Order</h4>
                            <p class="text-muted m-b-30">Here you can create customer Order
                            </p>


                       <h4 class="mb-4">Personal Information</h4>
                                                                <form id="personalInformation" method="post">
                                                                    <div class="mb-3">
                                                                        <div
                                                                            class="custom-control custom-radio custom-control-inline">
                                                                            <input id="male" name="profile"
                                                                                class="custom-control-input" checked=""
                                                                                required type="radio">
                                                                            <label class="custom-control-label"
                                                                                for="male">Male</label>
                                                                        </div>
                                                                        <div
                                                                            class="custom-control custom-radio custom-control-inline">
                                                                            <input id="female" name="profile"
                                                                                class="custom-control-input" required
                                                                                type="radio">
                                                                            <label class="custom-control-label"
                                                                                for="female">Female</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="fullName">Full Name</label>
                                                                        <input type="text" value="Johne Cary"
                                                                            class="form-control"
                                                                            data-bv-field="fullName" id="fullName"
                                                                            required placeholder="Full Name">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="mobileNumber">Mobile Number</label>
                                                                        <input type="text" value="9898989898"
                                                                            class="form-control"
                                                                            data-bv-field="mobilenumber"
                                                                            id="mobileNumber" required
                                                                            placeholder="Mobile Number">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="emailID">Email ID</label>
                                                                        <input type="text"
                                                                            value="jhonecary2018@gmail.com"
                                                                            class="form-control" data-bv-field="emailid"
                                                                            id="emailID" required
                                                                            placeholder="Email ID">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="birthDate">Date of Birth</label>
                                                                        <input id="birthDate" value="06-09-2002"
                                                                            type="text" class="form-control" required
                                                                            placeholder="Date of Birth">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="inputCountry">Country</label>
                                                                        <select class="custom-select" id="inputCountry"
                                                                            name="country_id">
                                                                            <option value=""> --- Please Select ---
                                                                            </option>
                                                                            <option value="244">Aaland Islands</option>
                                                                            <option value="1">Afghanistan</option>
                                                                            <option value="2">Albania</option>
                                                                            <option value="3">Algeria</option>

                                                                        </select>
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