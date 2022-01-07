<?php

    // The new index redirector
    $new_index_redirector = "<?php header(\"Location: ./app/\"); ?>";

    // Change the content of the file ../index.php to "test"
    $file = fopen("../index.php", "w");
    fwrite($file, $new_index_redirector);
    fclose($file);

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
    
    // Get the page the user comes from
    $lang = $_POST["lang"];

    // Check if the password is correct
    $sql = "SELECT password FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    // If the password is correct
    if ($result->num_rows > 0) {

        // Get the password from the database
        $row = $result->fetch_assoc();
        $db_password = $row["password"];

        // Check if the password is correct
        if (password_verify($password, $db_password)) {

            if($lang == "de"){
                echo("<script>alert('Einrichtung abgeschlossen');</script>");
            } else {
                echo("<script>alert('Setup completed');</script>");
            }

            // Redirect to "../index.php"
            header("Location: ../index.php");
        } else {

            if($lang == "de"){
                echo("<script>alert('Falsches Passwort');</script>");
            } else {
                echo("<script>alert('Wrong password');</script>");
            }
            // Redirect to "./".$lang."/5.html"
            header("Location: ./".$lang."/5.html");
        }
    } else {
    }
?>