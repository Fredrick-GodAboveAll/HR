

-- company_db_final.sql
/* 
Employee Management System Schema v3.0
Features:
- Department hierarchy support
- Enhanced security fields
- Comprehensive table relationships
*/

-- Create database
CREATE DATABASE IF NOT EXISTS fred_db 
    CHARACTER SET utf8mb4 
    COLLATE utf8mb4_unicode_ci;
USE fred_db;

-- DEPARTMENT STRUCTURE WITH HIERARCHY --
CREATE TABLE departments (
    dept_id INT PRIMARY KEY AUTO_INCREMENT,
    department_title VARCHAR(50) NOT NULL COMMENT 'Official department name',
    parent_dept_id INT NULL COMMENT 'Hierarchical parent department',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    
    CONSTRAINT fk_parent_dept 
        FOREIGN KEY (parent_dept_id) 
        REFERENCES departments(dept_id)
        ON DELETE SET NULL
) ENGINE=InnoDB COMMENT='Supports nested organizational structure';

-- REGIONAL STRUCTURE --
CREATE TABLE regions (
    region_id INT PRIMARY KEY AUTO_INCREMENT,
    region_name VARCHAR(50) NOT NULL UNIQUE,
    region_code VARCHAR(10) NOT NULL
) ENGINE=InnoDB COMMENT='Geographical locations';

-- JOB CLASSIFICATION --
CREATE TABLE job_groups (
    job_group_id INT PRIMARY KEY AUTO_INCREMENT,
    group_code VARCHAR(10) NOT NULL UNIQUE,
    group_name VARCHAR(50) NOT NULL,
    min_salary DECIMAL(10,2),
    max_salary DECIMAL(10,2)
) ENGINE=InnoDB COMMENT='Salary grading system';

-- FINANCIAL INSTITUTIONS STRUCTURE --
CREATE TABLE banks (
    bank_id INT PRIMARY KEY AUTO_INCREMENT,
    bank_name VARCHAR(100) NOT NULL,
    swift_code VARCHAR(15) NOT NULL UNIQUE
) ENGINE=InnoDB COMMENT='Bank institutions registry';

CREATE TABLE bank_branches (
    branch_id INT PRIMARY KEY AUTO_INCREMENT,
    bank_id INT NOT NULL,
    branch_name VARCHAR(100) NOT NULL,
    branch_code VARCHAR(20) NOT NULL,
    location VARCHAR(100),
    
    FOREIGN KEY (bank_id) 
        REFERENCES banks(bank_id)
        ON DELETE CASCADE
) ENGINE=InnoDB COMMENT='Bank branch details';

-- EMPLOYEE CORE TABLE --
CREATE TABLE employees (
    staff_no INT PRIMARY KEY COMMENT 'Unique employee identifier',
    name VARCHAR(100) NOT NULL,
    
    -- Security & Tax Info --
    password VARCHAR(255) NOT NULL COMMENT 'BCrypt hashed password',
    kra_pin VARCHAR(20) NOT NULL UNIQUE COMMENT 'KRA tax identification',
    
    -- Employment Dates --
    emp_date DATE NOT NULL COMMENT 'Date joined organization',
    termination_date DATE NULL COMMENT 'If employment ended',
    
    -- Compensation Details --
    basic_pay DECIMAL(10,2) NOT NULL,
    gross_pay DECIMAL(10,2) NOT NULL,
    net_pay DECIMAL(10,2) NOT NULL,
    
    -- Personal Details --
    gender ENUM('Male','Female','Other') NOT NULL,
    date_of_birth DATE NOT NULL,
    
    -- Contact Info --
    email VARCHAR(100) UNIQUE,
    personal_email VARCHAR(100) UNIQUE,
    phone VARCHAR(20) NOT NULL,
    
    -- Government Identifiers --
    national_id VARCHAR(20) NOT NULL UNIQUE,
    nssf VARCHAR(20) NOT NULL,
    nhif VARCHAR(20) NOT NULL,
    
    -- Financial Info --
    bank_acc VARCHAR(30) NOT NULL COMMENT 'Account number',
    
    -- Foreign Keys --
    dept_id INT NOT NULL,
    region_id INT NOT NULL,
    job_group_id INT NOT NULL,
    bank_branch_id INT NOT NULL,
    
    -- Indexes & Constraints --
    FOREIGN KEY (dept_id) 
        REFERENCES departments(dept_id),
    FOREIGN KEY (region_id) 
        REFERENCES regions(region_id),
    FOREIGN KEY (job_group_id) 
        REFERENCES job_groups(job_group_id),
    FOREIGN KEY (bank_branch_id) 
        REFERENCES bank_branches(branch_id),
    
    INDEX idx_employee_name (name),
    INDEX idx_employment_dates (emp_date, termination_date)
) ENGINE=InnoDB COMMENT='Main employee records';

-- SAMPLE DATA INSERTION --
INSERT INTO departments (department_title, parent_dept_id) VALUES
('Corporate Headquarters', NULL),  -- Top-level
('Operations Division', 1),
('Human Resources Department', 2),
('Finance & Accounting', 2),
('Information Technology', 1);

INSERT INTO regions (region_name, region_code) VALUES
('Nairobi Metropolitan', 'NBI'),
('Coastal Region', 'COAST'),
('Western Kenya', 'WEST');

INSERT INTO job_groups (group_code, group_name, min_salary, max_salary) VALUES
('EXEC', 'Executive', 250000, 1000000),
('MGMT', 'Management', 150000, 300000),
('STAFF', 'General Staff', 50000, 140000);

INSERT INTO banks (bank_name, swift_code) VALUES
('Equity Bank Kenya', 'EQBLKENA'),
('Kenya Commercial Bank', 'KCBLKENX');

INSERT INTO bank_branches (bank_id, branch_name, branch_code, location) VALUES
(1, 'Nairobi CBD Main', 'EQ-001', 'Moi Avenue'),
(2, 'Mombasa West', 'KCB-501', 'Nyali Centre');

INSERT INTO employees (
    staff_no, name, password, kra_pin, 
    emp_date, basic_pay, gross_pay, net_pay,
    gender, date_of_birth, email, phone,
    national_id, nssf, nhif, bank_acc,
    dept_id, region_id, job_group_id, bank_branch_id
) VALUES (
    1001,
    'Jane Mwende',
    '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', -- password
    'A0023456789K',
    '2020-03-15',
    85000.00,
    120000.00,
    98000.00,
    'Female',
    '1985-08-22',
    'jane@company.com',
    '0711122334',
    '22334455',
    'NSSF-0987',
    'NHIF-7654',
    '1234567890',
    3,  -- HR Department
    1,  -- Nairobi
    2,  -- Management
    1   -- Equity CBD Branch
);