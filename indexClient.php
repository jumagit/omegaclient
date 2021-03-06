<?php include"includes/header.php"; ?>
<!-- Navigation Bar-->
<?php include"includes/navigation.php"; ?>
<!-- End Navigation Bar-->

<!-- page wrapper start -->
<div class="wrapper mb-5">
    <div class="page-title-box">
        <div class="container-fluid">

             <div class="row">
                <div class="col-sm-12 text-center">
                    

                    <h2 class="text-white"> <i class="fa fa-home"></i> Dashboard </h2>
                    
                </div>
            </div>
        </div>
        <!-- end container-fluid -->

    </div>
    <!-- page-title-box -->

    <div class="page-content-wrapper">

        <div class="container-fluid">


          


            <div class="row">

                <div class="col-xl-12 ">

                    <div class="bg-white p-3 ">
                        <div class="row ">

                            <div class="col-sm-3">
                                <div class="card rounded m-2  mini-stat position-relative " style="background-color:#240B3A">
                                    <div class="card-body">
                                        <div class="mini-stat-desc">                                           
                                            <div class="text-white">                                              
                                                <div class="text-center">
                                                     <h1 class="mb-3 mt-0"><?php count_anything('products'); ?></h1>
                                                    <h4 class="text-uppercase mt-0 text-white-20">In Stock</h4>
                                                    <span class="ml-2"><a href="products.php" class="text-white">More
                                                            Details..</a></span>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                              <div class="col-sm-3">
                                <div class="card rounded m-2  mini-stat position-relative " style="background-color:#F86F15">
                                    <div class="card-body">
                                        <div class="mini-stat-desc">                                           
                                            <div class="text-white">                                              
                                                <div class="text-center">
                                                     <h1 class="mb-3 mt-0"><?php count_anything('orders'); ?></h1>
                                                    <h4 class="text-uppercase mt-0 text-white-20">Orders</h4>
                                                    <span class="ml-2"><a href="orders.php" class="text-white">More
                                                            Details..</a></span>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                           


                             <div class="col-sm-3">
                                <div class="card rounded m-2  mini-stat position-relative " style="background-color:#3F1D0B">
                                    <div class="card-body">
                                        <div class="mini-stat-desc">                                           
                                            <div class="text-white">                                              
                                                <div class="text-center">
                                                     <h1 class="mb-3 mt-0"><?php count_anything('categories'); ?></h1>
                                                    <h4 class="text-uppercase mt-0 text-white-20">Categories</h4>
                                                    <span class="ml-2"><a href="categories.php" class="text-white">More
                                                            Details..</a></span>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>


                             <div class="col-sm-3">
                                <div class="card rounded m-2  mini-stat position-relative " style="background-color:#002F47">
                                    <div class="card-body">
                                        <div class="mini-stat-desc">                                           
                                            <div class="text-white">                                              
                                                <div class="text-center">
                                                     <h1 class="mb-3 mt-0"><?php count_anything('customers'); ?></h1>
                                                    <h4 class="text-uppercase mt-0 text-white-20">Customers</h4>
                                                    <span class="ml-2"><a href="customers.php" class="text-white">More
                                                            Details..</a></span>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>





                        <hr>
                          



                <div class="col-xl-12 ">

                   <div class="row">


                        <div class="col-lg-6">

                                <div class="bg-white">


                                    <div class="card-body">

                                        <h4 class="mt-0 header-title">Orders View</h4>

                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                        
                                        </ul>

                                        <canvas id="clientSales" height="230"></canvas>

                                    </div>


                                </div>


                            </div> 


                        <div class="col-lg-6">

                            <div class="bg-white">


                                <div class="card-body">

                                    <h4 class="mt-0 header-title">Customers Scale</h4>

                                    <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                    
                                    </ul>

                                    <canvas id="customersC" height="230"></canvas>

                                </div>


                            </div>

                        
                        </div>                  
                   
                   </div>
                </div>




                <!-- end row -->

                
                </div>
                    </div>


                </div>




            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end page content-->

    </div>
    <!-- page wrapper end -->

    <!-- Footer -->
    <?php include"includes/footer.php"; ?>