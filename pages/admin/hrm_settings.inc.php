

<?php
// manage.php
/* 
Management Console for Core Data
*/

// Database Configuration
$db_host = 'localhost';
$db_name = 'fred_db';
$db_user = 'root';
$db_pass = '0716632613';

// Handle Delete Action
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    try {
        $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $table = $_POST['table'];
        $id = $_POST['id'];

        // Validate table name to prevent SQL injection
        $allowed_tables = ['departments', 'regions', 'job_groups'];
        if (!in_array($table, $allowed_tables)) {
            throw new Exception("Invalid table specified");
        }

        // Prepare and execute delete
        $stmt = $pdo->prepare("DELETE FROM $table WHERE {$table}_id = ?");
        $stmt->execute([$id]);

        // Redirect to prevent form resubmission
        header("Location: manage.php");
        exit();

    } catch(Exception $e) {
        die("Error: " . $e->getMessage());
    }
}

// Fetch Data for Display
try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    
    // Get Departments with Parent Names
    $deptQuery = "SELECT d.*, p.department_title as parent_name 
                FROM departments d
                LEFT JOIN departments p ON d.parent_dept_id = p.dept_id";
    $departments = $pdo->query($deptQuery)->fetchAll();

    // Get Regions
    $regions = $pdo->query("SELECT * FROM regions")->fetchAll();

    // Get Job Groups
    $jobGroups = $pdo->query("SELECT * FROM job_groups")->fetchAll();

} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>



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
    <!-- JQuery DataTable Css -->
    <link rel="stylesheet" href="../../assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
    <!-- Custom Css -->
    <link  rel="stylesheet" href="../../assets/css/style.min.css">
    <link rel="stylesheet" href="../../assets/css/custom.css">

</head>

<body class="theme-blush">

<?php
    $page = 'hrm_settings';
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
                    <h2>Data Management Console</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="ti ti-home"></i> Home </a></li>
                        <li class="breadcrumb-item active"> hrm settings </li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <!-- Example Tab -->
            <div class="row clearfix">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="body">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs p-0 mb-3">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Departments</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile">Regions</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages">Job Groups</a></li>
                            </ul>                        
                            <!-- Tab panes -->
                            <div class="tab-content">

                                <div role="tabpanel" class="tab-pane in active" id="home">

                                    <span>Departments</span>

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover js-exportable dataTable">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Department Name</th>
                                                    <th>Parent Department</th>
                                                    <th>Actions</th> 
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($departments as $dept): ?>

                                                <tr>
                                                    
                                                    <td><?= htmlspecialchars($dept['department_title']) ?></td>
                                                    <td><?= htmlspecialchars($dept['parent_name'] ?? 'None') ?></td>
                                                    <td>
                                                        <form method="POST" onsubmit="return confirm('Delete this department?')">
                                                            <input type="hidden" name="table" value="departments">
                                                            <input type="hidden" name="id" value="<?= $dept['dept_id'] ?>">
                                                            <button type="submit" name="delete" class="btn btn-default delete-btn waves-effect waves-float btn-sm waves-light"><i class="ti ti-close "></i></button>
                                                        </form>
                                                    </td>
                                                    
                                                </tr>
                                                <?php endforeach; ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                                
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <span>Regions</span>

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover js-exportable dataTable">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Region Name</th>
                                                    <th>Code</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($regions as $region): ?>
                                                <tr>
                                                    <td><?= htmlspecialchars($region['region_id']) ?></td>
                                                    <td><?= htmlspecialchars($region['region_name']) ?></td>
                                                    <td><?= htmlspecialchars($region['region_code']) ?></td>
                                                    <td>
                                                        <form method="POST" onsubmit="return confirm('Delete this region?')">
                                                            <input type="hidden" name="table" value="regions">
                                                            <input type="hidden" name="id" value="<?= $region['region_id'] ?>">
                                                            <button type="submit" name="delete" class="delete-btn">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                                <div role="tabpanel" class="tab-pane" id="messages">
                                    <span>job groups</span>

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover js-exportable dataTable">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Group Code</th>
                                                    <th>Group Name</th>
                                                    <th>Salary Range</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <?php foreach ($jobGroups as $jg): ?>
                                                <tr>
                                                    <td><?= htmlspecialchars($jg['job_group_id']) ?></td>
                                                    <td><?= htmlspecialchars($jg['group_code']) ?></td>
                                                    <td><?= htmlspecialchars($jg['group_name']) ?></td>
                                                    <td>
                                                        Ksh <?= number_format($jg['min_salary'], 2) ?> - 
                                                        Ksh <?= number_format($jg['max_salary'], 2) ?>
                                                    </td>
                                                    <td>
                                                        <form method="POST" onsubmit="return confirm('Delete this job group?')">
                                                            <input type="hidden" name="table" value="job_groups">
                                                            <input type="hidden" name="id" value="<?= $jg['job_group_id'] ?>">
                                                            <button type="submit" name="delete" class="delete-btn">Delete</button>
                                                        </form>
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
    </div>
</section>



<!-- Jquery Core Js --> 
<!-- Jquery Core Js --> 
<script src="../../assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="../../assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<!-- Jquery DataTable Plugin Js --> 
<script src="../../assets/bundles/datatablescripts.bundle.js"></script>
<script src="../../assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="../../assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="../../assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="../../assets/plugins/jquery-datatable/buttons/buttons.flash.min.js"></script>
<script src="../../assets/plugins/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="../../assets/plugins/jquery-datatable/buttons/buttons.print.min.js"></script>
<script src="../../assets/js/pages/global.js"></script>

<script src="../../assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="../../assets/js/pages/tables/jquery-datatable.js"></script>

</body>


</html>