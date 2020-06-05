
        <?php include "includes/header.php";?>
        <!-- Navigation Bar-->
       <?php include "includes/navigation.php";?>
        <!-- End Navigation Bar-->

      
         

        <!-- page wrapper start -->
        <div class="wrapper">
            <div class="page-title-box">
                <div class="container-fluid">

                <div class="row">
                <div class="col-sm-12 text-center">
                    

                    <h2 class=""> <i class="fa fa-tasks"></i> Activity Logs</h2>
                    
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

                                    <h4 class="mt-0 header-title">Activity Logs</h4>
                                    <div class="alert alert-dark bg-dark  font-weight-normal  text-white alert-dismissible fade show" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                     </button>  <i class=" mdi mdi-arrow-down-box"></i>  
                                     Here You can View All What has beens Happening in the system
                                </div>
                                    


                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead class="bg-info text-white">
                                        <tr>
                                            <th>#</th>                                           
                                            <th>User</th>
                                            <th>Activity</th>
                                            <th>Time</th>
                                            <th>Log Status</th>
                                           
                                        </tr>
                                        </thead>


                                        <tbody>


                                        <?php  echo fetch_logs();  ?>



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

        <!-- Footer -->
   <?php include "includes/footer.php";?>