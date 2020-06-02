 <header id="topnav">
            <div class="topbar-main">
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
                            <li class="dropdown notification-list d-none d-sm-block">
                                <form role="search" class="app-search">
                                    <div class="form-group mb-0"> 
                                        <input type="text" class="form-control" placeholder="Search..">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form> 
                            </li>

                           

                           
    
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="mdi mdi-bell noti-icon"></i>
                                    <span class="badge badge-pill badge-info noti-icon-badge" id="count"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                                    <!-- item-->
                                    <h6 class="dropdown-item-text">
                                        Notifications (37)
                                    </h6>
                                    <div class="pre-scrollable notification-item-list" id="dropdown-menu" >
                                        <!-- item-->
                                       
                                      

                                      
                                      
                                    </div>
                                  
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                        View all <i class="fi-arrow-right"></i>
                                    </a>
                                </div>        
                            </li>
                            <li class="dropdown notification-list">
                                <div class="dropdown notification-list">
                                    <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <!-- item-->
                                       
                                        <?php  if(isset($_SESSION['user_id']) ){ ?>
                                            <a class="dropdown-item" href="activity_logs.php"><i class="mdi mdi-lock-open-outline m-r-5"></i> History</a>

                                        <?php }else{ ?>

                                              <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5"></i> Happenings</a>
                                        
                                       
                                      <?php } ?>
                                       <a class="dropdown-item" href="profile.php"><i class="mdi mdi-account-circle m-r-5"></i> Profile</a>
                                       
                                       
                                       
                                        <a class="dropdown-item d-block" href="settings.php"><i class="mdi mdi-settings m-r-5"></i> Settings</a>

                                      
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="php_action/general_logout.php"><i class="mdi mdi-power text-danger"></i> Logout</a>
                                    </div>                                                                    
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
                                       echo '<span class="btn btn-info">'.$_SESSION['fullName'].'<span>';
                                    }else if(isset($_SESSION['user_id'])){
                                         echo '<span class="btn btn-info">'.$_SESSION['fullName'].'<span>';
                                    }else{
                                         echo '<span class="btn btn-info">No User<span>';
                                    }

                                     ?>
                                </h6>
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
                                    
                                </ul>
                            </li>

                           

                            <li class="has-submenu">
                                <a href="orders.php"><i class="mdi mdi-cart-plus"></i>Orders Section</a>
                                <ul class="submenu">

                                    <?php if(real_counting('customers') > 0){ ?>
                                    <li><a href="create_order.php">Create Order</a></li>
                                    <?php } else{?>

                                    <li><a href="add_customer.php">No customers</a></li>

                                    <?php } ?>
                                    
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="mdi mdi-basket-fill"></i>Sales Section</a>
                            </li>                           


                            <li class="has-submenu">
                                <a href="reports.php"><i class="mdi mdi-finance"></i>Reports Sectionclear</a>
                               
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