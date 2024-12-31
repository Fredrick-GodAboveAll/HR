<!doctype html>
<html class="no-js " lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>:: Add emp</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="../../assets/plugins/bootstrap/css/bootstrap.min.css">
<!-- Custom Css -->
<link  rel="stylesheet" href="../../assets/css/style.min.css">
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
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Tabs</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Components</a></li>
                        <li class="breadcrumb-item active">Tabs</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            

            <!-- Tabs With Icon Title -->
            <div class="row clearfix">
                <div class="col-sm-12">
                    <form action="" method="POST" name="signin" class="needs-validation" novalidate>
                        <div class="card">
                            <div class="header">
                                <h2><strong> Add </strong> An Employee :</h2>

                                <ul class="header-dropdown">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else</a></li>
                                        </ul>
                                    </li>
                                    <li class="remove">
                                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">


                                <!-- the name is fetched to this place when viewing and updating  -->
                                <!-- <p>Tabs Success, add class with <code>.nav-tabs-success</code></p> -->
                                

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs p-0 mb-3 " role="tablist"><code></code>
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home_with_icon_title">  
                                        <span>Personal Details</span> </a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile_with_icon_title">
                                        <span> Salary Details</span> </a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages_with_icon_title"> 
                                        <span> HR details</span></a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings_with_icon_title">
                                        <i class="zmdi zmdi-account-box-o"></i> <span> Contact Details</span> </a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings_with_icon_title">
                                        <i class="zmdi zmdi-folder-outline"></i> <span> Documents</span> </a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings_with_icon_title">
                                        <span> Deductions</span> </a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings_with_icon_title">
                                        <span> Benefits</span> </a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings_with_icon_title">
                                        <span> Earnings</span> </a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings_with_icon_title">
                                        <span> Loans</span> </a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings_with_icon_title">
                                        <i class="ti ti-lock"></i> <span> Employee Login (ESS)</span> </a></li>

                                </ul>

                                <!-- separation to content  -->
                                <hr />
                                
                                <!-- Tab panes -->
                                
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane in active" id="home_with_icon_title"> <b>Home Content</b>
                                        
                                        
                                            
                                        <div class="col-sm-12">
                                            <div class="form-group">                                    
                                                <input type="text" class="form-control" required placeholder="Username" />
                                                <div class="invalid-feedback">
                                                    Please fill in 
                                                </div>
                                            </div>
                                            <div class="form-group">                                   
                                                <input type="password" class="form-control" required placeholder="Password" />
                                                <div class="invalid-feedback">
                                                    Please fill in 
                                                </div>
                                            </div>
                                        </div>

                                                
                                            
                                        
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="profile_with_icon_title"> <b>Profile Content</b>
                                        <p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                            pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                            sadipscing mel. </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="messages_with_icon_title"> <b>Message Content</b>
                                        <p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                            pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                            sadipscing mel. </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="settings_with_icon_title"> <b>Settings Content</b>
                                        <p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                            pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                            sadipscing mel. </p>
                                    </div>
                                </div> 
                                
                            </div>

                            <div class="card-footer">
                                <button class="btn btn-success btn-sm" type="submit">
                                    
                                    Add & Continue 
                                    <i class="ti ti-arrow-right"></i>
                                    
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</section>

<!-- Jquery Core Js --> 
<script src="../../assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="../../assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="../../assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 

<!-- custom script  -->

<script>
// javacript form validation 

// Bootstrap 4 Validation
$(".needs-validation").submit(function () {
    var form = $(this);
    if (form[0].checkValidity() === false) {
    event.preventDefault();
    event.stopPropagation();
    }
    form.addClass("was-validated");
});
</script>

<!-- custom script  -->

</body>


</html>