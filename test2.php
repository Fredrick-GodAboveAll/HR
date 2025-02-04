Here’s a suggested schema and approach for creating the database tables. I'll define the data types for each field and suggest separate tables for fields like Department, Region, and Bank, which are likely to be reference tables.

1. Main Table: employees

CREATE TABLE employees (
    staff_no INT PRIMARY KEY,               -- Staff No
    name VARCHAR(100),                      -- Name
    last_payroll DATE,                      -- Last Payroll (use DATE for dates)
    job_title VARCHAR(100),                 -- Job Title
    type VARCHAR(50),                       -- Type
    emp_date DATE,                          -- Emp. Date
    termination DATE,                       -- Termination Date (nullable)
    emp_duration INT,                       -- Emp. Duration in days
    contract_exp_days INT,                  -- Contract Exp. (Days)
    basic_pay DECIMAL(10, 2),               -- Basic Pay
    gross_pay DECIMAL(10, 2),               -- Gross Pay
    net_pay DECIMAL(10, 2),                 -- Net Pay
    gender CHAR(1),                         -- Gender ('M' or 'F')
    dob DATE,                               -- Date of Birth
    age INT,                                -- Age
    email VARCHAR(100),                     -- Email
    email_personal VARCHAR(100),            -- Personal Email
    phone VARCHAR(15),                      -- Phone
    pin VARCHAR(20),                        -- PIN
    id VARCHAR(50),                         -- ID
    nssf VARCHAR(20),                       -- NSSF
    nhif VARCHAR(20),                       -- NHIF
    dept_id INT,                            -- Dept. (Foreign Key to departments)
    region_id INT,                          -- Region (Foreign Key to regions)
    job_group VARCHAR(50),                  -- Job Group
    project VARCHAR(100),                   -- Project
    union VARCHAR(100),                     -- Union
    bank_id INT,                            -- Bank (Foreign Key to banks)
    bank_branch VARCHAR(100),               -- Bank Branch
    bank_code VARCHAR(50),                  -- Bank Code
    bank_acc VARCHAR(50)                    -- Bank Acc
);

2. Department Table: departments

CREATE TABLE departments (
    dept_id INT PRIMARY KEY AUTO_INCREMENT, -- Dept. ID
    dept_name VARCHAR(100)                  -- Department Name
);

3. Region Table: regions

CREATE TABLE regions (
    region_id INT PRIMARY KEY AUTO_INCREMENT, -- Region ID
    region_name VARCHAR(100)                  -- Region Name
);

4. Bank Table: banks

CREATE TABLE banks (
    bank_id INT PRIMARY KEY AUTO_INCREMENT,   -- Bank ID
    bank_name VARCHAR(100),                   -- Bank Name
    bank_code VARCHAR(50)                     -- Bank Code
);


---

PHP Code to Display Employee Data in Table

Below is a sample PHP code to display the employees table. You can fetch data from the database and join the reference tables (e.g., departments, regions, banks) to display meaningful values instead of just IDs.

<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch employee data
$sql = "SELECT e.staff_no, e.name, e.last_payroll, e.job_title, e.type, e.emp_date, e.termination, e.emp_duration,
               e.contract_exp_days, e.basic_pay, e.gross_pay, e.net_pay, e.gender, e.dob, e.age, e.email, e.email_personal,
               e.phone, e.pin, e.id, e.nssf, e.nhif, d.dept_name AS department, r.region_name AS region, e.job_group,
               e.project, e.union, b.bank_name AS bank, e.bank_branch, e.bank_code, e.bank_acc
        FROM employees e
        LEFT JOIN departments d ON e.dept_id = d.dept_id
        LEFT JOIN regions r ON e.region_id = r.region_id
        LEFT JOIN banks b ON e.bank_id = b.bank_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Staff No</th>
                <th>Name</th>
                <th>Last Payroll</th>
                <th>Job Title</th>
                <th>Type</th>
                <th>Emp. Date</th>
                <th>Termination</th>
                <th>Emp. Duration</th>
                <th>Contract Exp. (Days)</th>
                <th>Basic Pay</th>
                <th>Gross Pay</th>
                <th>Net Pay</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Age</th>
                <th>Email</th>
                <th>Personal Email</th>
                <th>Phone</th>
                <th>PIN</th>
                <th>ID</th>
                <th>NSSF</th>
                <th>NHIF</th>
                <th>Department</th>
                <th>Region</th>
                <th>Job Group</th>
                <th>Project</th>
                <th>Union</th>
                <th>Bank</th>
                <th>Bank Branch</th>
                <th>Bank Code</th>
                <th>Bank Account</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["staff_no"] . "</td>
                <td>" . $row["name"] . "</td>
                <td>" . $row["last_payroll"] . "</td>
                <td>" . $row["job_title"] . "</td>
                <td>" . $row["type"] . "</td>
                <td>" . $row["emp_date"] . "</td>
                <td>" . $row["termination"] . "</td>
                <td>" . $row["emp_duration"] . "</td>
                <td>" . $row["contract_exp_days"] . "</td>
                <td>" . $row["basic_pay"] . "</td>
                <td>" . $row["gross_pay"] . "</td>
                <td>" . $row["net_pay"] . "</td>
                <td>" . $row["gender"] . "</td>
                <td>" . $row["dob"] . "</td>
                <td>" . $row["age"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["email_personal"] . "</td>
                <td>" . $row["phone"] . "</td>
                <td>" . $row["pin"] . "</td>
                <td>" . $row["id"] . "</td>
                <td>" . $row["nssf"] . "</td>
                <td>" . $row["nhif"] . "</td>
                <td>" . $row["department"] . "</td>
                <td>" . $row["region"] . "</td>
                <td>" . $row["job_group"] . "</td>
                <td>" . $row["project"] . "</td>
                <td>" . $row["union"] . "</td>
                <td>" . $row["bank"] . "</td>
                <td>" . $row["bank_branch"] . "</td>
                <td>" . $row["bank_code"] . "</td>
                <td>" . $row["bank_acc"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

Notes:

Data Types: I used appropriate data types for different fields, such as DATE for dates, VARCHAR for strings, and DECIMAL for financial values.

Normalization: I normalized the database by creating separate tables for departments, regions, and banks. These are foreign keys in the employees table.

PHP Code: The PHP code fetches employee data along with the department, region, and bank details using JOIN statements, and displays it in an HTML table.


Here's a complete SQL schema with sample data and PHP display code:

1. **Database Initialization Script (company_db.sql)**
```sql
-- Create database
CREATE DATABASE IF NOT EXISTS company_db;
USE company_db;

-- Create tables
CREATE TABLE departments (
    dept_id INT PRIMARY KEY AUTO_INCREMENT,
    dept_name VARCHAR(50) NOT NULL
);

CREATE TABLE regions (
    region_id INT PRIMARY KEY AUTO_INCREMENT,
    region_name VARCHAR(50) NOT NULL
);

CREATE TABLE job_groups (
    job_group_id INT PRIMARY KEY AUTO_INCREMENT,
    group_name VARCHAR(50) NOT NULL
);

CREATE TABLE projects (
    project_id INT PRIMARY KEY AUTO_INCREMENT,
    project_name VARCHAR(100) NOT NULL
);

CREATE TABLE unions (
    union_id INT PRIMARY KEY AUTO_INCREMENT,
    union_name VARCHAR(100) NOT NULL
);

CREATE TABLE banks (
    bank_id INT PRIMARY KEY AUTO_INCREMENT,
    bank_name VARCHAR(100) NOT NULL
);

CREATE TABLE bank_branches (
    branch_id INT PRIMARY KEY AUTO_INCREMENT,
    bank_id INT,
    branch_name VARCHAR(100),
    branch_code VARCHAR(20),
    FOREIGN KEY (bank_id) REFERENCES banks(bank_id)
);

CREATE TABLE employees (
    staff_no INT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    last_payroll DATE,
    emp_date DATE NOT NULL,
    termination_date DATE NULL,
    contract_exp_days INT,
    basic_pay DECIMAL(10,2),
    gross_pay DECIMAL(10,2),
    net_pay DECIMAL(10,2),
    gender ENUM('Male','Female','Other'),
    date_of_birth DATE NOT NULL,
    email VARCHAR(100),
    personal_email VARCHAR(100),
    phone VARCHAR(20),
    pin VARCHAR(100), -- Hashed value
    national_id VARCHAR(20),
    nssf VARCHAR(20),
    nhif VARCHAR(20),
    bank_acc VARCHAR(30),
    dept_id INT,
    region_id INT,
    job_group_id INT,
    project_id INT,
    union_id INT,
    bank_branch_id INT,
    FOREIGN KEY (dept_id) REFERENCES departments(dept_id),
    FOREIGN KEY (region_id) REFERENCES regions(region_id),
    FOREIGN KEY (job_group_id) REFERENCES job_groups(job_group_id),
    FOREIGN KEY (project_id) REFERENCES projects(project_id),
    FOREIGN KEY (union_id) REFERENCES unions(union_id),
    FOREIGN KEY (bank_branch_id) REFERENCES bank_branches(branch_id)
);

-- Insert sample data
INSERT INTO departments (dept_name) VALUES 
('Human Resources'), ('Finance'), ('IT');

INSERT INTO regions (region_name) VALUES 
('Nairobi'), ('Mombasa'), ('Kisumu');

INSERT INTO job_groups (group_name) VALUES 
('JG1'), ('JG2'), ('JG3');

INSERT INTO projects (project_name) VALUES 
('Project Alpha'), ('Project Beta');

INSERT INTO unions (union_name) VALUES 
('KUW'), ('KUDHEIHA');

INSERT INTO banks (bank_name) VALUES 
('Equity Bank'), ('KCB Bank');

INSERT INTO bank_branches (bank_id, branch_name, branch_code) VALUES 
(1, 'Nairobi CBD', 'EQNBI001'),
(2, 'Mombasa Main', 'KCBMM001');

INSERT INTO employees VALUES (
    1001,
    'John Doe',
    CURDATE(),
    '2020-01-15',
    NULL,
    90,
    50000.00,
    65000.00,
    55000.00,
    'Male',
    '1990-05-15',
    'john@company.com',
    'john@gmail.com',
    '0712345678',
    '$2y$10$NlQq9sWZxZvZ7b3D5VHrU.8q1oYd4JjKXm0LzYcR1tS9wQ1FbW6O', -- 1234
    '12345678',
    'NSSF123',
    'NHIF123',
    '1234567890',
    1,  -- dept_id (HR)
    1,  -- region_id (Nairobi)
    1,  -- job_group_id (JG1)
    1,  -- project_id (Alpha)
    1,  -- union_id (KUW)
    1   -- branch_id
);
```

2. **PHP Display Code (employees.php)**
```php
<?php
// Database configuration
$db_host = 'localhost';
$db_name = 'company_db';
$db_user = 'root';
$db_pass = '';

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
```

**Implementation Steps:**

1. **Create Database:**
   - Save the SQL script as `company_db.sql`
   - Import to MySQL: `mysql -u root -p < company_db.sql`

2. **PHP Setup:**
   - Save the PHP code as `employees.php`
   - Update database credentials if different
   - Place in web server directory (e.g., XAMPP/htdocs/)

3. **Access:**
   - Open in browser: `http://localhost/employees.php`

**Features Included:**
- Calculated age from date of birth
- Employment duration calculation
- Currency formatting
- Responsive table display
- Secure password hashing (sample PIN: 1234)
- Proper database normalization
- Foreign key relationships
- Error handling for database connection

**Security Note:** In production environment:
- Use prepared statements for queries
- Store credentials securely
- Add authentication/authorization
- Implement input validation
- Use HTTPS
- Regular database backups

Here's a recommended schema design with proper normalization and data types:

1. **Main Employee Table**
```sql
CREATE TABLE employees (
    staff_no INT PRIMARY KEY,
    name VARCHAR(100),
    last_payroll DATE,
    emp_date DATE,
    termination_date DATE NULL,
    contract_exp_days INT,
    basic_pay DECIMAL(10,2),
    gross_pay DECIMAL(10,2),
    net_pay DECIMAL(10,2),
    gender ENUM('Male','Female','Other'),
    date_of_birth DATE,
    email VARCHAR(100),
    personal_email VARCHAR(100),
    phone VARCHAR(20),
    pin VARCHAR(100), -- Hashed value
    national_id VARCHAR(20),
    nssf VARCHAR(20),
    nhif VARCHAR(20),
    bank_acc VARCHAR(30),
    dept_id INT,
    region_id INT,
    job_group_id INT,
    project_id INT,
    union_id INT,
    bank_branch_id INT
);
```

2. **Separate Tables Needed**
```sql
CREATE TABLE departments (
    dept_id INT PRIMARY KEY,
    dept_name VARCHAR(50)
);

CREATE TABLE regions (
    region_id INT PRIMARY KEY,
    region_name VARCHAR(50)
);

CREATE TABLE job_groups (
    job_group_id INT PRIMARY KEY,
    group_name VARCHAR(50),
    pay_scale VARCHAR(20)
);

CREATE TABLE projects (
    project_id INT PRIMARY KEY,
    project_name VARCHAR(100)
);

CREATE TABLE unions (
    union_id INT PRIMARY KEY,
    union_name VARCHAR(100)
);

CREATE TABLE banks (
    bank_id INT PRIMARY KEY,
    bank_name VARCHAR(100)
);

CREATE TABLE bank_branches (
    branch_id INT PRIMARY KEY,
    bank_id INT,
    branch_name VARCHAR(100),
    branch_code VARCHAR(20)
);
```

3. **Computed Fields** (should not be stored):
- Age (calculate from date_of_birth)
- Employment duration (calculate from emp_date and termination_date)

PHP Code to Display Data:
```php
<?php
// Database connection
$db = new PDO('mysql:host=localhost;dbname=your_db', 'user', 'password');

// Query with joins
$query = "
    SELECT e.*, 
           d.dept_name,
           r.region_name,
           jg.group_name,
           p.project_name,
           u.union_name,
           b.bank_name,
           bb.branch_name
    FROM employees e
    LEFT JOIN departments d ON e.dept_id = d.dept_id
    LEFT JOIN regions r ON e.region_id = r.region_id
    LEFT JOIN job_groups jg ON e.job_group_id = jg.job_group_id
    LEFT JOIN projects p ON e.project_id = p.project_id
    LEFT JOIN unions u ON e.union_id = u.union_id
    LEFT JOIN bank_branches bb ON e.bank_branch_id = bb.branch_id
    LEFT JOIN banks b ON bb.bank_id = b.bank_id
";

$stmt = $db->query($query);
?>

<table border="1">
    <tr>
        <th>Staff No</th>
        <th>Name</th>
        <th>Department</th>
        <th>Job Group</th>
        <th>Gross Pay</th>
        <th>Bank</th>
        <!-- Add other needed columns -->
    </tr>
    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
    <tr>
        <td><?= $row['staff_no'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['dept_name'] ?></td>
        <td><?= $row['group_name'] ?></td>
        <td><?= number_format($row['gross_pay'], 2) ?></td>
        <td><?= $row['bank_name'] ?></td>
        <!-- Add other needed columns -->
    </tr>
    <?php endwhile; ?>
</table>
```

Key Implementation Notes:
1. Use proper database normalization (3NF)
2. Always use parameterized queries to prevent SQL injection
3. Store sensitive data like PIN using proper hashing (bcrypt)
4. Add indexes for frequently searched columns
5. Use transactions for payroll-related operations
6. Consider views for frequently used complex queries
7. Add proper foreign key constraints in database
8. Implement proper data validation before insertion

This structure provides a balance between normalization and practicality, while the PHP code demonstrates how to retrieve and display the normalized data in a user-friendly format.

Here is the list exactly as it appears in the image:

Staff No

Name

Last Payroll

Job Title

Type

Emp. Date

Termination

Emp. Duration

Contract Exp. (Days)

Basic Pay

Gross Pay

Net Pay

Gender

Date of Birth

Age

Email

Email(Personal)

Phone

PIN

ID

NSSF

NHIF

Dept.

Region

Job Group

Project

Union

Bank

Bank Branch

Bank Code

Bank Acc

Make me a schema with correct data types for all this and dumb and write code to those that need there own table like department and etc then make a pho code to display to table you don't have to create table just show what should be done