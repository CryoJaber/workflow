<?php 


use Cake\Datasoure\ConnectionManager;


?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Workflow | CryoCenter Frostware Suite</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Web App For Use By Service Team Members at CryoBuilt To Better Serve Customers" name="description" />
        <meta content="CryoCenter Frostware (CryoBuilt) By Jessie Abernathy" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/theme.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <div class="main-content">

                <header id="page-topbar">
                    <div class="navbar-header">
                        <!-- LOGO -->
                        <div class="navbar-brand-box d-flex align-items-left">
                            <a href="index.html" class="logo">
                                <img src="assets/images/logo-light.png"/>
                            </a>

                            <button type="button" class="btn btn-sm mr-2 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
                                <i class="fa fa-fw fa-bars"></i>
                            </button>
                        </div>
        
                        <div class="d-flex align-items-center">
        
                            <div class="dropdown d-inline-block ml-2">
                                <button type="button" class="btn header-item noti-icon waves-effect waves-light" id="page-header-search-dropdown"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-magnify"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                    aria-labelledby="page-header-search-dropdown">
                                    
                                    <form class="p-3">
                                        <div class="form-group m-0">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
        
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item waves-effect waves-light"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="" src="assets/images/flags/us.jpg" alt="Header Language" height="16">
                                    <span class="d-none d-sm-inline-block ml-1">English</span>
                                    <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="assets/images/flags/spain.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Spanish</span>
                                    </a>
        
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="assets/images/flags/germany.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">German</span>
                                    </a>
        
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="assets/images/flags/italy.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Italian</span>
                                    </a>
        
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="assets/images/flags/russia.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Russian</span>
                                    </a>
                                </div>
                            </div>
        
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item noti-icon waves-effect waves-light" id="page-header-notifications-dropdown"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-bell"></i>
                                    <span class="badge badge-danger badge-pill">3</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                    aria-labelledby="page-header-notifications-dropdown">
                                    <div class="p-3">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0"> Notifications </h6>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#!" class="small"> View All</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-simplebar style="max-height: 230px;">
                                        <a href="" class="text-reset notification-item">
                                            <div class="media">
                                                <img src="assets/images/users/avatar-5.jpg"
                                                    class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1">Samuel Coverdale</h6>
                                                    <p class="font-size-12 mb-1">You have new follower on Instagram</p>
                                                    <p class="font-size-11 font-weight-bold mb-0 text-muted"><i
                                                            class="mdi mdi-clock-outline"></i> 2 min ago</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="" class="text-reset notification-item">
                                            <div class="media">
                                                <div class="avatar-xs mr-3">
                                                    <span class="avatar-title bg-primary rounded-circle">
                                                        <i class="mdi mdi-cloud-download-outline"></i>
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1">Download Available !</h6>
                                                    <p class="font-size-12 mb-1">Latest version of admin is now available.
                                                        Please download here.</p>
                                                    <p class="font-size-11 font-weight-bold mb-0 text-muted"><i
                                                            class="mdi mdi-clock-outline"></i> 4 hours ago</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="" class="text-reset notification-item">
                                            <div class="media">
                                                <img src="assets/images/users/avatar-8.jpg"
                                                    class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1">Victoria Mendis</h6>
                                                    <p class="font-size-12 mb-1">Just upgraded to premium account.</p>
                                                    <p class="font-size-11 font-weight-bold mb-0 text-muted"><i
                                                            class="mdi mdi-clock-outline"></i> 1 day ago</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="p-2 border-top">
                                        <a class="btn btn-sm btn-light btn-block text-center" href="javascript:void(0)">
                                            <i class="mdi mdi-arrow-down-circle mr-1"></i> Load More..
                                        </a>
                                    </div>
                                </div>
                            </div>
        
                            <div class="dropdown d-inline-block ml-2">
                                <button type="button" class="btn header-item waves-effect waves-light"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-3.jpg"
                                        alt="Header Avatar">
                                    <span class="d-none d-sm-inline-block ml-1">Jamie D.</span>
                                    <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                        <span>Inbox</span>
                                        <span>
                                            <span class="badge badge-pill badge-info">3</span>
                                        </span>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                        <span>Profile</span>
                                        <span>
                                            <span class="badge badge-pill badge-warning">1</span>
                                        </span>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                        Settings
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                        <span>Lock Account</span>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                        <span>Log Out</span>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </header>

                <div class="topnav">
                    <div class="container-fluid">
                        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
                            
                            <div class="collapse navbar-collapse" id="topnav-menu-content">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html">
                                            <i class="bx bx-home-smile"></i>Dashboard
                                        </a>
                                    </li>
                                
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-cookie"></i>UI Elements <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-components">
                                            <a href="ui-buttons.html" class="dropdown-item">Buttons</a>
                                            <a href="ui-cards.html" class="dropdown-item">Cards</a>
                                            <a href="ui-carousel.html" class="dropdown-item">Carousel</a>
                                            <a href="ui-embeds.html" class="dropdown-item">Embeds</a>
                                            <a href="ui-general.html" class="dropdown-item">General</a>
                                             <a href="ui-grid.html" class="dropdown-item">Grid</a>
                                            <a href="ui-media-objects.html" class="dropdown-item">Media Objects</a>
                                            <a href="ui-modals.html" class="dropdown-item">Modals</a>
                                            <a href="ui-progressbars.html" class="dropdown-item">Progress Bars</a>
                                            <a href="ui-tabs.html" class="dropdown-item">Tabs</a>
                                            <a href="ui-typography.html" class="dropdown-item">Typography</a>
                                            <a href="ui-toasts.html" class="dropdown-item">Toasts</a>
                                            <a href="ui-tooltips-popovers.html" class="dropdown-item">Tooltips & Popovers</a>
                                            <a href="ui-scrollspy.html" class="dropdown-item">Scrollspy</a>
                                            <a href="ui-spinners.html" class="dropdown-item">Spinners</a>
                                            <a href="ui-sweetalerts.html" class="dropdown-item">Sweet Alerts</a>
                                        </div>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-file"></i>Pages <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-pages">
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Auth Pages <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                                    <a href="auth-login.html" class="dropdown-item">Login</a>
                                                    <a href="auth-register.html" class="dropdown-item">Register</a>
                                                    <a href="auth-recoverpw.html" class="dropdown-item">Recover Password</a>
                                                    <a href="auth-lock-screen.html" class="dropdown-item">Lock Screen</a>
                                                    <a href="auth-404.html" class="dropdown-item">Error 404</a>
                                                    <a href="auth-500.html" class="dropdown-item">Error 500</a>
                                                </div>
                                            </div>
                                            <a href="pages-invoice.html" class="dropdown-item">Invoice</a>
                                            <a href="pages-starter.html" class="dropdown-item">Starter Page</a>
                                            <a href="pages-maintenance.html" class="dropdown-item">Maintenance</a>
                                            <a href="pages-faqs.html" class="dropdown-item">FAQs</a>
                                            <a href="pages-pricing.html" class="dropdown-item">Pricing</a>
                                        </div>
                                    </li>

                                   

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-forms" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bxs-eraser"></i>Forms <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-forms">
                                            <a href="forms-elements.html" class="dropdown-item">Elements</a>
                                            <a href="forms-plugins.html" class="dropdown-item">Plugins</a>
                                            <a href="forms-validation.html" class="dropdown-item">Validation</a>
                                            <a href="forms-mask.html" class="dropdown-item">Masks</a>
                                            <a href="forms-quilljs.html" class="dropdown-item">Quilljs</a>
                                            <a href="forms-uploads.html" class="dropdown-item">File Uploads</a>
                                        </div>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-charts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-doughnut-chart"></i>Charts <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                            <a href="charts-morris.html" class="dropdown-item">Morris</a>
                                            <a href="charts-google.html" class="dropdown-item">Google</a>
                                            <a href="charts-chartjs.html" class="dropdown-item">Chartjs</a>
                                            <a href="charts-sparkline.html" class="dropdown-item">Sparkline</a>
                                            <a href="charts-knob.html" class="dropdown-item">Jquery Knob</a>
                                        </div>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-share-alt"></i>More <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-more">
                                            <a href="calendar.html" class="dropdown-item">Calendar</a>
                                            <a href="team.html" class="dropdown-item">Team Members</a>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-tables" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Tables <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-tables">
                                                    <a href="tables-basic.html" class="dropdown-item">Basic Tables</a>
                                                    <a href="tables-datatables.html" class="dropdown-item">Data Tables</a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Icons <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                                    <a href="icons-boxicons.html" class="dropdown-item">Boxicons</a>
                                                    <a href="icons-materialdesign.html" class="dropdown-item">Material Design</a>
                                                    <a href="icons-fontawesome.html" class="dropdown-item">Font awesome 5</a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-maps" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Maps <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-maps">
                                                    <a href="maps-google.html" class="dropdown-item">Google Maps</a>
                                                    <a href="maps-vector.html" class="dropdown-item">Vector Maps</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>                

                <div class="page-content">
                    <div class="container-fluid">
                       
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Opatix</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="avatar-sm float-right">
                                        <span class="avatar-title bg-soft-primary rounded-circle">
                                            <i class="bx bx-layer m-0 h3 text-primary"></i>
                                        </span>
                                    </div>
                                    <h6 class="text-muted text-uppercase mt-0">Project Income</h6>
                                    <h3 class="my-3">$4,514</h3>
                                    <span class="badge badge-soft-primary mr-1"> +11% </span> <span class="text-muted">From previous period</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="avatar-sm float-right">
                                        <span class="avatar-title bg-soft-primary rounded-circle">
                                            <i class="bx bx-dollar-circle m-0 h3 text-primary"></i>
                                        </span>
                                    </div>
                                    <h6 class="text-muted text-uppercase mt-0">Net Revenue</h6>
                                    <h3 class="my-3">$85,365</h3>
                                    <span class="badge badge-soft-primary mr-1"> -29% </span> <span class="text-muted">This Month</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="avatar-sm float-right">
                                        <span class="avatar-title bg-soft-primary rounded-circle">
                                            <i class="bx bx-analyse m-0 h3 text-primary"></i>
                                        </span>
                                    </div>
                                    <h6 class="text-muted text-uppercase mt-0">New Leads</h6>
                                    <h3 class="my-3">$<span data-plugin="counterup">9.94</span></h3>
                                    <span class="badge badge-soft-primary mr-1"> 0% </span> <span class="text-muted">This Month</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="avatar-sm float-right">
                                        <span class="avatar-title bg-soft-primary rounded-circle">
                                            <i class="bx bx-basket m-0 h3 text-primary"></i>
                                        </span>
                                    </div>
                                    <h6 class="text-muted text-uppercase mt-0">Quoted </h6>
                                    <h3 class="my-3" data-plugin="counterup">5,842</h3>
                                    <span class="badge badge-soft-primary mr-1"> +89% </span> <span class="text-muted">This Month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">

                        <div class="col-lg-8">
                             <div class="card card-animate">
                                <div class="card-body">
                                    <div class="dropdown float-right position-relative">
                                        <a href="#" class="dropdown-toggle h4 text-muted" data-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#" class="dropdown-item">Action</a></li>
                                            <li><a href="#" class="dropdown-item">Another action</a></li>
                                            <li><a href="#" class="dropdown-item">Something else here</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li><a href="#" class="dropdown-item">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <h4 class="card-title d-inline-block">Total Revenue</h4>

                                    <div id="morris-line-example" class="morris-chart" style="height: 320px;"></div>

                                    <div class="row text-center mt-4">
                                        <div class="col-6">
                                            <h4>$7841.12</h4>
                                            <p class="text-muted mb-0">Total Revenue</p>
                                        </div>
                                        <div class="col-6">
                                            <h4>17</h4>
                                            <p class="text-muted mb-0">Open Compaign</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-4">
                             <div class="card card-animate">
                                <div class="card-body">
                                    <div class="dropdown float-right position-relative">
                                        <a href="#" class="dropdown-toggle h4 text-muted" data-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#" class="dropdown-item">Action</a></li>
                                            <li><a href="#" class="dropdown-item">Another action</a></li>
                                            <li><a href="#" class="dropdown-item">Something else here</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li><a href="#" class="dropdown-item">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <h4 class="card-title d-inline-block">Activity By Teams</h4>

                                    <div id="morris-donut-example" class="morris-chart" style="height: 320px;"></div>

                                    <div class="row text-center mt-4">
                                        <div class="col-6">
                                            <h4>5,459</h4>
                                            <p class="text-muted mb-0">Total Sales</p>
                                        </div>
                                        <div class="col-6">
                                            <h4>18</h4>
                                            <p class="text-muted mb-0">Open Compaign</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row-->

                    <div class="row">
                        <div class="col-lg-4">
                             <div class="card card-animate">
                                <div class="card-body">
                                    <div class="dropdown float-right position-relative">
                                        <a href="#" class="dropdown-toggle h4 text-muted" data-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#" class="dropdown-item">Action</a></li>
                                            <li><a href="#" class="dropdown-item">Another action</a></li>
                                            <li><a href="#" class="dropdown-item">Something else here</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li><a href="#" class="dropdown-item">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <h4 class="card-title d-inline-block mb-3">Team Members - Messages</h4>

                                    <div data-simplebar style="max-height: 380px;">
                                        <a href="#" class="d-flex align-items-center border-bottom py-3">
                                            <div class="mr-3">
                                                <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-sm" alt="user">
                                            </div>
                                            <div class="w-100">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="mb-1">Leonardo Payne</h6>
                                                    <p class="text-muted font-size-11 mb-0">12.30 PM</p>
                                                </div>
                                                <p class="text-muted font-size-13 mb-0">Hey! there I'm available...</p>
                                            </div>
                                        </a>
    
                                        <a href="#" class="d-flex align-items-center border-bottom py-3">
                                            <div class="mr-3">
                                                <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-sm" alt="user">
                                            </div>
                                            <div class="w-100">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="mb-1">Soren Drouin</h6>
                                                    <p class="text-muted font-size-11 mb-0">09.30 PM</p>
                                                </div>
                                                <p class="text-muted font-size-13 mb-0">Completed "Design new idea"....</p>
                                            </div>
                                        </a>
    
                                        <a href="#" class="d-flex align-items-center border-bottom py-3">
                                            <div class="mr-3">
                                                <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-sm" alt="user">
                                            </div>
                                            <div class="w-100">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="mb-1">Anne Simard</h6>
                                                    <p class="text-muted font-size-11 mb-0">10.30 PM</p>
                                                </div>
                                                <p class="text-muted font-size-13 mb-0">Assigned task "Poster illustation design"...</p>
                                            </div>
                                        </a>
    
                                        <a href="#" class="d-flex align-items-center border-bottom py-3">
                                            <div class="mr-3">
                                                <img src="assets/images/users/avatar-5.jpg" class="rounded-circle avatar-sm" alt="user">
                                            </div>
                                            <div class="w-100">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="mb-1">Nicolas Chartier</h6>
                                                    <p class="text-muted font-size-11 mb-0">02.00 PM</p>
                                                </div>
                                                <p class="text-muted font-size-13 mb-0">Completed "Drinking bottle graphics"...</p>
                                            </div>
                                        </a>
    
                                        <a href="#" class="d-flex align-items-center border-bottom py-3">
                                            <div class="mr-3">
                                                <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-sm" alt="user">
                                            </div>
                                            <div class="w-100">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="mb-1">Gano Cloutier</h6>
                                                    <p class="text-muted font-size-11 mb-0">05.30 PM</p>
                                                </div>
                                                <p class="text-muted font-size-13 mb-0">Assigned task "Hyper app design"...</p>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-8">
                             <div class="card card-animate">
                                <div class="card-body">
                                    <div class="dropdown float-right position-relative">
                                        <a href="#" class="dropdown-toggle h4 text-muted" data-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#" class="dropdown-item">Action</a></li>
                                            <li><a href="#" class="dropdown-item">Another action</a></li>
                                            <li><a href="#" class="dropdown-item">Something else here</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li><a href="#" class="dropdown-item">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <h4 class="card-title d-inline-block">All Projects</h4>

                                    <div class="table-responsive">
                                        <table class="table table-borderless table-hover mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Project Name</th>
                                                    <th>Client Name</th>
                                                    <th>Deadline</th>
                                                    <th>Income</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>1</th>
                                                    <td>App design and development</td>
                                                    <td>Arthur Powell</td>
                                                    <td>Sun, 08/10</td>
                                                    <td>$8,532</td>
                                                    <td class="text-warning">In Process</td>
                                                </tr>
                                                <tr>
                                                    <th>2</th>
                                                    <td>Coffee detail page - Main Page</td>
                                                    <td>Joan Lennox</td>
                                                    <td>Fri, 17/10</td>
                                                    <td>$5,350</td>
                                                    <td class="text-success">Done</td>
                                                </tr>
                                                <tr>
                                                    <th>3</th>
                                                    <td>Poster illustation design</td>
                                                    <td>Ronald Roesler</td>
                                                    <td>Tue, 13/08</td>
                                                    <td>$2,250</td>
                                                    <td class="text-danger">Hold</td>
                                                </tr>
                                                <tr>
                                                    <th>4</th>
                                                    <td>Drinking bottle graphics</td>
                                                    <td>Mickey Cochran</td>
                                                    <td>Mon, 10/08</td>
                                                    <td>$4,532</td>
                                                    <td class="text-success">Done</td>
                                                </tr>
                                                <tr>
                                                    <th>5</th>
                                                    <td>Landing page design - Home</td>
                                                    <td>Barry Trahan</td>
                                                    <td>Thus, 03/09</td>
                                                    <td>$1,555</td>
                                                    <td class="text-warning">In Process</td>
                                                </tr>
                                                <tr>
                                                    <th>6</th>
                                                    <td>Company logo design</td>
                                                    <td>James Grimes</td>
                                                    <td>Sat, 07/19</td>
                                                    <td>$9,352</td>
                                                    <td class="text-success">Done</td>
                                                </tr>
                                                <tr>
                                                    <th>7</th>
                                                    <td>Product page redesign</td>
                                                    <td>Philip Jetton</td>
                                                    <td>Wed, 09/08</td>
                                                    <td>$6,895</td>
                                                    <td class="text-danger">Hold</td>
                                                </tr>
                                                <tr>
                                                    <th>8</th>
                                                    <td>Hero page - Main Page</td>
                                                    <td>Amanda Salinas</td>
                                                    <td>Sun, 02/20</td>
                                                    <td>$3,895</td>
                                                    <td class="text-success">Done</td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div> <!-- end col -->

                    </div>
                    <!-- end row-->
    

                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-center text-lg-left">
                                    2020 © Opatix.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-right d-none d-lg-block">
                                    Design & Develop by Myra
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/simplebar.min.js"></script>

         <!-- Morris Js-->
        <script src="../plugins/morris-js/morris.min.js"></script>
        
        <!-- Raphael Js-->
        <script src="../plugins/raphael/raphael.min.js"></script>

        <!-- Morris Custom Js-->
        <script src="assets/pages/dashboard-demo.js"></script>

        <!-- App js -->
        <script src="assets/js/theme.js"></script>

    </body>

</html>
