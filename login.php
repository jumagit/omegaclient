
          <?php include"includes/front/header.php";  ?>

        <!-- Background -->
        <div class="account-pages"></div>
        <!-- Begin page -->
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center m-0">
                        <a href="index.php" class="logo logo-admin">
                        <img src="frontend/images/logo.png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                        </a>
                    </h3>

                    <div class="p-3">
                        <h4 class="text-muted font-18 m-b-5 text-center">Welcome Back !</h4>
                        <p class="text-muted text-center">Sign in to continue to Online Trade.</p>

                        <?php if(isset($doLoginFeedback)){ echo $doLoginFeedback;}?>

                        <form class="form-horizontal m-t-20" action="" method="POST">

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" required placeholder="Enter username">
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password"  name="password"  class="form-control" required placeholder="Enter password">
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                                        <label class="custom-control-label" for="customControlInline">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-6 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" name="login"  type="submit">Log In</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20">
                                    <a href="pages-recoverpw.php" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="text-white-50">Don't have an account ? <a href="pages-register.php" class="text-white"> Signup Now </a> </p>
                <p class="text-muted">© <?php echo date('Y');  ?> Supply Software, All rights Reserved</p>
            </div>

        </div>

        <!-- END wrapper -->

        <!-- jQuery  -->
     <?php include"includes/front/footer.php";  ?>