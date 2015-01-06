<?php
$getal1 = $_POST["getal1"];
$getal2 = $_POST["getal2"];
$getal3 = $_POST["getal3"];
$gemiddelde = ($getal1 + $getal2 + $getal3) / 3;
echo "<p>Het gemiddelde is: " . $gemiddelde;
?>