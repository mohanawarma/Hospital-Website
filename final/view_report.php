<?php

include 'connection.php';

$reportQuery = "SELECT * FROM patient_reports";
$reportResult = $conn->query($reportQuery);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM patient_reports WHERE id = $id");
    header("Location: view_report.php");
    exit();
}

?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

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

<body>
    <div class="container">
        <h2>Patient Report Details</h2>

        <table>
            <tr>
                <th>Patient Name</th>
                <th>Report Image</th>
                <th>Actions</th>
            </tr>
            <?php while ($row = $reportResult->fetch_array()) { ?>
                <tr>
                    <td><?= $row['patient_name'] ?></td>
                    <td><img src="<?= $row['report_image'] ?>" width="100"></td>
                    <td>
                        <a href="view_report.php?id=<?= $row['id'] ?>" class='btn delete-btn'
                            onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <br>
        <a href="add_report.php" class="btn add-btn">Add New Report</a>
    </div>
</body>

</html>