<?php
/* trenger php tagger her for sjekk */

include("header-i.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Økonomisystem</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="m-container-login">
            <div class="m-login" onclick="location.href='innlogging.php';">
                <div>
                    <h3>Innlogging</h3>
                </div>
                <div>
                    <p class="m-login-text">Trykk her for å logge inn på din eksisterende bruker</p>
                </div>
                <div>
                    <img src="bilder/vis-inntekt-ikon.svg" class="m-login-bilde" alt="Icon av visning">
                </div>
            </div>
            <div class="m-registrer" onclick="location.href='reg-bruker.php';">
                <div>
                    <div>
                        <h3>Registrering av bruker</h3>
                    </div>
                    <div>
                        <p class="m-registrer-text">
                            Trykk her for å lage ny bruker hos oss :)
                        </p>
                    </div>
                    <div>
                        <img src="bilder/registrering-icon.svg" class="m-registrer-bilde" alt="Icon av registrering">
                    </div>
                </div>
            </div>
    </div>
</body>

<?php
include("footer-i.php");
?>