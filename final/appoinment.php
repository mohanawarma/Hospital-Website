<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $specialization = $_POST['specialization'];
    $doctor_name = $_POST['doctor_name'];
    $appointment_date = $_POST['appointment_date'];

    $query = "INSERT INTO appointments (first_name, last_name, email, phone_number, specialization, doctor_name, appointment_date) 
              VALUES ('$first_name', '$last_name', '$email', '$phone_number', '$specialization', '$doctor_name', '$appointment_date')";

    if (mysqli_query($conn, $query)) {
        echo "Appointment booked successfully. <a href='appoinment.php'>Book Another</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}

$specialization_query = "SELECT DISTINCT specialization FROM Doctor";
$specialization_result = $conn->query($specialization_query);

$doctor_query = "SELECT doctor_name, specialization FROM Doctor";
$doctor_result = $conn->query($doctor_query);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        background-color: white;

    }
    .container {
        max-width: 500px;
        margin: 40px auto;
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
    form {
        display: flex;
        flex-direction: column;
    }

    label {
        font-weight: bold;
        margin-top: 10px;
    }

    input,
    select {
        padding: 10px;
        margin-top: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
    .container button {
        margin-top: 15px;
        padding: 10px;
        background: #28a745;
        color: white;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .container button:hover {
        background: #218838;
    }
</style>


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
</body>
<!-- navigation bar end -->

<body>
    <div class="container">
        <h2>Book an Appointment</h2>
        <form action="appoinment.php" method="post">
            <label>First Name:</label>
            <input type="text" name="first_name" required>

            <label>Last Name:</label>
            <input type="text" name="last_name" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Phone Number:</label>
            <input type="text" name="phone_number" required>

            <label>Specialization:</label>
            <select name="specialization" id="specialization" onchange="filterDoctors()" required>
                <option value="">Select Specialization</option>
                <?php while ($row = $specialization_result->fetch_array()) { ?>
                    <option value="<?= $row['specialization'] ?>"><?= $row['specialization'] ?></option>
                <?php } ?>
            </select>

            <label>Doctor Name:</label>
            <select name="doctor_name" id="doctor_name" required>
                <option value="">Select Doctor</option>
                <?php while ($row = $doctor_result->fetch_array()) { ?>
                    <option class="doctor-option" data-specialization="<?= $row['specialization'] ?>"
                        value="<?= $row['doctor_name'] ?>">
                        <?= $row['doctor_name'] ?>
                    </option>
                <?php } ?>
            </select>

            <label>Appointment Date:</label>
            <input type="date" name="appointment_date" required>

            <button type="submit" name="submit">Book Appointment</button>
        </form>
    </div>
</body>
<!-- Footer start -->

<body>
    <div class="footer">
        <div class="raw-1">
            <img src="Images/Logo.png" alt="">
        </div>
        <div class="raw-2">
            <h3>Address</h3>
            <p>care Compass hospital Hospital (Pvt) Ltd
                55/1, Kirimandala Mawatha,
                Narahenpita, Colombo 05
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