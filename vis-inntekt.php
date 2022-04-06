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
        <div>
            <h1>Økonomisystem</h1>
        </div> 
    </header>
    <nav class="navigation">
        <div class="knapper">
        <div>
                <a href="økonomi.php">
                    <button class="nav-økonomi">Meny</button>
                </a>
            </div>
            <div class="inntekt-overskrift">Inntekt</div>
            <div>
                <a href="reg-inntekt.php">
                    <button class="nav-reg-inntekt">Registrer</button>
                </a>
            </div>
            <div>
                <a href="vis-inntekt.php">
                    <button class="nav-vis-inntekt">Vis inntekter</button>
                </a>
            </div>
            <div>
                <a href="vis-inntekt.php">
                    <button class="nav-slett-inntekt">Slett</button>
                </a>
            </div>
            <div class="studielan-oversikt">Studielån</div>
            <div>
                <a href="reg-studielan.php">
                    <button class="nav-reg-studielan">Registrer</button>
                </a>
            </div>
            <div>
                <a href="vis-studielan.php">
                        <button class="nav-vis-studielan">Vis Lån</button>
                </a>
            </div>
            <div>
                <a href="vis-studielan.php">
                        <button class="nav-slett-studielan">Slett</button>
                </a>
            </div>
        </div>
    </nav>

    <section class="main-content">
        <div class="startside">
    <?php
        include("db-tilkobling.php");
    $sqlSetning="SELECT * FROM inntekt;";
    $sqlResultat=mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente data fra databasen");
    $antallRader=mysqli_num_rows($sqlResultat);

    print ("<h3>Registrerte inntekter</h3>");
    print ("<div class='tabell-inntekt'>");
    print ("<table border=1'>");  
    print ("<tr><th align=left>År</th> <th align=left>Måned</th> <th align=left>nettoinntekt</th> <th align=left>Husleie</th> <th align=left>Klær</th> 
    <th align=left>Frisør</th> <th align=left>Buss</th> <th align=left>Sparing</th> <th align=left>Mat</th> <th align=left>Fylla</th></tr>");

    for ($r=1; $r<=$antallRader; $r++)
     {
       $rad=mysqli_fetch_array($sqlResultat);
       $år=$rad[0];
       $måned=$rad[1];
       $nettoinntekt=$rad[2];
       $husleie=$rad[3];
       $klær=$rad[4];
       $frisør=$rad[5];
       $buss=$rad[6];
       $sparing=$rad[7];
       $mat=$rad[8];
       $fylla=$rad[9];
       print ("<tr> <td> $år </td> <td> $måned </td> <td> $nettoinntekt </td> <td> $husleie </td> <td> $klær </td> <td> $frisør </td> 
       <td> $buss </td> <td> $sparing </td> <td> $mat </td> <td> $fylla </td></tr>");
     }
       print ("</table>");
       print ("</div>");
?>
        </div>
    </section>

    <footer class="footer">
        <div>
            
        </div>
    </footer>
</div>
    
</body>
</html>