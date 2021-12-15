<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $myDB = "myDB";

    $conn = mysqli_connect($servername, $username, $password, $myDB);

    mysqli_query($conn, "DELETE FROM employees WHERE empId = " . $id);
    header("Location: home.php");
}
