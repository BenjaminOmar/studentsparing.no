<?php
    include("header.php");
?>

    <section class="main-content">
<div class="reg-inntekt">
        <h3> Registrer inntekt </h3>

<form method="post" action="" id="registrerNetto" name="registrerNetto">
    <div class="reg-år">
        År <input type="text" id="år" name="år" required>
    </div>
    <div class="reg-mnd">
        Måned <input type="text" id="måned" name="måned" required>
    </div>  
    <div class="reg-netto">
        Nettoinntekt <input type="text" id="nettoinntekt" name="nettoinntekt"required>
    </div>
    <div class="reg-knapper">
        <input class="reg-knapp-1" type="submit" value="Registrer" id="registrerinntektKnapp" name="registrerinntektKnapp">
        <input class="reg-knapp-2" type="reset" Value="Nullstill" id="nullstill" name="nullstill">
</div>
</form>


<?php
if (isset($_POST ["registrerinntektKnapp"]))
{
    $år=$_POST ["år"];
    $måned=$_POST ["måned"];
    $nettoinntekt=$_POST ["nettoinntekt"];


    if (!$år || !$måned || !$nettoinntekt )
    {
        print ("alle feltene må fylles ut");
    }
    else
    {
        include("db-tilkobling.php");

        $sqlSetning="SELECT * FROM inntekt WHERE år='$år' AND måned='$måned' AND brukernavn='$innloggetBruker';";
        $sqlResultat=mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente data fra databasen");
        $antallRader=mysqli_num_rows($sqlResultat);

        if ($antallRader==1)
        {
            print("Inntekten er registrert fra før");
        }
        else
        {
            $sqlSetning="INSERT INTO inntekt VALUES('$år', '$måned', '$innloggetBruker', '$nettoinntekt', 3500, 750, 300, 300, 5000, 2500, 1500, '$nettoinntekt'-3500-750-300-300-5000-2500-1500);";
            $sqlResultat=mysqli_query($db, $sqlSetning) or die ("Ikke mulig å registrere data i databasen");
            print ("Følgende inntekt er nå registrert for $måned $år: $nettoinntekt kr.");
        }

    }
}
?>

</section>
</body>
</html>

<?php
    include("footer.php");
?>