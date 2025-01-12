<?php
//Written by Manaf Akil.


//Open a Connection to MySQL, W3school,MySQLi Object-Oriented https://www.w3schools.com/php/php_mysql_connect.asp
function db_connect() {
    $servername = "localhost";
    $username = "root"; // Default username in XAMPP
    $password = "";     // Default password in XAMPP
    $database = "bookcatalogue"; 

    // Create connection
    $connection = new mysqli($servername, $username, $password, $database);

    if ($connection->connect_error) {
        die("Database connection failed: " . $connection->connect_error);
    }

    return $connection;
}
