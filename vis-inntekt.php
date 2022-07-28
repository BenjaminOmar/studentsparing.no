<?php
    include("header-u.php");
?>
    <section class="main-content">
        <div class="startside">
        <h3>Vis periodeøkonomi</h3>

<form method="post" action="" id="vis-inntekt" name="vis-inntekt">
  Periode
  <select name="år-mnd" id="år-mnd">
    <?php include("funksjoner.php"); listeboksårmnd(); ?> 
  </select>  <br/>
  <input type="submit" value="Vis periode" name="visPeriodeKnapp" id="visPeriodeKnapp" /> 
</form>

<?php
  if (isset($_POST ["visPeriodeKnapp"]))
    {
      $årmndnavn=$_POST ["årmndnavn"];

      $del=explode(";",$årmndnavn);
      $år=$del[0];
      $mnd=$del[1];  

      include("db-tilkobling.php");

      $sqlSetning="SELECT * FROM inntekt WHERE år='$år' AND måned='$mnd';";
      mysqli_query($db, $sqlSetning) or die("Ikke mulig å hente perioden i databasen");

    }
?>
</section>
</body>
</html>

<?php
    include("footer-u.php");
?>
