<?php
/* ----- Programmet kobler seg til databasen ----- */

$host="web01.usn.no";
$user="247061";
$password="WO1SWwlt";
$database="247061";

$db=mysqli_connect($host, $user, $password, $database) or die ("Tilkoblingen til databasen mislyktes");

?>