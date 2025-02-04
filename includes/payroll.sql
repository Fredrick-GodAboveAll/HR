

-- phpMyAdmin SQL Dump
-- https://www.phpmyadmin.net/
-- Host: 127.0.0.1

CREATE DATABASE IF NOT EXISTS `hr_db`;
USE `hr_db`;

-- Table structure for table `admin`
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `email` varchar(55) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table `admin`
INSERT INTO `admin` (`id`, `UserName`, `Password`, `email`, `updationDate`) VALUES
(1, 'admin', 'd00f5d5217896fb7fd601412cb890830', 'admin@mail.com', '2022-02-09 15:15:46');


-- Table Departments
CREATE TABLE `departments` (
    `dept_id` INT PRIMARY KEY AUTO_INCREMENT,
    `dept_name` VARCHAR(50) NOT NULL
);
-- Insert into departments
INSERT INTO `departments` VALUES 
(1, 'Human Resources' ), (2, 'Finance '), (3, 'IT' );


-- Table regions
CREATE TABLE `regions` (
    `region_id` INT PRIMARY KEY AUTO_INCREMENT,
    `region_name` VARCHAR(50) NOT NULL
);
-- Insert into regions
INSERT INTO `regions` VALUES 
(1, 'Nairobi'), (2, 'Mombasa'), (3, 'Kisumu');


-- Table Job groups
CREATE TABLE `job_groups` (
    `job_group_id` INT PRIMARY KEY AUTO_INCREMENT,
    `group_name` VARCHAR(50) NOT NULL
);
-- Insert into job groups
INSERT INTO `job_groups` VALUES 
(1, 'JG1'), (2, 'JG2'), (3, 'JG3');


-- Table projects
CREATE TABLE `projects` (
    `project_id` INT PRIMARY KEY AUTO_INCREMENT,
    `project_name` VARCHAR(100) NOT NULL
);
-- Insert into projects
INSERT INTO `projects`  VALUES 
(1, 'Project Alpha'), (2, 'Project Beta');


-- Table unions
CREATE TABLE `unions` (
    `union_id` INT PRIMARY KEY AUTO_INCREMENT,
    `union_name` VARCHAR(100) NOT NULL
);
-- Insert into unions
INSERT INTO `unions` VALUES 
(1, 'KUW'), (2, 'KUDHEIHA');


-- Table banks
CREATE TABLE `banks` (
    `bank_id` INT PRIMARY KEY AUTO_INCREMENT,
    `bank_name` VARCHAR(100) NOT NULL
);
-- Insert into unions
INSERT INTO `banks` VALUES 
(1, 'Equity Bank'), (2, 'KCB Bank');



-- Table banks branches
CREATE TABLE `bank_branches` (
    `branch_id` INT PRIMARY KEY AUTO_INCREMENT,
    `bank_id` INT,
    `branch_name` VARCHAR(100),
    `branch_code` VARCHAR(20),
    FOREIGN KEY (`bank_id`) REFERENCES `banks`(`bank_id`)
);
-- Insert bank branches
INSERT INTO `bank_branches` VALUES 
(1, 1, 'Nairobi CBD', 'EQNBI001'), (2, 2, 'Mombasa Main', 'KCBMM001');



-- Table banks branches
CREATE TABLE `employees` (

    `staff_no` INT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL, `last_payroll` DATE, `emp_date` DATE NOT NULL,
    `termination_date` DATE NULL, `contract_exp_days` INT, `basic_pay` DECIMAL(10,2), `gross_pay` DECIMAL(10,2),

    `net_pay` DECIMAL(10,2), `gender` ENUM('Male','Female'), `date_of_birth` DATE NOT NULL, `email` VARCHAR(100),
    `personal_email` VARCHAR(100), `phone` VARCHAR(20), `kra_pin` VARCHAR(20), `password` VARCHAR(100), -- Hashed value

    `national_id` VARCHAR(20), `nssf` VARCHAR(20), `nhif` VARCHAR(20), `shif` VARCHAR(20), `bank_acc` VARCHAR(30), 
    `dept_id` INT, 
    `region_id` INT, `job_group_id` INT, `project_id` INT, `union_id` INT, `bank_branch_id` INT,

    FOREIGN KEY (`dept_id`) REFERENCES `departments`(`dept_id`),
    FOREIGN KEY (`region_id`) REFERENCES `regions`(`region_id`),
    FOREIGN KEY (`job_group_id`) REFERENCES `job_groups`(`job_group_id`),
    FOREIGN KEY (`project_id`) REFERENCES `projects`(`project_id`),
    FOREIGN KEY (`union_id`) REFERENCES `unions`(`union_id`),
    FOREIGN KEY (`bank_branch_id`) REFERENCES `bank_branches`(`branch_id`)
);
-- Insert bank branches
INSERT INTO `employees` VALUES (
    1001, 'John william Doe',  CURDATE(), '2020-01-15', NULL, 90, 50000.00, 65000.00, 55000.00, 
    'Male', '1990-05-15', 'john@company.com', 'john@gmail.com', '0712345678',
    'A21356342Z',
    '$2y$10$NlQq9sWZxZvZ7b3D5VHrU.8q1oYd4JjKXm0LzYcR1tS9wQ1FbW6O', -- 1234
    '12345678', 'NSSF123', 'NHIF123', 'C12WEGSVI', '1234567890',
    1,  -- dept_id (HR)
    1,  -- region_id (Nairobi)
    1,  -- job_group_id (JG1)
    1,  -- project_id (Alpha)
    1,  -- union_id (KUW)
    1   -- branch_id
);

