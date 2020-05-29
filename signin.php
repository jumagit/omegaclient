<?php  include "includes/front/home-header.php";  ?>





<div id="content " >


    <section>
        <div class="hero-wrap py-4 py-md-5">
            <div class="hero-mask opacity-7 bg-primary"></div>
            <div class="hero-bg" style="background-image:url('frontend/images/bg/bg.jpg');"></div>
            <div class="hero-content py-0 py-lg-3">


                <div class="container  ">
                    <div id="login-signup-page" class="bg-light shadow-md rounded mx-auto p-4 ">

                        <p class="text-center pt-3"><img src="frontend/images/logo.png" class="img-fluid " alt="logo"
                            style="width:200px;"></p>
                        <div class="text-center">
                            <h3 class="text-center">Login</h3>
                            <p>Login with your Credentials</p>
                        </div>

                        <?php if(isset($doLoginFeedback)){ echo $doLoginFeedback;}?>
                        <div class=" pt-2 mb-4">
                            <div class="tab-pane fade show active" id="loginPage" role="tabpanel"
                                aria-labelledby="login-page-tab">
                                <form id="loginForm" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="username" name="username" required
                                            placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="password" required
                                            placeholder="Password" name="password">
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm">
                                            <div class="form-check custom-control custom-checkbox">
                                                <input id="remember-me" name="remember" class="custom-control-input"
                                                    type="checkbox">
                                                <label class="custom-control-label" for="remember-me">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <div class="col-sm text-right"> <a class="justify-content-end" href="#">Forgot
                                                Password
                                                ?</a> </div>
                                    </div>
                                    <button class="btn btn-primary btn-block" name="login" type="submit">Login</button>
                                </form>
                            </div>



                        </div>
                    </div>
                </div>


            </div>

        </div>


    </section>



</div><!-- Content end -->

</div>



<?php  include "includes/front/home-footer.php";  ?>