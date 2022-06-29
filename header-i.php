<?php
session_start();
$innloggetBruker=$_SESSION["brukernavn"];

if(!$innloggetBruker) /*bruker er ikke innlogget */
    {
        print("<meta http-equiv='refresh' content='0;url=index.php'>");
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
</head>
<body>
<div class="container-u">
    <header class="header-u">
    <div class="h-container-u">
        <div>
            <img src="bilder/logo/Studentsparing-01-scaled.jpg" class="h-logo-u" alt="Studentsparing logo" onclick="location.href='økonomi.php';">
        </div>
    </div>
    </header>