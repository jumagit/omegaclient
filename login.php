      <?php include"includes/front/head.php";  ?>
  <!-- Content
  ============================================= -->
  <div id="content" style="">
  <div class="login-signup-page mx-auto my-5">
      <h3 class="font-weight-400 text-center">Sign In</h3>
      <p class="lead text-center">Your login information is safe with us.</p>
       <?php if(isset($doLoginFeedback)){ echo $doLoginFeedback;}?>

       <p class="mb-2  text-center" id="clock"></p>
      <div class="bg-light shadow-md rounded p-4 mx-2">
      <form  method="post" action="">
          <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username" required placeholder="Enter Your Username">
        </div>
          <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" required placeholder="Enter Password">
        </div>
          <div class="row">
          <div class="col-sm">
              <div class="form-check custom-control custom-checkbox">
              <input id="remember-me" name="remember" class="custom-control-input" type="checkbox">
              <label class="custom-control-label" for="remember-me">Remember Me</label>
            </div>
            </div>
          <div class="col-sm text-right"><a class="btn-link" href="#">Forgot Password ?</a></div>
        </div>
          <button class="btn btn-primary btn-block my-4" name="login" type="submit">Sign In</button>
        </form>
      <p class="text-3 text-muted text-center mb-0">Don't have an account? <a class="btn-link" href="signup-3.html">Sign Up</a></p>
    </div>
    </div>
  <!-- Content end -->

   <?php include"includes/front/foot.php";  ?>