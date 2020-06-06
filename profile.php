<?php include"includes/header.php"; ?>
<!-- Navigation Bar-->
<?php include"includes/navigation.php"; ?>
<!-- End Navigation Bar-->

<!-- page wrapper start -->
<div class="wrapper">
    <div class="page-title-box">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12 text-center">
                    

                    <h2 class=""> <i class="fa fa-user-circle"></i> Profile</h2>
                    
                </div>
            </div>
        </div>
        <!-- end container-fluid -->

    </div>


    <?php 

       
            $client_id = $_SESSION['client_id'];
            $sql = "SELECT * FROM clients WHERE client_id = '$client_id' ";
            $query = query($sql);
            while($result = mysqli_fetch_array($query)){
                  $client_id = $result['client_id'];
                  $username = $result['username'];
                  $fullName = $result['fullName'];
                  $email = $result['email'];
                  $location = $result['location'];
                  $Mobile = $result['mobile'];
                  $profilePicture  = substr($result['profileImage'], 3);
            }

           // 



     ?>
    <!-- page-title-box -->

    <div class="page-content-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">



                            <div class="row"> 
        
        
                               <div class="col-lg-3"> 


                                 <!-- Profile Details -->
                                  <div class=" card-body  shadow-sm rounded text-center p-3 mb-4">
                                     <h4 class="text-3 font-weight-500 mb-2">Hello, <span class="badge badge-danger"> <?php echo $_SESSION['fullName'] ?></span></h4>
                                    
                                    <div class="profile-thumb mt-3 mb-4"> <img class="rounded-circle" 
                                      src="<?php echo(isset($profilePicture)) ?  $profilePicture : 'No Profile Pic' ?>" width="120" alt="ProfileImage">

                                      <form action="#" method="POST" id="changeProfilePicture" class="mt-2" enctype="multipart/form-data">
                                          <div class="form-group">
                                            
                                              <div>
                                                  <input type="file"  name="ProfileImage" required />
                                                  <input type="hidden" name="pic_client_id"  value="<?php echo $client_id; ?>">
                                              </div>
                                          </div>
                                            <p class="mb-2"><button  class="text-5 text-light btn btn-block btn-info"><i class="fas fa-image"></i> Update</button></p>
                                      </form>
                                        
                                     
                                        
                                      </div>
                                    
                                    </div>


                                     <!-- Available Balance -->
                                  <div class=" card-body bg-info shadow-sm rounded text-center p-3 mb-4">
                                    <div class="text-17 text-dark my-3"><i class="fas fa-wallet fa-3x"></i></div>
                                    <h3 class="text-9 font-weight-400">UGX <?php total_sales(); ?></h3>
                                    <p class="mb-2 h6">Total Sales</p>
                                    <hr class="mx-n3">
                                    <a href="#" class="btn btn-danger btn-block">Details</a> 
                                  </div>


                             
                 
                          </div>
          
          
        
         
                                <div class="col-lg-9">
                                  
                                  <!-- Personal Details ============================================= -->
                                  <div class=" card shadow-sm rounded p-4 mb-4">
                                    <h4 class="text-5 font-weight-400 mb-3"><i class="mdi mdi-account-circle"></i> Account Details <button class="float-right btn btn-info"><i class="fas fa-edit"></i></button></h4>
                                    <hr>
                                    <div class="row">
                                      <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Name</p>
                                      <p class="col-sm-9 h5 text-info" ><u><?php echo $fullName; ?></u></p>
                                    </div>
                                    <div class="row">
                                      <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Username</p>
                                      <p class="col-sm-9 h5 text-info"><u><?php echo $username; ?></u></p>
                                    </div>
                                     <div class="row">
                                      <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Email</p>
                                      <p class="col-sm-9 h5 text-info"><u><?php echo $email; ?></u></p>
                                    </div>

                                     <div class="row">
                                      <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Mobile</p>
                                      <p class="col-sm-9 h5 text-info"><u><?php echo $Mobile; ?></u></p>
                                    </div>
                                    <div class="row">
                                      <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Address</p>
                                      <p class="col-sm-9 h5 text-info"><u><?php echo $location; ?></u></p>
                                    </div>
                                  </div>


                                <!--   settings -->


                                <div class="card m-b-20 ">
                                <div class="card-body">

                                    <h4 class="mt-0 "><i class="mdi mdi-lock"></i> Change Password</h4>
                                    <hr>
                                    <p class="text-muted m-b-30">Here you can change your Password
                                    </p>

                                    <form action="" id="changePassword">

                                <div class="form-group row">

                                    <div class="col-sm-3">
                                        <label for="currentPassword">Current Password :</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="password" name="currentPassword" class="form-control"
                                            placeholder="Enter your Old Password" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <label for="password">New Password :</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="password" name="newPassword" class="form-control" id="pass2"
                                            placeholder="Enter your Favourite Password" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <label for="confirmPassword">Confirm Password :</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="password" name="confirmPassword" data-parsley-equalto="#pass2"
                                            class="form-control" placeholder="Confirm Your Chosen Password" required>
                                    </div>
                                </div>


                                <div class="form-group ">
                                    <input type="hidden" name="pclient_id" id="pclient_id"
                                        value="<?php echo $client_id; ?>" />
                                    <button type="submit" class="btn btn-block btn-lg btn-danger waves-effect waves-light">
                                        <i class="mdi mdi-content-save"></i> Change Password
                                    </button>
                                </div>

                            </form>


                        </div>
                    </div>


                   <!--  username -->


                    <div class="card m-b-20 ">
                        <div class="card-body">

                            <h4 class="mt-0 "><i class="fas fa-user"></i> Change Username</h4>
                            <hr>
                            <p class="text-muted m-b-30">Here you view can Change your Username
                            </p>

                            <form action="" id="changeUsername">

                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <label for="username">Username :</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="hidden" name="client_id" id="client_id"
                                            value="<?php echo $client_id ?>" />
                                        <input type="text" name="username" required class="form-control"
                                            value="<?php echo $username; ?>">
                                    </div>
                                </div>


                                <div class="form-group ">

                                    <button type="submit" class="btn btn-block btn-info btn-lg waves-effect waves-light">
                                        <i class="mdi mdi-content-save"></i> Change Username
                                    </button>
                                </div>


                            </form>


                        </div>
                    </div>
                                 
                                 <?php $connection->close(); ?>
                            
                                </div>
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