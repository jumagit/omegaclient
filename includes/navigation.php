 <header id="topnav">
     <div class="topbar-main" style="background-image: linear-gradient(90deg, #002F47, #002F47);">
         <div class="container-fluid">

             <!-- Logo container-->
             <div class="logo">

                 <a href="indexMain.php" class="logo">
                     <!-- <img src="assets/images/logo-white.png" width="150" alt="logo" class="logo-small"> -->
                     <img src="assets/images/logo-white.png" alt="logo" width="150" height="50px" class="logo-large">

                 </a>

             </div>

             <!-- End Logo container-->


             <div class="menu-extras topbar-custom">

                 <ul class="navbar-right d-flex list-inline float-right mb-0">
                     <!-- <li class="dropdown notification-list d-none d-sm-block">
                         <form role="search" class="app-search">
                             <div class="form-group mb-0">
                                 <input type="text" class="form-control" placeholder="Search..">
                                 <button type="submit"><i class="fa fa-search"></i></button>
                             </div>
                         </form>
                     </li>
 -->

                     





                     <li class="dropdown notification-list">
                         <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown"
                             href="#" role="button" aria-haspopup="false" aria-expanded="false">
                             <i class="mdi mdi-bell noti-icon"></i>
                             <span class="badge badge-pill badge-info noti-icon-badge" id="count"></span>
                         </a>
                         <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg bg-danger">
                             <!-- item-->
                             <h6 class="dropdown-item-text text-center text-white">
                                 Notifications  
                             </h6>
                             <div class="pre-scrollable notification-item-list" id="dropdown-menu">

                             </div>

                             <a href="activity_logs.php" class="dropdown-item text-center text-primary">
                                 View all <i class="fi-arrow-right"></i>
                             </a>
                         </div>
                     </li>
                    

                     <li class="menu-item list-inline-item">
                         <!-- Mobile menu toggle-->
                         <a class="navbar-toggle nav-link">
                             <div class="lines">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                             </div>
                         </a>
                         <!-- End mobile menu toggle-->
                     </li>


                     <li class="dropdown-item-text pt-2">
                         <h6 class="text-white">

                             <?php 

                                    if (isset($_SESSION['client_id'])) {
                                       echo '<span class="btn btn-sm btn-info"><i class="fa fa-user"></i> '.$_SESSION['fullName'].'<span>';
                                    }

                                     ?>
                         </h6>
                     </li>


                      <li class="dropdown-item-text pt-2">
                         <h6 class="text-white">

                            
                                       <button class="btn btn-danger">Total UGX <?php total_sales(); ?></button> 
                                   
                         </h6>
                     </li>

                      <li class="dropdown notification-list">
                         <div class="dropdown notification-list">
                             <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user waves-light"
                                 data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                 aria-expanded="false">
                                 <img src="<?php echo $_SESSION['profileImage']; ?>" alt="user" class="rounded-circle">
                             </a>
                             <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                 <!-- item-->

                                 <?php  if(isset($_SESSION['user_id']) ){ ?>
                                 <a class="dropdown-item" href="activity_logs.php"><i
                                         class="mdi mdi-lock-open-outline m-r-5"></i> History</a>

                                 <?php }else{ ?>

                                 <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5"></i>
                                     Happenings</a>


                                 <?php } ?>
                                 <a class="dropdown-item" href="profile.php"><i
                                         class="mdi mdi-account-circle m-r-5"></i> Profile</a>




                                 <div class="dropdown-divider"></div>
                                 <a class="dropdown-item text-danger" href="php_action/general_logout.php"><i
                                         class="mdi mdi-power text-danger"></i> Logout</a>
                             </div>
                         </div>
                     </li>

                 </ul>



             </div>
             <!-- end menu-extras -->

             <div class="clearfix"></div>

         </div> <!-- end container -->
     </div>
     <!-- end topbar-main -->

     <!-- MENU Start -->
     <div class="navbar-custom">
         <div class="container-fluid">
             <div id="navigation">
                 <!-- Navigation Menu-->
                 <ul class="navigation-menu">

                     <?php  if(isset($_SESSION['client_id']) && !isset($_SESSION['user_id'])){ ?>

                     <li class="has-submenu">
                         <a href="indexClient.php"><i class="mdi mdi-home"></i>Client Dashboard</a>
                     </li>

                     <li class="has-submenu">
                         <a href="categories.php"><i class="mdi mdi-buffer"></i>Categories Section</a>
                     </li>

                     <li class="has-submenu">
                         <a href="products.php"><i class="mdi mdi-apps"></i>Stock Section</a>
                         <ul class="submenu">
                             <li><a href="out_stock.php">Out Stock</a></li>
                             <li><a href="Unavailable_products.php">Unavailable</a></li>

                         </ul>
                     </li>



                     <li class="has-submenu">
                         <a href="orders.php"><i class="mdi mdi-cart-plus"></i>Orders Section</a>
                         <ul class="submenu">

                             <?php if(real_counting('customers') < 1 ){ ?>
                             <li><a href="add_customer.php">No customers </a></li>

                             <?php } elseif(real_counting('products') < 1){?>
                             <li><a href="products.php">No Products</a></li>

                             <?php }else{ ?>
                             <li><a href="create_order.php">Create Order</a></li>
                             <?php } ?>
                         </ul>
                     </li>

                     <li class="has-submenu">
                         <a href="customers.php"><i class="mdi mdi-account-group"></i>Customer Section</a>
                         <ul class="submenu">
                             <li><a href="add_customer.php">Add Customer</a></li>

                         </ul>
                     </li>


                     <li class="has-submenu">
                         <a href="reports.php"><i class="mdi mdi-finance"></i>Reports Section</a>

                     </li>



                     <?php  }else{ ?>

                     <li class="has-submenu">
                         <a href="indexMain.php"><i class="mdi mdi-home"></i>Admin Dashboard</a>
                     </li>


                     <li class="has-submenu">
                         <a href="clients.php"><i class="mdi mdi-account-multiple"></i>Suppliers</a>

                     </li>

                     <li class="has-submenu">
                         <a href="users.php"><i class="mdi mdi-account-multiple-plus"></i>Users</a>

                     </li>

                     <li class="has-submenu">
                         <a href="adminReport.php"><i class="mdi mdi-finance"></i>General Report</a>

                     </li>


                     <?php  } ?>


                 </ul>
                 <!-- End navigation menu -->
             </div> <!-- end #navigation -->
         </div> <!-- end container -->
     </div> <!-- end navbar-custom -->
 </header>