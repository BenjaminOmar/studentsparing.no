<?php
/* ----- Programmet kobler seg til databasen ----- */

$host="localhost";
$user="root";
$password="";
$database="okonomisystem";

$db=mysqli_connect($host, $user, $password, $database) or die ("Tilkoblingen til databasen mislyktes");

?>