


CREATE TABLE employees (

    id INT AUTO_INCREMENT PRIMARY KEY,
    staff_no VARCHAR(100),
    name VARCHAR(255), -- full name | first, middle & last | or | first & last
    last_payroll DATE,


    -- system action
    job_title VARCHAR(100), -- create separate CRUD
    type VARCHAR(100), -- create separate CRUD
    emp_date DATE,
    termination DATE,
    emp_duration DATE, -- MATH LOGIC
    contract_exp_days DATE, -- MATH LOGIC


    basic_pay INT(255) NOT NULL, -- calc just raw/job group MATH _ _ _ eg from 28k max to 33k 
    gross_pay INT(255) NOT NULL,  -- from basic
    net_pay INT(255) NOT NULL, -- from gross


    gender VARCHAR(30) NOT NULL,
    date_of_birth DATE,
    age INT(66), -- based on date of birth // MAKE A DATE OF BIRTH MINI-SYSTEM MATH
    email VARCHAR(100), -- can have domain attached to it 
    email_personal VARCHAR(100), -- normal gmail, outlook, yahoo, etc
    phone VARCHAR(100), -- strictly +254 , others in future system for AFRICA  


    kra_pin VARCHAR(100),
    nssf VARCHAR(100),
    nhif INT(100),
    shif VARCHAR(100),


    department VARCHAR(100), -- division
    region VARCHAR(100), -- out
    job_group VARCHAR(100), -- out WHERE THE EMPLOYEE AT IN THE SCALE  _ _ _ eg from 28k max to 33k 
    project VARCHAR(100), -- others are involved in the same project
    union VARCHAR(150), -- get all unions and there data


    bank VARCHAR(100),  --- CRUD BANKS
    bank_branch VARCHAR(100), -- based on bank
    bank_code VARCHAR(100),  -- based on bank
    bank_acc INT(100),  -- based on bank



    status TINYINT NOT NULL -- 0 = Terminated, 1 = Active

);

-- insert sample employees 
INSERT INTO employees (
    name,position,department,age,hire_date,status)
VALUES
(
    'fredrick',
    'Hr',
    'Administration',
    25,
    '2025-01-20',
    1
), -- Active
(
    'john',
    'ict',
    'IT',
    32,
    '2025-01-20',
    0

); -- terminated

