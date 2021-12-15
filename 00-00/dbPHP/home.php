<?php

function getRecords()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $myDB = "myDB";

    $conn = mysqli_connect($servername, $username, $password, $myDB);

    return mysqli_query($conn, "SELECT * FROM employees");
}

$records = getRecords();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="container">


    <h1 class="text-primary">Employee Records</h1>
    <table class="table container table-striped">
        <thead>
            <tr>
                <th scope="col">EmpId</th>
                <th scope="col">EmpName</th>
                <th scope="col">EmpCity</th>
                <th scope="col">EmpDepartment</th>
                <th scope="col">EmpAge</th>
                <th scope="col">EmpSallary</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>

            <?php
            while ($record = mysqli_fetch_assoc($records)) {
            ?>
                <tr ope="row">
                    <th><?= $record['empId'] ?></th>
                    <th><?= $record['empName'] ?></th>
                    <th><?= $record['empCity'] ?></th>
                    <th><?= $record['empDepartment'] ?></th>
                    <th><?= $record['empAge'] ?></th>
                    <th><?= $record['empSallary'] ?></th>
                    <th><a class="text-danger" href="delete.php?id=<?= $record['empId'] ?>">☠</a> </th>
                </tr>

            <?php
            }
            ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>