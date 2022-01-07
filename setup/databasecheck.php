<?php

    // Get the connection credentials from the file ../config.php
    require("../config.php");

    // Check if the connection credentials are correct
    $conn = new mysqli($db_host, $db_user, $db_pass);

    // Check if the connection is successful
    if ($conn->connect_error) {
        exit("NO");
    } else {
        exit("YES");

        // Close the connection
        $conn->close();
    }




?>