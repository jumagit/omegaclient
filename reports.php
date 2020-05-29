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

                    <h4 class="page-title">Report</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Report</a></li>
                        
                        
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

                            <h4 class="mt-0 header-title">Generate Report</h4>

                            <div class="alert alert-dark bg-dark  font-weight-normal  text-white alert-dismissible fade show"
                                role="alert"> <button type="button" class="close" data-dismiss="alert"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button> <strong> <i class=" mdi mdi-arrow-down-box"></i> </strong>Here you can generate a Report For Whatever has been Happening.
                            </div>
                           


                            <div class="col-md-8 m-auto">


                                  <form action="general_report.php" target="_blank" method="POST" class="form-horizontal">
                            

                             <div class="form-group row">
                                    <div class="col-sm-4 text-center">
                                        <label for="start_date">Start Date </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="start_date" name="start_date" placeholder="Start Date" 
                                                autocomplete="off" required />
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <div class="col-sm-4 text-center">
                                        <label for="end_date">End Date</label>
                                    </div>
                                    <div class="col-sm-8">
                                       <input type="text" class="form-control" id="end_date" name="end_date"
                                                autocomplete="off" required placeholder="End Date" />
                                    </div>
                                </div>



                                 <div class="form-group row">
                                    <div class="col-sm-4">
                                       
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="submit" name="submit" class="btn btn-success" value="Generate Report">
                                    </div>
                                </div>
                        </form>
                                



                            </div>

                      


                           



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