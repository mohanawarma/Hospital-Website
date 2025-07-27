<?php

if (isset($_POST['add'])) {
    $doctor_name = $_POST['name'];
    $specialization = $_POST['specialization'];
    $contact_number = $_POST['contact'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $joining_date = $_POST['joining_date'];


    include 'connection.php';

    $query = "INSERT INTO Doctor (doctor_name, specilization, contact_number, email, password, joining_date) 
    values ('$doctor_name', '$specialization', '$contact_number', '$email', '$password', '$joining_date')";


    $result = mysqli_query($conn, $query);
    if ($result) {
        echo 'Insert Success. <a href="view_doctor_detail.html">Go Back</a>';
    } else {
        echo 'Error While Insert';
    }

}
?>