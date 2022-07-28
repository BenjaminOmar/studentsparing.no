<?php
/* trenger php tagger her for sjekk */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body class="i-container-body">
        <div class="i-container">
    <form action="" id="registrerBrukerSkjema" name="registrerBrukerSkjema" method="post">
        <div>
            <img src="bilder/logo/Studentsparing-01-scaled.jpg" class="i-logo" alt="Studentsparing logo">
        </div>
        <div class="i-text-username">
            Brukernavn
        </div>
            <input class="i-box-username" name="brukernavn" type="text" id="brukernavn" required> <br />
        <div class="i-text-password">
            Passord
        </div>
            <input class="i-box-password" name="passord" type="password" id="passord" required>  <br />
        <div class="i-buttons">
            <input class="i-button-p" type="submit" name="logginnKnapp" value="Fortsett">
            <input class="i-button-r" type="reset" name="nullstill" id="nullstill" value="Nullstill"> <br />
        </div>
    </form>
</div>
</body>
</html>

<?php
  if (isset($_POST ["logginnKnapp"]))
    {
      include("sjekk.php");

      $brukernavn=$_POST ["brukernavn"];
      $passord=$_POST["passord"];

      if(!sjekkBrukernavnPassord($brukernavn, $passord))
        {
            print("Feil brukeravn/passord");
        }
      else
        {
            session_start();
            $_SESSION["brukernavn"]=$brukernavn;
            $_SESSION["passord"]=$passord;
            print("<meta http-equiv='refresh' content='0;url=økonomi.php'>");
        }
    }
?>