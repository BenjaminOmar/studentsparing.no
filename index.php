<?php
session_start();
$innloggetBruker=$_SESSION["brukernavn"];

if(!$innloggetBruker) /*bruker er ikke innlogget */
    {
        print("<meta http-equiv='refresh' content='0;url=innlogging.php'>");
    }
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
<header class="main-header">
    <h1 class="overskirft">
        Økonomisystem
    </h1>
</header>
<body>
    <section class="main-body">
<div class="knapper">
    <div>
        <a href="aksjer.php">
            <button class="body-link1">Aksjer</button>
        </a>
    </div>

    <div>
        <a href="økonomi.php">
            <button class="body-link2">Økonomi</button>
        </a>
    </div>
</div>

    </section>
    
</body>
</html>