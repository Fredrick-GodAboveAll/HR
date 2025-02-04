

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
