<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrering</title>
</head>
<body>
  
</body>
</html>

<h3>Registrer bruker </h3>

<form action="" id="registrerBrukerSkjema" name="registrerBrukerSkjema" method="post">
  Brukernavn <input name="brukernavn" type="text" id="brukernavn" required> <br />
  Passord <input name="passord" type="password" id="passord" required>  <br />
  <input type="submit" name="registrerBrukerKnapp" value="Registrer bruker">
  <input type="reset" name="nullstill" id="nullstill" value="Nullstill"> <br />
</form>

<?php
  if (isset($_POST ["registrerBrukerKnapp"]))
    {
      include("db-tilkobling.php");

      $brukernavn=$_POST ["brukernavn"];
      $passord=$_POST["passord"]; 

      if (!$brukernavn || !$passord) 
        {
          print ("Brukernavn og passord må fylles ut <br />");
        }
      else
        {
          $sqlSetning="SELECT * FROM bruker WHERE brukernavn ='$brukernavn';";
          $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig å hente data fra databasen");

          if (mysqli_num_rows($sqlResultat)!=0)  /* brukernavnet er registrert fra før */
            {
              print ("Brukernavnet er registrert fra før <br />");
            }
          else
            {
              $sqlSetning="INSERT INTO bruker VALUES('$brukernavn','$passord');";
              mysqli_query($db,$sqlSetning) or die ("ikke mulig å registrere data i databasen");

              print ("Bruker er oprettet <br /> ");
              print ("<a href='innlogging.php'> Gå til innloggingsside </a>");
            }

        }
    }
?>