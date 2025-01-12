<?php
//This page was written by Manaf Akil.

session_start();
require_once('../../private/server/database.php');

$db = db_connect();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ensure input fields are not empty
    $email = trim($_POST['emailOrPhone'] ?? '');
    $password = trim($_POST['password'] ?? '');

    // Debugging: Output received email and password
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Password: " . htmlspecialchars($password) . "<br>";

    if ($email === '' || $password === '') {
        echo("Both email and password are required.");
        exit();
    }

    // Query to check if the email and password exist in the database
    $sql = "SELECT * FROM Users WHERE email_or_phone = ? AND password_hash = ?";
    $stat = mysqli_prepare($db, $sql); // Prepare the statement
    mysqli_stmt_bind_param($stat, 'ss', $email, $password); // Bind parameters to the query
    mysqli_stmt_execute($stat); // Execute the query
    $result = mysqli_stmt_get_result($stat); // Get the result of the query

    if (mysqli_num_rows($result) === 1) {
        // Login successful, fetch user data
        $user = mysqli_fetch_assoc($result);

        $_SESSION['valid_user'] = $user['email_or_phone']; // Create session variable for email
        $_SESSION['user_id'] = $user['id'];//Create a user session ID.


        header("Location: index.php"); // Redirect to the welcome page
        exit(); // Stop further script execution
    } else {
        // Login failed
        echo "Invalid email or password. Please try again.";
    }

    mysqli_stmt_close($stat); // Close the prepared statement
}

mysqli_close($db); // Close the database connection

?>



