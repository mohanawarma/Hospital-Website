<?php
include 'connection.php';

if (isset($_POST['add_doctor'])) {
    $doctor_name = $_POST['doctor_name'];
    $specialization = $_POST['specialization'];
    $contact_number = $_POST['contact_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $joining_date = $_POST['joining_date'];


    $sql = "INSERT INTO Doctor (doctor_name, specialization, contact_number, email, password, joining_date) 
            VALUES ('$doctor_name', '$specialization', '$contact_number', '$email', '$password', '$joining_date')";

    if (mysqli_query($conn, $sql)) {
        header("Location: view_doctor.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }

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

                <li><a href="view_doctor.php">View & Delect Doctore</a></li>
                <li><a href="view_report.php">View & Delete Reports</a></li>
                <li><a href="view_appoinment.php">View & Delete Reports</a></li>
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
    <div class="container">
        <h2>Add New Doctor</h2>
        <form action="add_doctor.php" method="POST">
            <label>Doctor Name:</label>
            <input type="text" name="doctor_name" required>

            <label>Specialization:</label>
            <input type="text" name="specialization" required>

            <label>Contact Number:</label>
            <input type="text" name="contact_number" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <label>Joining Date:</label>
            <input type="date" name="joining_date" required>

            <button type="submit" class="btn add-btn" name="add_doctor">Add Doctor</button>


        </form>
        <br>
        <a href="view_doctor.php"><button type="submit" class="btn add-btn" name="add_doctor">Back to view
                list</button></a>
    </div>
</body>

</html>

