<!doctype html>
<html class="no-js " lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>:: Home</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
<link rel="stylesheet" href="../../assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../../assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
<link rel="stylesheet" href="../../assets/plugins/charts-c3/plugin.css"/>

<link rel="stylesheet" href="../../assets/plugins/morrisjs/morris.min.css" />
<!-- Custom Css -->
<link rel="stylesheet" href="../../assets/css/style.min.css">
</head>

<body class="theme-blush">

<!-- Page Loader -->
<?php
    include '../components/loader.inc.php';
?>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Main Search -->
<?php
    include '../components/main_search.inc.php';
?>

<!-- Right Icon menu Sidebar -->
<?php
    include '../components/nav_bar.inc.php';
?>

<!-- Left Sidebar -->
<?php
    include '../components/left_sidebar.inc.php';
?>

<!-- Right Sidebar -->
<?php
    include '../components/right_sidebar.inc.php';
?>


<!-- Main Content -->

<section class="content">
    <div class="">

        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Dashboard</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i>Home</a></li>
                        <li class="breadcrumb-item active"> Dashboard</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2 big_icon traffic">
                        <div class="body">
                            <h6>Traffic</h6>
                            <h2>20 <small class="info">of 1Tb</small></h2>
                            <small>2% higher than last month</small>
                            <div class="progress">
                                <div class="progress-bar l-amber" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2 big_icon sales">
                        <div class="body">
                            <h6>Sales</h6>
                            <h2>12% <small class="info">of 100</small></h2>
                            <small>6% higher than last month</small>
                            <div class="progress">
                                <div class="progress-bar l-blue" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2 big_icon email">
                        <div class="body">
                            <h6>Email</h6>
                            <h2>39 <small class="info">of 100</small></h2>
                            <small>Total Registered email</small>
                            <div class="progress">
                                <div class="progress-bar l-purple" role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100" style="width: 39%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2 big_icon domains">
                        <div class="body">
                            <h6>Domains</h6>
                            <h2>8 <small class="info">of 10</small></h2>
                            <small>Total Registered Domain</small>
                            <div class="progress">
                                <div class="progress-bar l-green" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">

                    <!-- <div class="alert alert-danger p-2 border-secondary shadow-sm">
                        <div class="heading fw-bold mb-1" style="font-size: 1rem;">Alert Header</div>

                        <p>
                            <strong>HELLO !</strong> Change a few things up and try submitting again.
                        </p>

                        <div class="d-flex justify-content-end">
                            <button class="btn  btn-sm btn-danger waves-effect waves-red sm py-1 px-2">Learn More</button>
                        </div>
                        
                    </div> -->
                    
                    <div class="card">
                        <div class="header">
                            <h2><strong><i class="zmdi zmdi-chart"></i> Payroll</strong> Analytics</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">view</a></li>
                                        <li><a href="javascript:void(0);">Reports</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>

                        <div class="body mb-2">
                            
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="state_w1 mb-1 mt-1">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <span>NET PAY</span>
                                                <div class="w_description">
                                                    
                                                    <i class="zmdi zmdi-trending-up text-success"></i>
                                                    <span class="text-success">15.5%</span>
                                                </div>
                                            </div>
                                            <div 
                                                class="sparkline" 
                                                data-type="bar" 
                                                data-width="97%" 
                                                data-height="55px" 
                                                data-bar-Width="3" 
                                                data-bar-Spacing="16" 
                                                data-bar-Color="#868e96">
                                                4,8,6,7,8
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="state_w1 mb-1 mt-1">
                                        <div class="d-flex justify-content-between">
                                            <div>                                
                                                <span>
                                                    PAYE
                                                </span>
                                                <div class="w_description text-danger">
                                                    <i class="zmdi zmdi-trending-down"></i>
                                                    <span>15.5%</span>
                                                </div>
                                            </div>
                                            <div 
                                                class="sparkline" 
                                                data-type="bar" 
                                                data-width="97%" 
                                                data-height="55px" 
                                                data-bar-Width="3" 
                                                data-bar-Spacing="16" 
                                                data-bar-Color="#2bcbba">
                                                4,8,6,7,8
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="state_w1 mb-1 mt-1">
                                        <div class="d-flex justify-content-between">
                                            <div>                            
                                                
                                                <span>NSSF</span>
                                                <div class="w_description text-success">
                                                    <i class="zmdi zmdi-trending-up"></i>
                                                    <span>15.5%</span>
                                                </div>
                                            </div>
                                            
                                            <div 
                                                class="sparkline" 
                                                data-type="bar" 
                                                data-width="97%" 
                                                data-height="55px" 
                                                data-bar-Width="3" 
                                                data-bar-Spacing="16" 
                                                data-bar-Color="#82c885">
                                                4,8,6,7,8
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="state_w1 mb-1 mt-1">
                                        <div class="d-flex justify-content-between">
                                            <div>                            
                                                
                                                <span>NHIF</span>
                                                <div class="w_description text-success">
                                                    <i class="zmdi zmdi-trending-up"></i>
                                                    <span>15.5%</span>
                                                </div>
                                            </div>
                                            <div 
                                                class="sparkline" 
                                                data-type="bar" 
                                                data-width="97%" 
                                                data-height="55px" 
                                                data-bar-Width="3" 
                                                data-bar-Spacing="16" 
                                                data-bar-Color="#45aaf2">
                                                4,8,6,7,8
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="body">
                            <div id="chart-area-spline-sracked" class="c3_chart d_sales"></div>
                        </div>
                        
                        
                    </div>

                    
                </div>
            </div>

            <div class="row clearfix">

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card mcard_4">
                        <div class="body">
                            <ul class="header-dropdown list-unstyled">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-menu"></i> </a>
                                    <ul class="dropdown-menu slideUp">
                                        <li><a href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">Delete</a></li>
                                        <li><a href="javascript:void(0);">Report</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="img">
                                <img src="../../assets/images/lg/avatar1.jpg" class="rounded-circle" alt="profile-image">
                            </div>
                            <div class="user">
                                <h5 class="mt-3 mb-1">Eliana Smith</h5>
                                <small class="text-muted">UI/UX Desiger</small>
                            </div>
                            <ul class="list-unstyled social-links">
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-dribbble"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-behance"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> 

                <div class="col-lg-3 col-md-6 col-sm-6">

                    <div class="card w_data_1">
                        <div class="body">
                            <div class="w_icon pink"><i class="zmdi zmdi-bug"></i></div>
                            <h4 class="mt-3 mb-0">12.1k</h4>
                            <span class="text-muted">Bugs Fixed</span>
                            <div class="w_description text-success">
                                <i class="zmdi zmdi-trending-up"></i>
                                <span>15.5%</span>
                            </div>
                       </div>
                    </div>

                    <div class="card w_data_1">
                        <div class="body">
                            <div class="w_icon cyan"><i class="zmdi zmdi-ticket-star"></i></div>
                            <h4 class="mt-3 mb-1">01.8k</h4>
                            <span class="text-muted">Submitted Tickers</span>
                            <div class="w_description text-success">
                                <i class="zmdi zmdi-trending-up"></i>
                                <span>95.5%</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="card">

                        </div>
                    </div>

                    
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">

                    <div class="card ">

                        <div class="header">
                            <h2><strong> Payroll</strong></h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);">Run</a></li>
                                        <li><a href="javascript:void(0);">compare</a></li>
                                        <li><a href="javascript:void(0);">Reports</a></li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </div>

                        

                        <div class="body w_data_1">   

                            <span class="w_description text-muted">
                                Process your monthly payroll quick and easy 
                                Your last payroll month was <span class="badge badge-info">Info</span>
                            </span>

                            <div class="w_description text-success">
                                <button class="btn btn-primary btn-sm">
                                    <i class="zmdi zmdi-widgets"></i>
                                    Process payroll
                                    
                                </button>
                            </div>
                            

                        </div>
                    </div>

                    <div class="card">

                        <div class="header">
                            <h2><strong> Employees</strong> </h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);">Run</a></li>
                                        <li><a href="javascript:void(0);">compare</a></li>
                                        <li><a href="javascript:void(0);">Reports</a></li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </div>

                        <div class="body w_data_1">

                            <span class="w_description text-muted">
                                Manage your employees database. Currently managing 
                                <span class="text-success"> 2 <strong>Active</strong> employees</span>
                            </span>


                            <div class="w_description text-success">
                                <button 
                                    class="btn btn-primary btn-sm dropdown dropdown-toggle"
                                    href="add_employee.inc.php" 
                                    data-toggle="dropdown" 
                                    role="button" aria-haspopup="true" 
                                    aria-expanded="false" >
                                    <i class="zmdi zmdi-account"></i>
                                    Select an action
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="add_employee.inc.php">Add An Employee</a></li>
                                        <li><a href="#">Import Employees</a></li>
                                        <li><a href="#">View Employee List</a></li>
                                    </ul>
                                </button>
                            </div>
                            
                        </div>

                    </div>
                    
                </div>

                
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    
                    <div class="header">
                        <h2><strong>Organizations </strong> Reports</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp">
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                    <li><a href="javascript:void(0);">Delete</a></li>
                                    <li><a href="javascript:void(0);">Report</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="body">
                        <p>Reports for external and for internal use .</p>

                        <div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">

                            <div class="panel panel-primary">
                                <div class="panel-heading" role="tab" id="headingOne_1">
                                    <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseOne_1" aria-expanded="true" aria-controls="collapseOne_1"> Own Reports </a> </h4>
                                </div>
                                <div id="collapseOne_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_1">
                                    
                                    <div class="panel-body"> 
                                        <div class="row clearfix">
                                            <div class="col-lg-12">
                                                <div class="card">

                                                    <ul class="row profile_state list-unstyled">

                                                        <li class="col-lg-3 col-md-3 col-6">
                                                            <div class="body">
                                                                <div class="w_icon"><i class="zmdi zmdi-file-text col-blue"></i></div>
                                                                
                                                                <span class="text-muted">Monthly Muster Roll</span>
                                                            </div>
                                                        </li>

                                                        <li class="col-lg-3 col-md-3 col-6">
                                                            <div class="body">
                                                                <div class="w_icon"><i class="zmdi zmdi-chart col-red"></i></div>
                                                                
                                                                <span class="text-muted">Variance Reports</span>
                                                            </div>
                                                        </li>

                                                        <li class="col-lg-3 col-md-3 col-6">
                                                            <div class="body">
                                                                
                                                                <div class="w_icon"><i class="zmdi zmdi-folder-outline col-green"></i></div>
                                                                
                                                                <span class="text-muted">Custom Reports</span>
                                                            </div>
                                                        </li> 

                                                        <li class="col-lg-3 col-md-3 col-6">
                                                            <div class="body">
                                                                <div class="w_icon"><i class="zmdi zmdi-layers col-amber"></i></div>
                                                                <span class="text-muted">Net Pay Reports</span>
                                                            </div>
                                                        </li>

                                                                            
                                                    </ul>
                                                    
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-primary">
                                <div class="panel-heading" role="tab" id="headingTwo_1">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseTwo_1" aria-expanded="false"
                                            aria-controls="collapseTwo_1"> Statutory Reports </a> </h4>
                                </div>
                                <div id="collapseTwo_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_1">
                                    
                                    

                                    <div class="panel-body"> 
                                        <div class="row clearfix">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <ul class="row profile_state list-unstyled">

                                                        <li class="col-lg-3 col-md-3 col-6">
                                                            <div class="body">
                                                                <div class="w_icon"><img src="../../assets/images/lg/kra-logo.jpg" alt="fredrick"></div>
                                                                <h5 class="mt-3 mb-0">KRA</h5>
                                                                <span class="text-muted">Reports</span>
                                                            </div>
                                                        </li>

                                                        <li class="col-lg-3 col-md-3 col-6">
                                                            <div class="body">
                                                                <div class="w_icon"><img src="../../assets/images/lg/nhif-logo.jpg" alt="fredrick"></div>
                                                                <h5 class="mt-3 mb-0">KRA</h5>
                                                                <span class="text-muted">Reports</span>
                                                            </div>
                                                        </li>

                                                        <li class="col-lg-3 col-md-3 col-6">
                                                            <div class="body">
                                                                <div class="w_icon"><img src="../../assets/images/lg/nita-logo.gif" alt="fredrick"></div>
                                                                <h5 class="mt-3 mb-0">KRA</h5>
                                                                <span class="text-muted">Reports</span>
                                                            </div>
                                                        </li>

                                                        <li class="col-lg-3 col-md-3 col-6">
                                                            <div class="body">
                                                                <div class="w_icon"><img src="../../assets/images/lg/nssf-logo.jpg" alt="fredrick"></div>
                                                                <h5 class="mt-3 mb-0">KRA</h5>
                                                                <span class="text-muted">Reports</span>
                                                            </div>
                                                        </li>

                                                        

                                                                            
                                                    </ul>
                                                    
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="row clearfix">

                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Employee</strong> Count</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">Delete</a></li>
                                        <li><a href="javascript:void(0);">Report</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="chart-bar" class="c3_chart"></div>
                        </div>
                    </div>                
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Distribution</strong></h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">Delete</a></li>
                                        <li><a href="javascript:void(0);">Report</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body text-center">
                            <div id="chart-pie" class="c3_chart d_distribution"></div>                           
                        </div>
                    </div>
                </div>

                

            </div>

        </div>

    </div>
</section>


<!-- Jquery Core Js --> 
<script src="../../assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="../../assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="../../assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="../../assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->
<script src="../../assets/bundles/c3.bundle.js"></script>
<script src="../../assets/js/pages/charts/c3.js"></script>

<script src="../../assets/bundles/mainscripts.bundle.js"></script>
<script src="../../assets/js/pages/index.js"></script>

</body>


</html>