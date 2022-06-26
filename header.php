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
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
    <header class="header">
    <div class="h-container">
        <div>
            <img src="bilder/logo/Studentsparing-01-scaled.jpg" class="h-logo" alt="Studentsparing logo" onclick="location.href='økonomi.php';">
        </div>
        <div>
            <a href="økonomi.php" class="h-hjem">hjem</a>
        </div>
        <div>
            <a href="#" class="h-oversikt">oversikt</a>
        </div>
        <div>
            <a href="#" class="h-registrering">registrering</a>
        </div>
    </div>
    </header>