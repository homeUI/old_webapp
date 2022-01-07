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

    // Create tables
    // We need the table "users"
    // It has the following columns: "id", "username", "password"
    // It has the following constraints: "PRIMARY KEY (id)", "UNIQUE KEY (username)"
    $sql = "CREATE TABLE IF NOT EXISTS users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        password VARCHAR(255) NOT NULL
    )";
    if ($conn->query($sql) === TRUE) {
        
        // We need the table "buttons"
        // It has the following columns: "id", "name", "redirector", "icon_url", "display"
        // It has the following constraints: "PRIMARY KEY (id)", "UNIQUE KEY (name)"
        // icon_url, redirector and name are strings
        // display is a boolean
        // Id can't be null
        // The others can be null
        // The default value for display is true
        $sql = "CREATE TABLE IF NOT EXISTS buttons (
            id INT(6) UNSIGNED NOT NULL PRIMARY KEY,
            name VARCHAR(30) NOT NULL,
            redirector VARCHAR(255) NULL,
            icon_url VARCHAR(255) NULL,
            display BOOLEAN NOT NULL DEFAULT TRUE
        )";
        if ($conn->query($sql) === TRUE) {
            
            // Create a loop that runs 20 times
            for ($i = 1; $i <= 20; $i++) {
                
                // Create a variable that holds the name of the button
                $name = "";
                
                // Create a variable that holds the redirector of the button
                $redirector = "";
                
                // Create a variable that holds the icon url of the button
                $icon_url = "";
                
                // Create a variable that holds the display of the button
                $display = false;
                
                // Create a variable that holds the id of the button
                $id = $i;
                
                // Create a variable that holds the query
                $sql = "INSERT INTO buttons (id, name, redirector, icon_url, display) VALUES ('$id', '$name', '$redirector', '$icon_url', '$display')";
                
                // Execute the query
                if ($conn->query($sql) === TRUE) {

                    // Check if the loop has reached the last iteration
                    if ($i == 20) {

                        // Close connection
                        $conn->close();

                        // Inform the user
                        exit("YES");
                    }
                } else {
                    exit("Error creating entry: " . $conn->error);
                }
            }


        } else {
            exit("Error creating table: " . $conn->error);
        }



    } else {
        exit("Error creating table: " . $conn->error);
    }
