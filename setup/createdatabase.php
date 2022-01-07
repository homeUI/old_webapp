<?php 

    // Database name
    $dbname = "homeUI";

    // Datenbank Zugangsdaten
    include("../config.php");

    // Create connection to the database server
    $conn = new mysqli($db_host, $db_user, $db_pass);

    // Check connection
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }

    // Create database
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    if ($conn->query($sql) === TRUE) {
        exit("YES");
    } else {
        exit("Error creating database: " . $conn->error);
    }

    // Close connection
    $conn->close();

?>