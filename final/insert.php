<?php


if (isset($_POST['add'])) {
    $doctor_name = $_POST['name'];
    $specialization = $_POST['specialization'];
    $contact_number = $_POST['contact'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $joining_date = $_POST['joining_date'];


    include 'connection.php';

    $query = "INSERT INTO doctors (doctor_name, specilization, contact_number, email, password, joining_date) 
    values ('$doctor_name', '$specialization', '$contact_number', '$email', '$password', '$joining_date')";


    $result = mysqli_query($conn, $query);
    if ($result) {
        header("Location: add_doctor.html");
    } else {
        echo 'Error While Insert';
    }

}

if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `admin` WHERE email='$email' and password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        header("Location: add_doctor.html");
        exit();
    } else {
        echo "Not Found, Incorrect Email or Password";
    }

}





?>