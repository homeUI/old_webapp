<?php
    // Check if the user is logged in
    // If so, redirect to ../index.php
    if (isset($_SESSION['loggedin'])) {
        header('Location: ../index.php');
        exit;
    }

    // Start sessions
    session_start();

    // Include the accounts.json file
    $accounts = file_get_contents('accounts.json');

    // Decode the accounts.json file
    $accounts = json_decode($accounts, true);

    // Get $_POST data
    // There are $username and $password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Go through the accounts.json file
    // Check if the username and password match
    foreach ($accounts as $account) {
        exit($account);
        if ($account['username'] == $username && $account['password'] == $password) {
            // If so, set the loggedin session variable
            $_SESSION['loggedin'] = true;
            // And redirect to ../index.php
            header('Location: ../index.php');
            exit;
        } else {
            // Reload the login.html page
            header('Location: index.html');
            exit;
        }
    }
?>