<?php

    // Database name
    $dbname = "homeui";

    // Datenbank Zugangsdaten
    include("../config.php");

    // Create connection to the database
    $conn = new mysqli($db_host, $db_user, $db_pass, $dbname);

    // Check connection
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }
    
    // Get the post data "username" and "password"
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Get from which page the user came
    $lang = $_POST["lang"];

    // Hash the password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Insert the data into the database "users"
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if ($conn->query($sql) === TRUE) {

        // Redirect to the page 5.html
        header("Location: ./".$lang."/5.html");
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>