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
<link rel="stylesheet"  href="../../assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
<link rel="stylesheet" href="../../assets/plugins/light-gallery/css/lightgallery.css">


<link rel="stylesheet" href="../../assets/plugins/dropify/css/dropify.min.css">
<link rel="stylesheet" href="../../assets/plugins/select2/select2.css" />

<!-- Custom Css -->

<link  rel="stylesheet" href="../../assets/css/style.min.css">
<link rel="stylesheet" href="../../assets/css/custom.css">
</head>

<body class="theme-blush">


<?php
    $page = 'add_emp';
?>



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
                    <h2>Employees</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="ti ti-home"></i> Home </a></li>
                        <li class="breadcrumb-item "> View Employees </li>
                        <li class="breadcrumb-item active"> Add Employees </li>
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
                                    <li class="add">
                                        <a role="button" class="boxs-add"><i class="zmdi zmdi-plus"></i></a>
                                    </li>

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

                            <div class="progress-container progress-danger">
                                <!-- <span class="progress-badge">progress</span> -->
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                        <span class="progress-value ">  60%</span>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="body">


                                <!-- the name is fetched to this place when viewing and updating  -->
                                <!-- <p>Tabs Success, add class with <code>.nav-tabs-success</code></p> -->
                                

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs p-0 mb-3 " role="tablist"><code></code>
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#details_with_icon_title">  
                                        <span>Personal Details</span> </a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#salary_with_icon_title">
                                        <span> Salary Details</span> </a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#hr_with_icon_title"> 
                                        <span> HR details</span></a></li>

                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#contact_with_icon_title">
                                        <i class="zmdi zmdi-account-box-o"></i> <span> Contact Details</span> </a></li>

                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#documents_with_icon_title">
                                        <i class="zmdi zmdi-folder-outline"></i> <span> Documents</span> </a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#deductions_with_icon_title">
                                        <span> Deductions</span> </a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#benefits_with_icon_title">
                                        <span> Benefits</span> </a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#earnings_with_icon_title">
                                        <span> Earnings</span> </a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#loans_with_icon_title">
                                        <span> Loans</span> </a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#ess_with_icon_title">
                                        <i class="ti ti-lock"></i> <span> Employee Login (ESS)</span> </a></li>

                                </ul>

                                

                                <!-- separation to content  -->
                                <hr />

                                
                                
                                
                                <!-- Tab panes -->
                                
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane in active" id="details_with_icon_title"> 
                                        <!-- <b>Home Content</b> -->

                                        
                                        
                                        
                                        <div class="row clearfix">

                                            <div class="col-lg-3 col-md-6">
                                                <label for="first-name">first name</label>
                                                <div class="form-group">                                   
                                                    <input type="text" class="form-control form-control-sm" required />  
                                                    <div class="invalid-feedback">
                                                        start name ? 
                                                    </div>                                 
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-6">
                                                <label for="middle-name">middle name</label>
                                                <div class="form-group">                                   
                                                    <input type="text" class="form-control form-control-sm" required />  
                                                    <div class="invalid-feedback">
                                                        other names ?
                                                    </div>                                  
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-6">
                                                <label for="last-name">last name</label>
                                                <div class="form-group">                                   
                                                    <input type="text" class="form-control form-control-sm"  required />
                                                    <div class="invalid-feedback">
                                                        sir name ?
                                                    </div>                                    
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-6">
                                                <label for="gender">gender</label>
                                                <div class="form-group">                                   
                                                    <select class="form-control form-control-sm show-tick ms select2" data-placeholder="Select" required>
                                                        <option value="" disabled selected>-- Gender --</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Ketchup</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        your gender ?
                                                    </div>                                    
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-6">
                                                <label for="dob">date of birth</label>
                                                <div class="form-group">                                   
                                                    <input type="date" class="form-control form-control-sm date-picker"  required />
                                                    <div class="invalid-feedback">
                                                        birth day ?
                                                    </div>                                    
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-6">
                                                <label for="residency">residential status</label>
                                                <select class="form-control form-control-sm show-tick ms select2" data-placeholder="Select" required>
                                                    <option value="" disabled selected>-- Residency --</option>
                                                    <option value="Resident">Resident</option>
                                                    <option value="None Resident">None Resident</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    select residency 
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-6">
                                                <label for="id">national ID no :</label>
                                                <div class="form-group">                                   
                                                    <input type="number" class="form-control form-control-sm "  required />
                                                    <div class="invalid-feedback">
                                                        kenyan id number ?
                                                    </div>                                    
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-6">
                                                <label for="kra-pin">kra pin no :</label>
                                                <div class="form-group ">                                   
                                                    <input type="text" class="form-control form-control-sm"  required />
                                                    <div class="invalid-feedback">
                                                        kra tax id ?
                                                    </div>                                    
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-6">
                                                <label for="nssf">nssf no :</label>
                                                <div class="form-group ">                                   
                                                    <input type="number" class="form-control form-control-sm"  required />
                                                    <div class="invalid-feedback">
                                                        pension number ? 
                                                    </div>                                    
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-6">
                                                <label for="shif">shif no :</label>
                                                <div class="form-group ">                                   
                                                    <input type="text" class="form-control form-control-sm"  required />
                                                    <div class="invalid-feedback">
                                                        social health number ?
                                                    </div>                                    
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <label for="passport-photo" class="form-label">Upload Passport Photo</label>
                                                <div class="form-group">
                                                    <input type="file" id="passport-photo" class="form-control" accept=".jpg, .jpeg, .png" required>
                                                    <small class="form-text text-muted">Accepted formats: .jpg, .jpeg, .png. Max size: 2MB.</small>
                                                    <div class="invalid-feedback">Please upload a valid passport photo (JPG, JPEG, PNG).</div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-lg-2 col-md-12">
                                                <div class="card mcard_6">
                                                    <div class="body">
                                                        <a href="profile.html"><img src="../../assets/images/profile_av.jpg" class=" shadow " alt="profile-image"></a>
                                                                                    
                                                    </div>
                                                </div>
                    
                                            </div>

                                        </div>  
                                        
                                    </div>


                                    <div role="tabpanel" class="tab-pane " id="salary_with_icon_title">

                                        <div class="col-md-12 wb-margin-top-top">

                                            <div class="row clearfix">

                                                <div class="col-md-6">

                                                    <div class="form-group">

                                                        <label for="emp-type">Employment Type</label>

                                                        <div id="employment-view">

                                                            <div class="col-12">

                                                                <div class="row clearfix">

                                                                    <div class="col-6">

                                                                        <p id="employment-type-label" class="text-secondary">Regular (fixed-term)</p>

                                                                    </div>

                                                                    <div class="col-6">

                                                                        <div class="action-links">
                                                                            <a href="#" id="edit-type-link" class="text-primary"> [ Edit Type ]</a>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>


                                                        <div id="employment-edit" class="d-none">
                                                            <div class="form-group"> 
                                                            
                                                                <select class="form-control form-control-sm show-tick ms select2" data-placeholder="Select" required>
                                                                    <option value="" selected>Select employment type...</option>
                                                                    <option value="regular">Regular (fixed-term)</option>
                                                                    <option value="intern">Intern</option>
                                                                    <option value="contract">Contract</option>
                                                                    <option value="part-time">Part-Time</option>
                                                                </select>

                                                                <div class="invalid-feedback">
                                                                    Please select a valid employment type.
                                                                </div>
                                                            </div>
                                                            

                                                            <div class="action-links mb-3">
                                                                <a href="#" id="cancel-edit-link" class="text-danger">Cancel Edit</a>
                                                            </div>
                                                            <button type="button" id="update-button" class="btn btn-primary">Update</button>
                                                        </div>
                                                            

                                                    </div>

                                                    <hr />

                                                    <div class="form-group">

                                                        <label for="emp-type">monthly Salary [ KES ]</label>

                                                        <div id="employment-view">

                                                            <div class="col-12">

                                                                <div class="row clearfix">

                                                                    <div class="col-7">

                                                                        <p id="employment-type-label" class="text-secondary">
                                                                            <strong>40,000</strong> (monthly basis pay)</p>

                                                                    </div>

                                                                    <div class="col-4">

                                                                        <div class="action-links">
                                                                            <a href="#" id="edit-type-link" class="text-primary"> [ Edit Pay ]</a>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>


                                                        <div id="employment-edit" class="d-none">
                                                            <div class="form-group"> 
                                                            
                                                                <select class="form-control form-control-sm show-tick ms select2" data-placeholder="Select" required>
                                                                    <option value="" selected>Select employment type...</option>
                                                                    <option value="regular">Regular (fixed-term)</option>
                                                                    <option value="intern">Intern</option>
                                                                    <option value="contract">Contract</option>
                                                                    <option value="part-time">Part-Time</option>
                                                                </select>

                                                                <div class="invalid-feedback">
                                                                    Please select a valid employment type.
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                            

                                                    </div>

                                                    <hr />

                                                    <div class="form-group">

                                                        <label for="emp-type"> work shift</label>
                    
                                                        <select class="form-control form-control-sm show-tick ms select2" data-placeholder="Select" required>
                                                            <option value="" disabled selected>-- Not Set --</option>
                                                            <option value="male">Male</option>
                                                            <option value="female">Ketchup</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            pension number ? 
                                                        </div>                                    
                                                       
                                                    </div>

                                                    <div class="form-group">

                                                        <label for="emp-type"> Off Days</label>
                    
                                                        <select class="form-control form-control-sm show-tick ms select2" data-placeholder="Select" required>
                                                            <option value="" disabled selected>-- Not Set --</option>
                                                            <option value="male">
                                                                <span>sunday</span>
                                                            </option>
                                                            <option value="female">
                                                                <span>monday</span>
                                                            </option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            pension number ? 
                                                        </div>                                    
                                                       
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="emp-type"> Work Span</label>

                                                        <div class="btn-group">
                                                            
                                                            
                                                            <input type="text" class="form-control form-control-sm col-sm-6"  required>
                                                             
                                                            <input  class="form-control form-control-sm col-sm-4" disabled  value="Hours Per day">
                                                            
                                                        </div>
                                                         
                                                    </div>

                                                    <hr />

                                                    <div class="form-group">
                                                        <label for="emp-type"> Hourly Rate [KES]</label>

                                                        <div class="btn-group">
                                                            
                                                            
                                                            <input type="number" class="form-control form-control-sm col-sm-6" disabled  value="141.222">
                                                             
                                                            <input  class="form-control form-control-sm col-sm-4" disabled  value="Per Hour">
                                                            
                                                        </div>
                                                         
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="emp-type"> Daily Rate [KES]</label>

                                                        <div class="btn-group">
                                                            
                                                            
                                                            <input type="number" class="form-control form-control-sm col-sm-6" disabled  value="141.222">
                                                             
                                                            <input  class="form-control form-control-sm col-sm-4" disabled  value="Per Day">
                                                            
                                                        </div>
                                                         
                                                    </div>

                                                    <div class="form-group">

                                                        <label for="emp-type"> Off Days</label>
                    
                                                        <select class="form-control form-control-sm show-tick ms select2" data-placeholder="Select" required>
                                                            <option value="P.A.Y.E. primary employee" disabled selected>-- P.A.Y.E. primary employee --</option>
                                                            <option value="P.A.Y.E. primary employee">
                                                                <span>P.A.Y.E. primary employee</span>
                                                            </option>
                                                            <option value="P.A.Y.E. secondary employee">
                                                                <span>P.A.Y.E. secondary employee</span>
                                                            </option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            pension number ? 
                                                        </div>                                    
                                                       
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="btn-group">
                                                            
                                                            
                                                            <input type="text" class="form-control form-control-sm col-sm-4"  value="Split Dropdown">
                                                            <input type="text" class="form-control form-control-sm col-sm-3" disabled  value="Hours Per day">

                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="hr_with_icon_title"> <b>Message Content</b>
                                        <p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                            pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                            sadipscing mel. </p>
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="contact_with_icon_title"> <b>Message Content</b>
                                        <textarea name="" id="">type all</textarea>
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="documents_with_icon_title"> <b>Settings Content</b>
                                        <p> Lorng mel. </p>
                                    </div>


                                    <div role="tabpanel" class="tab-pane" id="deductions_with_icon_title"> <b>Settings Content</b>
                                        <p> mel. </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="benefits_with_icon_title"> <b>Settings Content</b>
                                        <p> Lo </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="earnings_with_icon_title"> <b>Settings Content</b>
                                        <p> Lorem ipsum 2323 </p>
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="loans_with_icon_title"> <b>Settings Content</b>
                                        <p> Lorem fabellas ne est, eu munere gubergren
                                            sadipscing mel. </p>
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="ess_with_icon_title"> <b>Settings Content</b>
                                        <p> Lor sadipscing mel. </p>
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


<!-- Large Size -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Modal title</h4>
            </div>
            <div class="modal-body"> 
                <form action="" method="POST">
                <div class="col-lg-6 col-md-6">

                    <label for="passport">Passport photo</label>

                    <div class="form-group">                                   
                        <input type="file" class="dropify" required data-allowed-file-extensions="pdf png" required>
                        <div class="invalid-feedback">
                            your picture !
                        </div>                                    
                    </div>
                </div>
                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-round waves-effect">save</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">close</button>
            </div>
        </div>
    </div>
</div>


<script src="../../assets/plugins/select2/select2.min.js"></script> <!-- Select2 Js -->
<!-- Jquery Core Js --> 
<script src="../../assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="../../assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="../../assets/plugins/dropify/js/dropify.min.js"></script>

<script src="../../assets/plugins/momentjs/moment.js"></script> <!-- Moment Plugin Js --> 
<script src="../../assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="../../assets/js/pages/forms/dropify.js"></script>
<script src="../../assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script> <!-- Input Mask Plugin Js --> 
<script src="../../assets/plugins/light-gallery/js/lightgallery-all.min.js"></script> <!-- Light Gallery Plugin Js --> 
<script src="../../assets/js/pages/medias/image-gallery.js"></script> 
<script src="../../assets/js/pages/global.js"></script>
<script src="../../assets/js/pages/forms/basic-form-elements.js"></script>


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




    const editTypeLink = document.getElementById('edit-type-link');
    const cancelEditLink = document.getElementById('cancel-edit-link');
    const employmentView = document.getElementById('employment-view');
    const employmentEdit = document.getElementById('employment-edit');

    editTypeLink.addEventListener('click', (e) => {
        e.preventDefault();
        employmentView.classList.add('d-none');
        employmentEdit.classList.remove('d-none');
    });

    cancelEditLink.addEventListener('click', (e) => {
        e.preventDefault();
        employmentView.classList.remove('d-none');
        employmentEdit.classList.add('d-none');
    });


            
</script>

<!-- custom script  -->

</body>


</html>