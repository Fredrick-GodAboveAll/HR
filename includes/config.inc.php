

<?php 

// database.php

$host = "localhost";
$username = "root";
$password = "0716632613";
$dbname = "payroll_db";

try {
    //code...
    $conn = new 
    PDO("mysql:host=$host;dbname=$dbname;", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
} catch (PDOException $e) {
    //throw $th;
    die("Db connection error: " . $e->getMessage());
}

?>