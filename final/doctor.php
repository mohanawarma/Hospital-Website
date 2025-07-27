<?php
include 'connection.php';

$sql = "SELECT * FROM Doctor";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Care Compass Hospital</title>
    <link rel="stylesheet" href="style.css">
</head>

<!-- navigation Bar -->

<body>
    <div class="navbar">
        <div class="logo">
            <h1><span>C</span>are <span>C</span>ompass Hospital</h1>
        </div>
        <div class="list">
            <ul>
            <li><a href="home.html">Home</a></li>
                <li><a href="test_result.php">Test Result</a></li>
                <li><a href="doctor.php">Meet out doctors</a></li>
                <button><a href="appoinment.php">Appoinment</a></button>
                <button><a href="admin.html">Login</a></button>

            </ul>
        </div>

    </div>

    <!-- navigation bar end -->


    <!-- Home Page start -->

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;

        }

        body {
            max-width: 100%;
        }
        .container {
            width: 890px;
            margin: 100px 300px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

    
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        td img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
        }
    </style>

    <!-- Home Page end -->




    <div class="container">
        <h2>Available Doctors</h2>

        <table>
            <tr>
                <th>Doctor Name</th>
                <th>Specialization</th>
                <th>Contact</th>
                <th>Email</th>

            </tr>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['doctor_name'] ?></td>
                    <td><?= $row['specialization'] ?></td>
                    <td><?= $row['contact_number'] ?></td>
                    <td><?= $row['email'] ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <!-- Footer start -->

    <div class="footer">
        <div class="raw-1">
            <img src="Images/Logo.png" alt="">
        </div>
        <div class="raw-2">
            <h3>Address</h3>
            <p>care Compass hospital Hospital (Pvt) Ltd <br>
                55/1, Kirimandala Mawatha,
                Narahenpita, Colombo 05
            <ul>
                <h3>Branches</h3>
                <li>Colombo</li>
                <li>Kurunagala</li>
                <li>Kandy</li>
            </ul>
            </p>
        </div>
        <div class="raw-3">
            <h3>Contact details</h3>
            <ul>
                <li>Phone Number: +94 76 005 4371</li>
                <li>Hospital Number: +94 24 088 4616</li>
                <li>Email: carecompasshospiptal@gmail.com</li>
            </ul>

        </div>
    </div>
</body>
<!-- Footer End -->

</html>