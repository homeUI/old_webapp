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
                <div class="row_title">
                    <div class="row_icon">
                        <i class="fas fa-film"></i>
                    </div>
                    <div class="row_text">Media</div>
                </div>
                <div class="feld1 button">
                    <div class="button_icon">
                        <img src="./icons/plex.svg">
                    </div>
                    <div class="button_name">Plex</div>
                </div>
                <div class="feld2 button empty">
                    <div class="button_icon">

                    </div>
                    <div class="button_name">
                        
                    </div>
               </div>
                <div class="feld3 button empty">
                    <div class="button_icon">

                    </div>
                    <div class="button_name">
                        
                    </div>
               </div>
                <div class="feld4 button empty">
                    <div class="button_icon">

                    </div>
                    <div class="button_name">
                        
                    </div>
               </div>
                <div class="feld5 button empty">
                    <div class="button_icon">

                    </div>
                    <div class="button_name">
                        
                    </div>
               </div>
            </div>
        </div>
        <div class="services row">
            <div class="columns_container">
                <div class="row_title">
                    <div class="row_icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <div class="row_text">
                        Dienste
                    </div>
                </div>
                <div class="feld1 button">
                    <div class="button_icon">
                        <img src="./icons/bitwarden.svg">
                    </div>
                    <div class="button_name">
                        Bitwarden
                    </div>
               </div>
                <div class="feld2 button">
                    <div class="button_icon">
                        <img src="icons/nextcloud.svg">
                    </div>
                    <div class="button_name">
                        Nextcloud
                    </div>
               </div>
                <div class="feld3 button">
                    <div class="button_icon">
                        <img src="icons/gitlab.svg">
                    </div>
                    <div class="button_name">
                        Gitlab
                    </div>
               </div>
                <div class="feld4 button empty">
                    <div class="button_icon">

                    </div>
                    <div class="button_name">
                        
                    </div>
               </div>
                <div class="feld5 button">
                    <div class="button_icon">
                        <img src="./icons/minecraft.svg">
                    </div>
                    <div class="button_name">
                        MC-Server
                    </div>
               </div>
            </div>
        </div>
        <div class="system row">
            <div class="columns_container">
                <div class="row_title">
                    <div class="row_icon">
                        <i class="fas fa-cog"></i>
                    </div>
                    <div class="row_text">System</div>
                </div>
                <div onclick="location.href = 'http:\/\/192.168.2.1'" class="feld1 button">
                    <div class="button_icon">
                        <img src="./icons/fritz.svg">
                    </div>
                    <div class="button_name">
                        FritzBox
                    </div>
               </div>
                <div class="feld2 button">
                    <div class="button_icon">
                        <img src="./icons/raspi.svg">
                    </div>
                    <div class="button_name">
                        PiHole
                    </div>
               </div>
                <div class="feld3 button empty">
                    <div class="button_icon">

                    </div>
                    <div class="button_name">
                        
                    </div>
               </div>
                <div class="feld4 button empty">
                    <div class="button_icon">

                    </div>
                    <div class="button_name">
                        
                    </div>
               </div>
                <div class="feld5 button empty">
                    <div class="button_icon">

                    </div>
                    <div class="button_name">
                        
                    </div>
               </div>
            </div>
        </div>
        <div class="other row">
            <div class="columns_container">
                <div class="row_title">
                    <div class="row_icon">
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="row_text">
                        Sonstiges
                    </div>
                </div>
                <div class="feld1 button">
                    <div class="button_icon">
                        <img src="./icons/homekit.svg">
                    </div>
                    <div class="button_name">
                        SmartHome
                    </div>
               </div>
                <div class="feld2 button empty">
                    <div class="button_icon">

                    </div>
                    <div class="button_name empty">
                        
                    </div>
               </div>
                <div class="feld3 button empty">
                    <div class="button_icon">

                    </div>
                    <div class="button_name">
                        
                    </div>
               </div>
                <div class="feld4 button empty">
                    <div class="button_icon">

                    </div>
                    <div class="button_name">

                    </div>
                </div>
                <div class="feld5 button empty">
                    <div class="button_icon">

                    </div>
                    <div class="button_name">
                        
                    </div>
               </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="./script.js"></script>

</body>

</html>