<?php
$servername = "localhost";
$username = "root";
$password = "";
$myDB = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE $myDB";
if ($conn->query($sql) === TRUE) {
    // echo "Database created successfully";
} else {
    header("Location: home.php");
}

$conn->select_db($myDB);

// create table
$conn->query(
    "CREATE TABLE employees(
    empId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    empName VARCHAR(64),
    empDepartment VARCHAR(64),
    empCity VARCHAR(64),
    empAge INT(2),
    empSallary INT(6)
)"
);

// data
$records = array(
    array("empName" => "Bilal", "empDepartment" => "Computer Science", "empCity" => "Jamshoro", "empAge" => 10, "empSallary" => 1200),
    array("empName" => "Ahmed", "empDepartment" => "Computer Science", "empCity" => "Jamshoro", "empAge" => 10, "empSallary" => 1200),
    array("empName" => "Usman", "empDepartment" => "Computer Science", "empCity" => "Jamshoro", "empAge" => 10, "empSallary" => 1200),
    array("empName" => "Ravvi", "empDepartment" => "Computer Science", "empCity" => "Jamshoro", "empAge" => 10, "empSallary" => 1200),
    array("empName" => "Ameer", "empDepartment" => "Computer Science", "empCity" => "Jamshoro", "empAge" => 10, "empSallary" => 1200),
    array("empName" => "Sanep", "empDepartment" => "Mathemathics", "empCity" => "Hyderabad", "empAge" => 20, "empSallary" => 1300),
    array("empName" => "Tahaa", "empDepartment" => "Mathemathics", "empCity" => "Hyderabad", "empAge" => 20, "empSallary" => 1300),
    array("empName" => "Sanja", "empDepartment" => "Mathemathics", "empCity" => "Hyderabad", "empAge" => 20, "empSallary" => 1300),
    array("empName" => "Sarmd", "empDepartment" => "Mathemathics", "empCity" => "Hyderabad", "empAge" => 20, "empSallary" => 1300),
    array("empName" => "Adiil", "empDepartment" => "Mathemathics", "empCity" => "Hyderabad", "empAge" => 20, "empSallary" => 1300),
);

// populate table
foreach ($records as $recod) {
    $empName = $recod['empName'];
    $empDepartment = $recod['empDepartment'];
    $empCity = $recod['empCity'];
    $empAge = $recod['empAge'];
    $empSallary = $recod['empSallary'];

    $conn->query("
    INSERT INTO employees (
        empName,
        empDepartment,
        empCity,
        empAge,
        empSallary
        ) VALUES (
            '$empName',
            '$empDepartment',
            '$empCity',
            $empAge,
            $empSallary            
            )
            ;
            ");
}

$conn->close();

header("Location: home.php");
