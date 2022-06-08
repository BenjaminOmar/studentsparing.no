<?php
    include("header.php");
?>
    <section class="main-content">

    <div class="reg-inntekt-container">
    <div class="reg-inntekt">
        <h3> Registrer inntekt </h3>

        <form method="post" action="" id="registrerNetto" name="registrerNetto">
            <div>
                <div class="reg-år-text">
                    År
                </div> 
                     <input type="text" id="år" name="år" class="reg-år-boks" placeholder="eks. 2022" required>
            </div>
            <div>
                <div class="reg-mnd-text">
                    Måned
                </div> 
                    <select name="mnd" id="mnd" class="reg-mnd-boks">
                        <?php include("funksjoner.php"); listeboksMnd(); ?>
                    </select>
            </div>  
            <div>
                <div class="reg-netto-text">
                    Nettoinntekt
                </div> 
                     <input type="text" id="nettoinntekt" name="nettoinntekt" class="reg-netto-boks" placeholder="Sum" required>
            </div>
            <div class="reg-knapper">
                <input class="reg-knapp" type="submit" value="Registrer" id="registrerinntektKnapp" name="registrerinntektKnapp">
                <input class="nullstill-knapp" type="reset" Value="Nullstill" id="nullstill" name="nullstill">
            </div>
        </form>
    </div>
</div>

    <?php
    if (isset($_POST ["registrerinntektKnapp"]))
    {
        $år=$_POST ["år"];
        $mnr=$_POST ["mnd"];
        $nettoinntekt=$_POST ["nettoinntekt"];


        if (!$år || !$mnr || !$nettoinntekt )
        {
            print ("alle feltene må fylles ut");
        }
        else
        {
            include("db-tilkobling.php");

            $sqlSetning="SELECT * FROM inntekt WHERE år='$år' AND Mnr='$mnr' AND brukernavn='$innloggetBruker';";
            $sqlResultat=mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente data fra databasen");
            $antallRader=mysqli_num_rows($sqlResultat);

            if ($antallRader==1)
            {
                print("<div class='reg-inntekt-frafør'>Inntekten er registrert fra før, prøv igjen. </div>");
            }
            else
            {
                $sqlSetning="INSERT INTO inntekt VALUES('$år', '$mnr', '$innloggetBruker', '$nettoinntekt', 3500, 750, 300, 300, 5000, 2500, 1500, '$nettoinntekt'-3500-750-300-300-5000-2500-1500);";
                $sqlResultat=mysqli_query($db, $sqlSetning) or die ("Ikke mulig å registrere data i databasen");
                print ("<div class='reg-inntekt-svar'>Inntekten på $nettoinntekt kr. er nå registrert. </div>
                <div class='reg-inntekt-svar-knapp'> <a href='vis-inntekt.php'> Gå til oversikt </a></div>");
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