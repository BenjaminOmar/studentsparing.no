<?php
include("header-u.php");
?>

<section class="main-content-u">
    <div class="startside-u">
        <div class="m-container-inntekt">
            <div class="m-i-registrer" onclick="location.href='reg-inntekt.php';">
                <div>
                    <div>
                        <h3>Registrering av inntekt</h3>
                    </div>
                    <div>
                        <p class="m-i-registrer-text">
                            Her registrerer du inntekten din
                        </p>
                    </div>
                    <div>
                        <img src="bilder/registrering-icon.svg" class="m-i-registrer-bilde" alt="Icon av registrering">
                    </div>
                </div>
            </div>
            <div class="m-i-vis" onclick="location.href='vis-inntekt.php';">
                <div>
                    <h3>Vis din inntekt</h3>
                </div>
                <div>
                    <p class="m-i-vis-text">Her vises inntekten din</p>
                </div>
                <div>
                    <img src="bilder/vis-inntekt-ikon.svg" class="m-i-vis-bilde" alt="Icon av visning">
                </div>
            </div>
        </div>

        <div class="m-container-lan">
            <div class="m-l-registrer" onclick="location.href='reg-inntekt.php';">
                <div>
                    <div>
                        <h3>Registrering av lån</h3>
                    </div>
                    <div>
                        <p class="m-l-registrer-text">
                            Her registrerer du dine lån
                        </p>
                    </div>
                    <div>
                        <img src="bilder/reg-slan-icon.svg" class="m-l-registrer-bilde" alt="Icon av registrering">
                    </div>
                </div>
            </div>
            <div class="m-l-vis" onclick="location.href='vis-inntekt.php';">
                <div>
                    <h3>Vis dine lån</h3>
                </div>
                <div>
                    <p class="m-l-vis-text">Her vises dine lån</p>
                </div>
                <div>
                    <img src="bilder/vis-slan-icon.svg" class="m-l-vis-bilde" alt="Icon av visning">
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>

<?php
    include("footer-u.php");
?>