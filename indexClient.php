<?php include"includes/header.php"; ?>
<!-- Navigation Bar-->
<?php include"includes/navigation.php"; ?>
<!-- End Navigation Bar-->


<?php





?>

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
                        <li class="breadcrumb-item active">Hi, <span class="badge badge-danger"> <?php if(isset($_SESSION['fullName'])){echo $_SESSION['fullName'];} ?>  </span>  Welcome to Omega Dashboard</li>
                    </ol>

                </div>
            </div>
        </div>
        <!-- end container-fluid -->

    </div>
    <!-- page-title-box -->

    <div class="page-content-wrapper">

        <div class="container-fluid">


            <div class="container">
                
                  <div class="row state-overview">
                  <div class="col-lg-3 col-sm-6">
                      <section class="card">
                          <div class="symbol terques">
                              <i class="fa fa-user"></i>
                          </div>
                          <div class="value">
                              <h1 class="count">
                                  0
                              </h1>
                              <p>New Users</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="card">
                          <div class="symbol red">
                              <i class="fa fa-tags"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count2">
                                  0
                              </h1>
                              <p>Sales</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="card">
                          <div class="symbol yellow">
                              <i class="fa fa-shopping-cart"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count3">
                                  0
                              </h1>
                              <p>New Order</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="card">
                          <div class="symbol blue">
                              <i class="fa fa-envelope"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count4">
                                  0
                              </h1>
                              <p>Total Profit</p>
                          </div>
                      </section>
                  </div>
              </div>
            </div>



            <div class="row">

                <div class="col-xl-6 ">

                    <div class="bg-white p-3 ">
                        <div class="row ">

                            <div class="col-sm-6">

                                <div class=" m-2  mini-stat position-relative " style="background-color:#1B82EC">
                                    <div class="card-body">
                                        <div class="mini-stat-desc">
                                            <h6 class="text-uppercase verti-label text-white-50">In Stock </h6>
                                            <div class="text-white">
                                                <h6 class="text-uppercase mt-0 text-white-50">In Stock</h6>
                                                <h3 class="mb-3 mt-0"><?php count_anything('products'); ?></h3>
                                                <div class="">
                                                    <span class="ml-2"><a href="products.php" class="text-white">More
                                                            Details..</a></span>
                                                </div>
                                            </div>
                                            <div class="mini-stat-icon">
                                                <i class="mdi mdi-buffer display-2"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-6">

                                <div class="m-2  mini-stat position-relative " style="background-color:#1B82EC">
                                    <div class="card-body">
                                        <div class="mini-stat-desc">
                                            <h6 class="text-uppercase verti-label text-white-50">Orders</h6>
                                            <div class="text-white">

                                                <h6 class="text-uppercase mt-0 text-white-50">Orders</h6>
                                                <h3 class="mb-3 mt-0"><?php count_anything('orders'); ?></h3>
                                                <div class="">
                                                    <span class="ml-2"><a href="orders.php" class="text-white">More
                                                            Details..</a></span>
                                                </div>
                                            </div>
                                            <div class="mini-stat-icon">
                                                <i class="mdi mdi-cash-multiple display-2"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="col-sm-6">

                                <div class="m-2 mini-stat position-relative " style="background-color:#1B82EC">
                                    <div class="card-body">
                                        <div class="mini-stat-desc">
                                            <h6 class="text-uppercase verti-label text-white-50">Out Stock</h6>
                                            <div class="text-white">
                                                <h6 class="text-uppercase mt-0 text-white-50">Out Stock</h6>
                                                <h3 class="mb-3 mt-0"><?php count_anything('order_item'); ?></h3>
                                                <div class="">
                                                    <span class="ml-2"><a href="#" class="text-white">More
                                                            Details..</a></span>
                                                </div>
                                            </div>
                                            <div class="mini-stat-icon">
                                                <i class="mdi mdi-tune-vertical display-2"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        
                          

                            <div class="col-sm-6">

                                <div class="m-2  mini-stat position-relative " style="background-color:#1B82EC">
                                    <div class="card-body">
                                        <div class="mini-stat-desc">
                                            <h6 class="text-uppercase verti-label text-white-50">Categories</h6>
                                            <div class="text-white">
                                                <h6 class="text-uppercase mt-0 text-white-50">Categories</h6>
                                                <h3 class="mb-3 mt-0"><?php count_anything('categories'); ?></h3>
                                                <div class="">
                                                    <span class="ml-2"><a href="categories.php" class="text-white">More
                                                            Details..</a></span>
                                                </div>
                                            </div>
                                            <div class="mini-stat-icon">
                                                <i class="mdi mdi-bell display-2"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>



                             <div class="col-sm-6">

                                <div class="m-2  mini-stat position-relative " style="background-color:#1B82EC">
                                    <div class="card-body">
                                        <div class="mini-stat-desc">
                                            <h6 class="text-uppercase verti-label text-white-50">Customers</h6>
                                            <div class="text-white">
                                                <h6 class="text-uppercase mt-0 text-white-50">Customers</h6>
                                                <h3 class="mb-3 mt-0"><?php count_anything('customers'); ?></h3>
                                                <div class="">
                                                    <span class="ml-2"><a href="customers.php" class="text-white">More
                                                            Details..</a></span>
                                                </div>
                                            </div>
                                            <div class="mini-stat-icon">
                                                <i class="mdi mdi-account-group display-2"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>



                </div>


                <div class="col-xl-6 ">

                    <div class="bg-white">


                        <div class="card-body">

                            <h4 class="mt-0 header-title">Simple  chart</h4>

                            <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                               
                            </ul>

                            <canvas id="clientSales" height="230"></canvas>

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