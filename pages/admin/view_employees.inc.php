

<?php
/* 
Employee Management System v3.0
PHP Display Code with Enhanced Security
*/

// Database Configuration
$db_host = 'localhost';
$db_name = 'fred_db';
$db_user = 'root';
$db_pass = '0716632613';

try {
    // 1. Establish Secure Database Connection
    $pdo = new PDO(
        "mysql:host=$db_host;dbname=$db_name", 
        $db_user, 
        $db_pass,
        [
            PDO::ATTR_EMULATE_PREPARES => false,  // Security: disable emulated prepares
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    );

    // 2. Fetch Employee Data with Department Hierarchy
    $query = "
        SELECT 
            e.staff_no,
            e.name,
            e.kra_pin,
            e.gross_pay,
            d.department_title AS department,
            pd.department_title AS parent_department,
            r.region_name,
            jg.group_name,
            b.bank_name,
            bb.branch_name,
            TIMESTAMPDIFF(YEAR, e.date_of_birth, CURDATE()) AS age,
            IFNULL(
                TIMESTAMPDIFF(YEAR, e.emp_date, e.termination_date), 
                TIMESTAMPDIFF(YEAR, e.emp_date, CURDATE())
            ) AS years_service
        FROM employees e
        LEFT JOIN departments d ON e.dept_id = d.dept_id
        LEFT JOIN departments pd ON d.parent_dept_id = pd.dept_id
        LEFT JOIN regions r ON e.region_id = r.region_id
        LEFT JOIN job_groups jg ON e.job_group_id = jg.job_group_id
        LEFT JOIN bank_branches bb ON e.bank_branch_id = bb.branch_id
        LEFT JOIN banks b ON bb.bank_id = b.bank_id
        ORDER BY e.staff_no
    ";

    // 3. Secure Query Execution
    $stmt = $pdo->query($query);
    $employees = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
} catch(PDOException $e) {
    error_log("Database Error: " . $e->getMessage());
    die("A system error occurred. Please try again later.");
}
?>



<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title>:: Employees</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <link rel="stylesheet" href="../../assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="../../assets/plugins/morrisjs/morris.min.css" />

    <link rel="stylesheet" href="../../assets/plugins/multi-select/css/multi-select.css">
    <!-- Bootstrap Spinner Css -->
    <link rel="stylesheet" href="../../assets/plugins/jquery-spinner/css/bootstrap-spinner.css">
    <!-- JQuery DataTable Css -->
    <link rel="stylesheet" href="../../assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
    <!-- Bootstrap Tagsinput Css -->
    <link rel="stylesheet" href="../../assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">
    <!-- Bootstrap Select Css -->
    <link rel="stylesheet" href="../../assets/plugins/bootstrap-select/css/bootstrap-select.css" />
    <!-- noUISlider Css -->
    <link rel="stylesheet" href="../../assets/plugins/nouislider/nouislider.min.css" />
    <!-- Select2 -->
    <link rel="stylesheet" href="../../assets/plugins/select2/select2.css" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="../../assets/custom/izitoast/css/iziToast.min.css">

   
    <link rel="stylesheet" href="../../assets/css/style.min.css">
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

    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>All Staff</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="ti ti-home"></i> Home </a></li>
                    <li class="breadcrumb-item active"> View Employees </li>
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

            <div class="col-lg-12">
                
                <div class="card">
                    <div class="header">

                        <div class="header">
                            <h2><strong> <i class="ti ti-refresh"></i> Employees </strong> Overview </h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="add_employee.inc.php"> <i class="zmdi zmdi-account-o"></i> Add</a></li>
                                        <li><a href="#">  <i class="ti ti-import"></i> Import </a></li>
                                        <li><a href="#"> <i class="zmdi zmdi-account-box-mail"></i>  Ess</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-refresh"></i></a>
                                </li>
                            </ul>
                        </div>
                            
                    </div>
                    


                    <div class="body">

                        <div class="row clearfix">
                            

                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">                                   
                                    <select class="form-control form-control-sm" data-placeholder="Select" >
                                        <option value="" disabled selected>~ All Types ~</option>
                                        <option value="Regular (open-ended)">Regular (open-ended)</option>
                                        <option value="Regular (fixed-term)">Regular (fixed-term)</option>
                                        <option value="Intern">Intern</option>
                                        <option value="Probationary">Probationary</option>
                                        <option value="Casual">Casual</option>
                                        <option value="Consultant">Consultant</option>
                                    </select>                                   
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">                                   
                                    <select class="form-control form-control-sm" data-placeholder="Select" >
                                        <option value="" disabled selected> - All job titles - </option>
                                        <option value="Human Resource Management">Human Resource Management</option>
                                        <option value="Information Technology">Information Technology</option>
                                        <option value="Procurement Officer">Procurement Officer</option>
                                    </select>                                   
                                </div>
                            </div>


                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <select class="form-control  show-tick" multiple data-selected-text-format="count">
                                        <option value=""> - All Departments - </option>
                                        <option value="Select all">Select all</option>
                                        <option value="Accountant">Accountant</option>
                                        <option value="IT">IT</option>
                                        <option value="Reception">Reception</option>
                                        <option value="Administration">Administration</option>
                                        <option value="Casual">Casual</option>

                                        
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <select class="form-control  show-tick" multiple data-selected-text-format="count">
                                        <option value=""> - All Regions - </option>
                                        <option value="Makueni">Makueni</option>

                                        
                                    </select>
                                </div>
                            </div>

                            
                            <button class="btn btn-primary btn-sm waves-effect m-r-20" data-toggle="modal" data-target="#largeModal">
                                 <i class="ti ti-eye"></i> custom display </button>

                            <div class="col-lg-3 col-md-6">
                                    <button class="btn btn-primary" id="toastr-6">Launch</button>
                            </div>


                            

                        </div>

                        

                    </div>
                    
                    
                </div>

                
            </div>
        </div>

        <!-- Tabs With Icon Title -->
        <div class="row clearfix">
            <div class="col-sm-12">
                <div class="card">
                    <div class="body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs p-0 mb-3 nav-tabs-success" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home_with_icon_title"> <i class="ti ti-check-box"></i> Active </a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile_with_icon_title"><i class="ti ti-thought"></i> Terminated </a></li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#messages_with_icon_title">
                                    <i class="ti ti-id-badge"></i> All 
                                </a>
                            </li>
                            
                        </ul>
                        
                        <!-- Tab panes -->
                        <div class="tab-content">

                           <hr>

                            
                            <div role="tabpanel" class="tab-pane in active" id="home_with_icon_title">

                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                        
                                        <thead>

                                            

                                            <tr>
                                                <th>Staff_No</th>
                                                <th>Name</th>
                                                <th>Department</th>
                                                <th>Parent_Dept</th>
                                                <th>Job_Group</th>
                                                <th>Gross_Pay</th>
                                                <th>Bank</th>
                                                <th>Years_Service</th>
                                                <th>Age</th>
                                            </tr>

                                        </thead>
                                        <tfoot>
                                            
                                            <tr>
                                                <th>Staff_No</th>
                                                <th>Name</th>
                                                <th>Department</th>
                                                <th>Parent_Dept</th>
                                                <th>Job_Group</th>
                                                <th>Gross_Pay</th>
                                                <th>Bank</th>
                                                <th>Years-Service</th>
                                                <th>Age</th>
                                            </tr>

                                        </tfoot>
                                        <tbody>

                                            <?php 
                                            // 4. Using for loop for display
                                            $totalEmployees = count($employees);
                                            
                                            for($i = 0; $i < $totalEmployees; $i++):
                                                $emp = $employees[$i];
                                            ?>

                                            <tr>
                                                <td><?= htmlspecialchars($emp['staff_no'], ENT_QUOTES) ?></td>
                                                <td><?= htmlspecialchars($emp['name']) ?></td>
                                                <td><?= htmlspecialchars($emp['department']) ?></td>
                                                <td><?= $emp['parent_department'] ? htmlspecialchars($emp['parent_department']) : 'N/A' ?></td>
                                                <td><?= htmlspecialchars($emp['group_name']) ?></td>
                                                <td class="currency">Ksh <?= number_format($emp['gross_pay'], 2) ?></td>
                                                <td><?= htmlspecialchars($emp['bank_name']) ?></td>
                                                <td><?= $emp['years_service'] ?></td>
                                                <td><?= $emp['age'] ?></td>
                                            </tr>

                                            <?php endfor; ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <div role="tabpanel" class="tab-pane" id="profile_with_icon_title">
                                <div class="table-responsive">
                                    <table id="Tble" class="table table-bordered table-striped table-hover dataTable js-exportable">
                                        
                                        <thead>

                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Department</th>
                                                <th>Age</th>
                                                <th>Hire date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Department</th>
                                                <th>Age</th>
                                                <th>Hire date</th>
                                                <th>Status</th>
                                            </tr>

                                        </tfoot>
                                        <tbody>

                                            <?php 
                                                foreach ($terminatedEmployees as $employee):
                                            ?>
                                            
                                            <tr>
                                                <td> <?= $employee['name'] ?> </td>
                                                <td> <?= $employee['position'] ?> </td>
                                                <td> <?= $employee['department'] ?> </td>
                                                <td> <?= $employee['age'] ?> </td>
                                                <td> <?= $employee['hire_date'] ?> </td>
                                                <!-- status  -->
                                                <td> <?= 
                                                    $employee['status']  == 
                                                    1 ? 'Active' : 'Terminated'?>
                                                </td>

                                            </tr>

                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="messages_with_icon_title">
                                    

                                <div class="table-responsive">
                                    <table id="Tble" class="table table-bordered table-striped table-hover dataTable js-exportable">
                                        
                                        <thead>

                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Department</th>
                                                <th>Age</th>
                                                <th>Hire date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Department</th>
                                                <th>Age</th>
                                                <th>Hire date</th>
                                                <th>Status</th>
                                            </tr>

                                        </tfoot>
                                        <tbody>

                                            <?php 
                                                foreach ($allEmployees as $employee):
                                            ?>
                                            
                                            <tr>
                                                
                                                <td> <?= $employee['name'] ?> </td>
                                                <td> <?= $employee['position'] ?> </td>
                                                <td> <?= $employee['department'] ?> </td>
                                                <td> <?= $employee['age'] ?> </td>
                                                <td> <?= $employee['hire_date'] ?> </td>
                                                <!-- status  -->
                                                <td> <?= 
                                                    $employee['status']  == 
                                                    1 ? 'Active' : 'Terminated'?>
                                                </td>

                                            </tr>

                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
  
</section>


<!-- Right Sidebar -->
<?php
    include '../components/modals.inc.php';
?>


<!-- Jquery Core Js --> 
<script src="../../assets/custom/izitoast/js/iziToast.min.js"></script>
<script src="../../assets/js/pages/toastr.js"></script>


<script src="../../assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="../../assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="../../assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->

<script src="../../assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script> <!-- Bootstrap Colorpicker Js --> 
<script src="../../assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script> <!-- Input Mask Plugin Js --> 
<script src="../../assets/plugins/multi-select/js/jquery.multi-select.js"></script> <!-- Multi Select Plugin Js --> 
<script src="../../assets/plugins/jquery-spinner/js/jquery.spinner.js"></script> <!-- Jquery Spinner Plugin Js --> 
<script src="../../assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script> <!-- Bootstrap Tags Input Plugin Js --> 
<script src="../../assets/plugins/nouislider/nouislider.js"></script> <!-- noUISlider Plugin Js -->

<!-- Jquery DataTable Plugin Js --> 
<script src="../../assets/bundles/datatablescripts.bundle.js"></script>
<script src="../../assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="../../assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="../../assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="../../assets/plugins/jquery-datatable/buttons/buttons.flash.min.js"></script>
<script src="../../assets/plugins/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="../../assets/plugins/jquery-datatable/buttons/buttons.print.min.js"></script>


<script src="../../assets/bundles/mainscripts.bundle.js"></script>
<script src="../../assets/js/pages/tables/jquery-datatable.js"></script>
<script src="../../assets/js/pages/global.js"></script>


<script src="../../assets/js/pages/index.js"></script>

<script> 
    


    $("#toastr-6").click(function () {
        iziToast.show({
            title: 'Hello, world!',
            message: 'This awesome plugin is made by iziToast',
            position: 'topRight'
        });
    });


   
</script>



</body>


</html>