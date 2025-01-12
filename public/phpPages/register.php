<?php
//This page was written by Manaf Akil.

require_once('../../private/server/database.php');

$db = db_connect();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve and sanitize form values
    $email = $_POST['uemail'];
    $username = $_POST['login'];
    $city = $_POST['city'];
    $province = $_POST['Province'];
    $country = $_POST['Country'];
    $street = $_POST['Street'];
    $postal_code = $_POST['PC'];
    $phone = $_POST['Phone'];
    $password = $_POST['pass'];
    //$password2 = $_POST['pass2'];


    // Prepare the query string using prepared statements
    $query = "INSERT INTO Users (email_or_phone, password_hash, username, city, province, country, street, postal_code, phone_number) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($db, $query);
    
    mysqli_stmt_bind_param($stmt, 'sssssssss', $email, $password, $username, $city, $province, $country, $street, $postal_code, $phone);
    
    if (mysqli_stmt_execute($stmt)) {
        echo "New record created successfully.";
        header("Location:login.php");
        exit(); // Ensure no further code is executed
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }
    
    mysqli_stmt_close($stmt);
    mysqli_close($db);
}
?>

