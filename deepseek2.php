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

<!DOCTYPE html>
<html>
<head>
    <title>Manage Data</title>
    <style>
        .management-section {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ddd;
        }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 8px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #f2f2f2; }
        .delete-btn { 
            background-color: #ff4444; 
            color: white; 
            border: none; 
            padding: 5px 10px; 
            cursor: pointer;
        }
        .delete-btn:hover { background-color: #cc0000; }
        .tabs { margin-bottom: 20px; }
        .tab-link { 
            padding: 10px 20px; 
            cursor: pointer; 
            background-color: #e0e0e0;
            border: none;
        }
        .tab-link.active { background-color: #4CAF50; color: white; }
        .tab-content { display: none; }
        .tab-content.active { display: block; }
    </style>
</head>
<body>
    <h1>Data Management Console</h1>

    <div class="tabs">
        <button class="tab-link active" onclick="openTab(event, 'departments')">Departments</button>
        <button class="tab-link" onclick="openTab(event, 'regions')">Regions</button>
        <button class="tab-link" onclick="openTab(event, 'jobgroups')">Job Groups</button>
    </div>

    <!-- Departments Tab -->
    <div id="departments" class="tab-content active">
        <h2>Departments</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Department Name</th>
                <th>Parent Department</th>
                <th>Actions</th>
            </tr>

            <?php foreach ($departments as $dept): ?>

            <tr>
                <td><?= htmlspecialchars($dept['dept_id']) ?></td>
                <td><?= htmlspecialchars($dept['department_title']) ?></td>
                <td><?= htmlspecialchars($dept['parent_name'] ?? 'None') ?></td>
                <td>
                    <form method="POST" onsubmit="return confirm('Delete this department?')">
                        <input type="hidden" name="table" value="departments">
                        <input type="hidden" name="id" value="<?= $dept['dept_id'] ?>">
                        <button type="submit" name="delete" class="delete-btn">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
            
        </table>
    </div>

    <!-- Regions Tab -->
    <div id="regions" class="tab-content">
        <h2>Regions</h2>
        <table>
            
            <tr>
                <th>ID</th>
                <th>Region Name</th>
                <th>Code</th>
                <th>Actions</th>
            </tr>
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
        </table>
    </div>

    <!-- Job Groups Tab -->
    <div id="jobgroups" class="tab-content">
        <h2>Job Groups</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Group Code</th>
                <th>Group Name</th>
                <th>Salary Range</th>
                <th>Actions</th>
            </tr>
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
        </table>
    </div>

    <script>
        // Tab switching functionality
        function openTab(evt, tabName) {
            // Hide all tab content
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.style.display = 'none';
            });

            // Remove active class from all tab links
            document.querySelectorAll('.tab-link').forEach(link => {
                link.classList.remove('active');
            });

            // Show selected tab and mark button as active
            document.getElementById(tabName).style.display = 'block';
            evt.currentTarget.classList.add('active');
        }
    </script>
</body>
</html>