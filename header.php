<?php
require 'db.php';
if ( ! isset($_SESSION['idusuario']))
{
	header('Location: index.php');
}
 ?>
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>RyR Computacion</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- third party css -->
        <link href="assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- third party css end -->
<link href="assets/css/vendor/apexcharts.css" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div class="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!-- LOGO -->
                    <a href="dashboard.php" class="logo text-center">
                        <span class="logo-lg">
                            <img src="assets/images/logo.jpg" alt="" height="55">
                        </span>
                        <span class="logo-sm">
                            <img src="assets/images/logo.jpg" alt="" height="16">
                        </span>
                    </a>

                    <!--- Sidemenu -->
                    <ul class="metismenu side-nav">

											<li class="side-nav-item">
													<a href="dashboard.php" class="side-nav-link">
														<i class="dripicons-meter"></i>
														<!--<span class="badge badge-success float-right">2</span>-->
															<span> Dashboard </span>
													</a>
											</li>

                      <li class="side-nav-item">
                          <a href="masvendidos.php" class="side-nav-link">
                            <i class="dripicons-trophy"></i>
                            <!--<span class="badge badge-success float-right">2</span>-->
                              <span> Mas Vendidos </span>
                          </a>
                      </li>

                      <li class="side-nav-item">
                          <a href="ofrecer.php" class="side-nav-link">
                            <i class="dripicons-heart"></i>
                            <!--<span class="badge badge-success float-right">2</span>-->
                              <span> Hay que Ofrecer </span>
                          </a>
                      </li>

											<li class="side-nav-item">
													<a href="comisiones.php" class="side-nav-link">
														<i class="dripicons-star"></i>
														<!--<span class="badge badge-success float-right">2</span>-->
															<span> Comisiones </span>
													</a>
											</li>

                      <li class="side-nav-item">
                          <a href="pedidos.php" class="side-nav-link">
                            <i class="dripicons-cloud"></i>
                            <!--<span class="badge badge-success float-right">2</span>-->
                              <span> Pedidos </span>
                          </a>
                      </li>




                      <!--  <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-view-apps"></i>
                                <span> Apps </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="apps-calendar.html">Calendar</a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="javascript: void(0);" aria-expanded="false">Projects
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="side-nav-third-level" aria-expanded="false">
                                        <li>
                                            <a href="apps-projects-list.html">List</a>
                                        </li>
                                        <li>
                                            <a href="apps-projects-details.html">Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="apps-tasks.html">Tasks</a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="javascript: void(0);" aria-expanded="false">eCommerce
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="side-nav-third-level" aria-expanded="false">
                                        <li>
                                            <a href="apps-ecommerce-products.html">Products</a>
                                        </li>
                                        <li>
                                            <a href="apps-ecommerce-products-details.html">Products Details</a>
                                        </li>
                                        <li>
                                            <a href="apps-ecommerce-orders.html">Orders</a>
                                        </li>
                                        <li>
                                            <a href="apps-ecommerce-orders-details.html">Order Details</a>
                                        </li>
                                        <li>
                                            <a href="apps-ecommerce-customers.html">Customers</a>
                                        </li>
                                        <li>
                                            <a href="apps-ecommerce-shopping-cart.html">Shopping Cart</a>
                                        </li>
                                        <li>
                                            <a href="apps-ecommerce-checkout.html">Checkout</a>
                                        </li>
                                        <li>
                                            <a href="apps-ecommerce-sellers.html">Sellers</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>-->











                    </ul>


                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



                        <!-- ============================================================== -->
                        <!-- Start Page Content here -->
                        <!-- ============================================================== -->

                        <div class="content-page">
                            <div class="content">

                                <!-- Topbar Start -->
                                <div class="navbar-custom">
                                    <ul class="list-unstyled topbar-right-menu float-right mb-0">

                                      <!--  <li class="dropdown notification-list">
                                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="dripicons-bell noti-icon"></i>
                                                <span class="noti-icon-badge"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">


                                                <div class="dropdown-item noti-title">
                                                    <h5 class="m-0">
                                                        <span class="float-right">
                                                            <a href="javascript: void(0);" class="text-dark">
                                                                <small>Clear All</small>
                                                            </a>
                                                        </span>Notification
                                                    </h5>
                                                </div>

                                                <div class="slimscroll" style="max-height: 230px;">

                                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                        <div class="notify-icon bg-primary">
                                                            <i class="mdi mdi-comment-account-outline"></i>
                                                        </div>
                                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                                            <small class="text-muted">1 min ago</small>
                                                        </p>
                                                    </a>



                                                </div>

                                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                                    View All
                                                </a>

                                            </div>
                                        </li>-->

                                        <li class="dropdown notification-list">
                                            <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                                aria-expanded="false">
                                                <span class="account-user-avatar">
                                                  <i class="mdi mdi-account widget-icon"></i>
                                                </span>
                                                <span>
                                                    <span class="account-user-name"><?php echo $_SESSION['nombreusuario'];?></span>

                                                </span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">


                                                <!-- item-->
                                                <a href="logout.php" class="dropdown-item notify-item">
                                                    <i class="mdi mdi-account-circle mr-1"></i>
                                                    <span>Cerrar Sesion</span>
                                                </a>

                                            </div>
                                        </li>

                                    </ul>
                                    <button class="button-menu-mobile open-left disable-btn">
                                        <i class="mdi mdi-menu"></i>
                                    </button>

                                </div>
                                <!-- end Topbar -->
