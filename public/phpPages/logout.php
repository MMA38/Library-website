<?php
    //Logout page made by Mathew Chebet.
    session_start();//Ensures the past session is carried over.


    session_unset(); //Destroy the session variables.
    session_destroy();// Destroy the current session.
    header("location: index.php");//Redirect to the home page.

    exit();
?>