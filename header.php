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
    <link rel="stylesheet" href="style-ø.css">
</head>
<body>
<div class="container">
    <header class="header">
    <div class="h-container">
        <div>
            <h1 class="h-logo">Økonomisystem</h1>
        </div>
        <div class="h-hjem">
            <a href="#">oversikt</a>
        </div>
        <div>
            <a href="#">registrering</a>
        </div>
    </div>
    </header>