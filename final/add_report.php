<?php


include 'connection.php';

if (isset($_POST['add_report'])) {
    $patient_name = $_POST['patient_name'];
    $report_image = $_FILES['report_image']['name'];
    $image_tmp_name = $_FILES['report_image']['tmp_name'];
    $report_image_folder = 'Images/' . $report_image;



    $insert_query = mysqli_query($conn, "INSERT INTO patient_reports (patient_name, report_image) VALUES ('$patient_name', '$report_image')");


    if ($insert_query) {
        move_uploaded_file($report_image_tmp_name, $report_image_folder);
        $message[] = 'Doctor add succesfully';
    } else {
        $message[] = 'Could not add the doctor';
    }
    ;


    mysqli_close($conn);
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="navbar">
        <div class="logo">
            <h1>Admin Page</h1>
        </div>
        <div class="list">
            <ul>
                <li>
                <li><a href="view_doctor.php">View & Delect Doctore</a></li>
                <li><a href="view_report.php">View & Delete Reports</a></li>
                <li><a href="view_appoinment.php">View Appoinments</a></li>
                <button><a href="admin.html">Log Out</a></button>

            </ul>
        </div>

    </div>
</body>



<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    .container {
        width: 80%;
        margin: 30px 120px;
        background: #fff;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #007bff;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .btn {
        padding: 5px 10px;
        border: none;
        cursor: pointer;
        color: white;
        border-radius: 4px;
        text-decoration: none;
    }

    .edit-btn {
        background-color: #28a745;
    }

    .delete-btn {
        background-color: #dc3545;
    }

    .add-btn {
        background-color: #007bff;
        padding: 10px 15px;
    }

    .back-btn {
        background-color: #6c757d;
        padding: 10px 15px;
    }

    input {
        display: block;
        width: 100%;
        padding: 8px;
        margin: 10px 0;
    }
</style>

<body>

    <?php

    if (isset($message)) {
        foreach ($message as $message) {
            echo '<div class="message"><span>' . $message . '</span> </div>';
        }
        ;
    }
    ;

    ?>
    <div class="container">

        <h2>Add Patient Report</h2>

        <form action="add_report.php" method="POST">
            <input type="text" name="patient_name" placeholder="Patient Name" required>
            <input type="file" name="report_image" accept="Images/png , Images/jpg , Images/jpeg" required>
            <button type="submit" name="add_report">Add Report</button>
        </form>

    </div>
</body>

</html>