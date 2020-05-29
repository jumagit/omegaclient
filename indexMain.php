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

                    <h4 class="page-title">Dashboard</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Welcome to Supply Software Dashboard</li>
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
                <div class="col-xl-3 col-md-6">
                    <div class="card  mini-stat position-relative"  style="background-color:#EBF8A4;border:2px solid #35a989 !important;">
                        <div class="card-body">
                            <div class="mini-stat-desc">
                                <h6 class="text-uppercase verti-label text-dark-50">Orders</h6>
                                <div class="text-dark">
                                    <h6 class="text-uppercase mt-0 text-dark-50">Orders</h6>
                                    <h3 class="mb-3 mt-0"><?php count_admin('orders'); ?></h3>
                                    <div class="">
                                        <span class="ml-2"><a href="orders.php"   class="text-dark">More Details..</a></span>
                                    </div>
                                </div>
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-cube-outline display-2 text-secondary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card  mini-stat position-relative" style="background-color:#EBF8A4;border:2px solid #35a989 !important;">
                        <div class="card-body">
                            <div class="mini-stat-desc">
                                <h6 class="text-uppercase verti-label text-dark-50">Suppliers</h6>
                                <div class="text-dark">
                                    <h6 class="text-uppercase mt-0 text-dark-50">Suppliers</h6>
                                    <h3 class="mb-3 mt-0"><?php count_admin('clients'); ?></h3>
                                    <div class="">
                                    <span class="ml-2"><a href="clients.php"   class="text-dark">More Details..</a></span>
                                    </div>
                                </div>
                                <div class="mini-stat-icon ">
                                    <i class="mdi mdi-account-group display-2 text-secondary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card  mini-stat position-relative" style="background-color:#EBF8A4;border:2px solid #35a989 !important;">
                        <div class="card-body">
                            <div class="mini-stat-desc">
                                <h6 class="text-uppercase verti-label text-dark-50">Av. Price</h6>
                                <div class="text-dark">
                                    <h6 class="text-uppercase mt-0 text-dark-50">Average Price</h6>
                                    <h3 class="mb-3 mt-0">15.9</h3>
                                    <div class="">
                                    <span class="ml-2"><a href="#" class="text-dark">More Details..</a></span>
                                    </div>
                                </div>
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-tag-text-outline display-2 text-secondary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card text-dark mini-stat position-relative"  style="background-color:#EBF8A4;border:2px solid #35a989 !important;">
                        <div class="card-body">
                            <div class="mini-stat-desc">
                                <h6 class="text-uppercase verti-label text-dark-50">Pr. Sold</h6>
                                <div class="text-dark">
                                    <h6 class="text-uppercase mt-0 text-dark-50">Product Sold</h6>
                                    <h3 class="mb-3 mt-0"><?php  count_admin('products'); ?></h3>
                                    <div class="">
                                    <span class="ml-2"><a href="products.php"  class="text-dark">More Details..</a></span>
                                    </div>
                                </div>
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-briefcase-check display-2 text-secondary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">

            <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">PIE CHART</h4>
                            <canvas id="admin_pie" height="300"></canvas>
                        </div>
                    </div>
                </div>
                
                <!-- end col -->


                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">SALES ANALYTICS</h4>
                            <canvas id="adminOrders" height="150"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <!-- end row -->

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">Latest Trasaction</h4>
                            <div class="table-responsive">
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th scope="col">(#) Id</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col" colspan="1">Status</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                           <td>1</td>
                                            <td>
                                               
                                                  Jeanette James
                                            
                                            </td>
                                            <td>14/8/2018</td>
                                            <td>$104</td>
                                            <td><span class="badge badge-success">Delivered</span></td>
                                            <td>
                                                <div>
                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                </div>
                                            </td>
                                        </tr>
                                     
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">Latest Order</h4>
                            <div class="table-responsive order-table">
                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th scope="col">(#) Id</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Date/Time</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col" >Status</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>1</td>
                                            <td>   Ralph Shockey </td>
                                            <td>18/8/2018  10:18AM   </td>
                                            <td>$112</td>
                                            <td>
                                                <span class="badge badge-warning badge-pill"><i
                                                        class="mdi mdi-checkbox-blank-circle text-warning"></i>
                                                    Pending</span>
                                            </td>
                                            <td> <a href="#" class="btn btn-primary btn-sm">Edit</a></td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
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

<!-- Footer -->
<?php include"includes/footer.php"; ?>