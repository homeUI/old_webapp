<?php

    // Include the config file
    include('config.php');

    // Start sessions
    session_start();

    // Check if the user is logged in
    // If so, redirect to ../index.php
    if (isset($_SESSION['loggedin'])) {
        header('Location: ../index.php');
        exit;
    }

    // Check if the username and password are correct
    if ($_POST['username'] == $username && $_POST['password'] == $password) {

        // Set the loggedin session variable to true
        $_SESSION['loggedin'] = true;

        // Redirect to ../index.php
        header('Location: ../index.php');
        exit;

    } else {

        exit("<h1>Login failed</h1>");

    }


    
    
?>