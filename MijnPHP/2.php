<html>
<head><title>2</title>
<link rel="stylesheet" type="text/css" href="Style.css">

</head>
<body>

<form name= "temp" action= "opdr2.php" method="post">
<p>Temperatuur: <input type="text" name="tempbox"/> t Kelvin = t Celcius + 273; t Fahrenheit = (9 * t Celcius /5 ) + 32</p>
<p><input type="radio" name="type" value="ck" checked>Celcius naar Kelvin
<input type="radio" name="type" value="cf">Celcius naar Fahrenheit
<p><input type="submit" name="gemiddelde" value="Reken om" /></p>
 
<?php

$temp = $_POST["tempbox"];
$type = $_POST["type"];
$resul = "";

if ($type == "ck"){
echo "<p>";
echo $temp . " Graden Celcius komt overheen met ";
echo $temp + 273 . " graden Kelvin";
}
if ($type == "cf"){
echo "<p>";
echo $temp . " Graden Celcius komt overheen met ";
echo $temp = (9 * $temp / 5) + 32 . " graden Fahrenheit";
}
?>

</form>



</body>