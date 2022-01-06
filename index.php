<?php
    // Start sessions
    session_start();

    // Check if user is logged in
    if (!isset($_SESSION['loggedin'])) {
        header('Location: ./login/');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homeserver</title>

    <!-- Stylesheet style.css -->
    <link rel="stylesheet" href="style.css">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>

<body>
    <header>Hey user, willkommen im Homeserver-Dashboard!</header>
    <div class="row_container">
        <div class="multimedia row">
            <div class="columns_container">
                <div class="feld1 button"></div>
                <div class="feld2 button"></div>
                <div class="feld3 button"></div>
                <div class="feld4 button"></div>
                <div class="feld5 button"></div>
            </div>
        </div>
        <div class="services row">
            <div class="columns_container">
                <div class="feld1 button"></div>
                <div class="feld2 button"></div>
                <div class="feld3 button"></div>
                <div class="feld4 button"></div>
                <div class="feld5 button"></div>
            </div>
        </div>
        <div class="system row">
            <div class="columns_container">
                <div class="feld1 button"></div>
                <div class="feld2 button"></div>
                <div class="feld3 button"></div>
                <div class="feld4 button"></div>
                <div class="feld5 button"></div>
            </div>
        </div>
        <div class="other row">
            <div class="columns_container">
                <div class="feld1 button"></div>
                <div class="feld2 button"></div>
                <div class="feld3 button"></div>
                <div class="feld4 button"></div>
                <div class="feld5 button"></div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="./script.js"></script>

</body>

</html>