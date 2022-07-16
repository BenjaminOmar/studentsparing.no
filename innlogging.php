<?php
/* trenger php tagger her for sjekk */
?>

<body class="i-container-body">
    <div class="i-container">
    <form action="" id="innloggingSkjema" name="innloggingSkjema" method="post">
        <div>
            <img src="bilder/logo/Studentsparing-01-scaled.jpg" class="i-logo" alt="Studentsparing logo">
        </div>
            Brukernavn <input name="brukernavn" type="text" id="brukernavn"> <br />
            Passord <input name="passord" type="password" id="passord"  >  <br />
            <input type="submit" name="logginnKnapp" value="Fortsett">
            <input type="reset" name="nullstill" id="nullstill" value="Nullstill"> <br />
</form>
</div>
</body>

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