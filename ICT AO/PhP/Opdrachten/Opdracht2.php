<html>
<head>
</head>
<body>
<form name= "temp" action= "Opdracht2.php" method="post">
        <fieldset>
<legend> Geef een temperatuur in graden celscius </legend>
<p>Graden Celsius: <input type="text" name="temp"/> 
<p><input type="radio" name="radio" value="ck" checked>Celcius > Kelvin
<input type="radio" name="radio" value="cf">Celcius > Fahrenheit
<p><input type="submit" name="gem" value="klik" /></p>
 </form>
<?php

$tp = $_POST["temp"];
$k = $_POST["radio"];
$r = "";

if ($k == "ck"){
echo "<p>";
echo $tp . " Graden Celcius is ";
echo $tp + 273 . " graden Kelvin";
}
if ($k == "cf"){
echo "<p>";
echo $tp . " Graden Celcius is ";
echo $tp = (9 * $tp / 5) + 32 . " graden Fahrenheit";
}
?>
 </fieldset>
</body>