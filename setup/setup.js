// This script is the script that is used in the setup of the app HomeUI


// 
// Database credentials check
// 

var check = document.getElementById("connection_check_result");
var continue_button = document.getElementById("continue");
var check_button = document.getElementById("check");

function checkDatabaseCredentials(lang) {


    // Disable the check button
    check_button.disabled = true;

    // execute databasecheck.php
    $.ajax({
        url: '../databasecheck.php',
        success: function(data) {
            switch (data) {

                // Check what comes back from the databasecheck.php
                case 'YES':

                    // Change the 
                    if (lang == 'de') {
                        check.innerHTML = 'Datenbank verbunden - Klicke auf "Weiter" um fortzufahren';
                    } else {
                        check.innerHTML = 'Database connection successful - Click on "Continue" to continue';
                    }

                    // Hide the check button
                    check_button.style.display = "none";

                    // Enable the continue button
                    continue_button.disabled = false;

                    break;
                case 'NO':
                    if (lang == 'de') {
                        check.innerHTML = 'Datenbank nicht verbunden - Bitte gucke ob die Datenbank-Zugangsdaten richtig sind';
                    } else {
                        check.innerHTML = 'Database connection failed - Please check if the database credentials are correct';
                    }

                    // Enable the check button
                    check_button.disabled = false;
                    break;
                default:
                    if (lang == 'de') {
                        check.innerHTML = 'Sonstiger fehler : ' + data;;
                    } else {
                        check.innerHTML = 'Other error : ' + data;
                    }

                    // Enable the check button
                    check_button.disabled = false;
                    break;

            }
        }
    });
}

// 
// Database creation
//

function createDatabase() {

    // execute createdatabase.php
    $.ajax({
        url: '../createdatabase.php',
        success: function(data) {
            switch (data) {
                case 'YES':
                    // Redirect to 3.html
                    window.location.href = "3.html";
                    break;
                default:
                    alert(data);
                    break;
            }
        }
    });
}