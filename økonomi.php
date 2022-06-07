<?php
include("header.php");
?>
<section class="main-content">
    <div class="startside">
        <div class="m-container">
            <div class="m-registrer" onclick="location.href='reg-inntekt.php';">
                <div>
                    <div>
                        <h3>Registrering av inntekt</h3>
                    </div>
                    <div>
                        <p class="m-registrer-text">
                            Her registrerer du inntekten din
                        </p>
                    </div>
                    <div>
                        <img src="bilder/registrering-icon.svg" class="m-registrer-bilde" alt="Icon av registrering">
                    </div>
                </div>
            </div>
            <div class="m-vis" onclick="location.href='vis-inntekt.php';">
                <div>
                    <h3>Vis din inntekt</h3>
                </div>
                <div>
                    <p class="m-vis-text">Her vises inntekten din</p>
                </div>
                <div>
                    <img src="bilder/vis-inntekt-ikon.svg" class="m-vis-bilde" alt="Icon av visning">
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
<?php
    include("footer.php");
?>