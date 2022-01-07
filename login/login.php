<?php

    // Database name
    $dbname = "homeui";

    // Include the config file
    include('../config.php');

    // Start sessions
    session_start();

    // Connect to the database
    $con = new mysqli($db_host, $db_user, $db_pass, $dbname);

    // Check connection
    if ($con->connect_error) {
        exit("Connection failed: " . $con->connect_error);
    }
    
    // Get the form input 
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username and password are correct
    if ($stmt = $con->prepare('SELECT password FROM users WHERE username = ?')) {
        
        // Bind parameters (s = string, i = int, b = blob, etc)
        $stmt->bind_param('s', $username);
        $stmt->execute();
        
        // Store the result so we can check if the account exists in the database.
        $stmt->store_result(); 
        
        // Check if Account exist
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($password);
            $stmt->fetch();

            if (password_verify($_POST['password'], $password)) {                
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $_POST['username'];
                
                header('Location: ../app/');
                exit;
            } else {
                exit("Wrong password");
            }
        } else {
            exit("Wrong username");
        }
    } else {
        exit("Error: " . $con->error);
    }
    
?>