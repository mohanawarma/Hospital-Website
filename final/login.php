<?php

include 'connection.php';


if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `admin` WHERE email='$email' and password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        session_start();
        $row = $result->fetch_array();
        $_SESSION['email'] = $row['email'];
        header("Location: view_doctor.php");
        exit();
    } else {
        echo "Not Found, Incorrect Email or Password";
    }

}


if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `Doctor` WHERE email='$email' and password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        session_start();
        $row = $result->fetch_array();
        $_SESSION['email'] = $row['email'];
        header("Location: view_appoinment_doctor.php");
        exit();
    } else {
        echo "Not Found, Incorrect Email or Password";
    }

}


?>