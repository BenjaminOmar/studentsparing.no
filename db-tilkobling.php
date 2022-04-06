<?php
/* ----- Programmet kobler seg til databasen ----- */

$host="itfag.usn.no";
$user="v22u138";
$password="benjaminmyadmin";
$database="v22db138";

$db=mysqli_connect($host, $user, $password, $database) or die ("Tilkoblingen til databasen misslyktes");

?>