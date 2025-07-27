<?php
include 'connection.php';

$query = "SELECT * FROM appointments";
$result = mysqli_query($conn, $query);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM appointments WHERE id = $id");
    header("Location: view_appoinment.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage Appointments</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        h2 {
            margin-top: 25px;
        }

        table {

            width: 100%;
            background: #fff;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
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
</head>
<!-- navbar -->

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
<!-- navbar end-->

<body class="container">

    <h2>Appointment List</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Specialization</th>
            <th>Doctor Name</th>
            <th>Appointment Date</th>
            <th>Action</th>
        </tr>

        <?php while ($row = mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone_number']; ?></td>
                <td><?php echo $row['specialization']; ?></td>
                <td><?php echo $row['doctor_name']; ?></td>
                <td><?php echo $row['appointment_date']; ?></td>
                <td>
                    <a href="view_appoinment.php?id=<?= $row['id'] ?>" class='btn delete-btn'
                        onclick="return confirm('Are you sure?')">Delete</a>
                    </a>
                </td>
            </tr>
        <?php } ?>

    </table>

</body>

</html>

<?php mysqli_close($conn); ?>