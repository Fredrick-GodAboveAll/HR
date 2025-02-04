

<?php
// Database configuration
$db_host = 'localhost';
$db_name = 'company_db';
$db_user = 'root';
$db_pass = '0716632613';

try {
    // Connect to database
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query with joins
    $sql = "SELECT e.staff_no, e.name, e.gross_pay, 
            d.dept_name, r.region_name, jg.group_name,
            b.bank_name, bb.branch_name,
            TIMESTAMPDIFF(YEAR, e.date_of_birth, CURDATE()) AS age,
            IFNULL(TIMESTAMPDIFF(YEAR, e.emp_date, e.termination_date), 
                   TIMESTAMPDIFF(YEAR, e.emp_date, CURDATE())) AS emp_duration
            FROM employees e
            LEFT JOIN departments d ON e.dept_id = d.dept_id
            LEFT JOIN regions r ON e.region_id = r.region_id
            LEFT JOIN job_groups jg ON e.job_group_id = jg.job_group_id
            LEFT JOIN bank_branches bb ON e.bank_branch_id = bb.branch_id
            LEFT JOIN banks b ON bb.bank_id = b.bank_id";

    $stmt = $pdo->query($sql);
    
} catch(PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Employee Records</title>
    <style>
        table { border-collapse: collapse; margin: 20px; }
        th, td { padding: 8px; border: 1px solid #ddd; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Employee Records</h2>
    <table>
        <tr>
            <th>Staff No</th>
            <th>Name</th>
            <th>Department</th>
            <th>Region</th>
            <th>Job Group</th>
            <th>Gross Pay</th>
            <th>Bank</th>
            <th>Branch</th>
            <th>Age</th>
            <th>Years Service</th>
        </tr>
        <?php while ($row = $stmt->fetch()): ?>
        <tr>
            <td><?= $row['staff_no'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['dept_name'] ?></td>
            <td><?= $row['region_name'] ?></td>
            <td><?= $row['group_name'] ?></td>
            <td>Ksh <?= number_format($row['gross_pay'], 2) ?></td>
            <td><?= $row['bank_name'] ?></td>
            <td><?= $row['branch_name'] ?></td>
            <td><?= $row['age'] ?></td>
            <td><?= $row['emp_duration'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>