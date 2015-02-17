<head>
<?php

$ts = $_POST["ts"];
$es= $_POST["es"];
$res= 0;
$res2 = 0;

if (isset($_POST['submit'])) {

echo "Toegestane snelheid(Km/h) : $ts <br>";
echo "Eigen Snelheid(Km/h) : $es";

$res = $es - $ts;

}

if ($res > 0){

$res2 = $res * 5 + 30;
echo "<p>$res Km/h te hard. Je moet &euro;$res2,- boete betalen.";

}else
{

echo "<p>Je hoeft geen boete te betalen.";

}


?>

</head>
<body>
<form name= "temp" action= "Opdracht4.php" method="post">

<p>Toegestane snelheid(Km/h) : <input type="text" name="ts"/>
<p>Eigen Snelheid(Km/h) :  <input type="text" name="es"/>

<p><input type="submit" name="submit" value="Bereken" /></p>

</form>
<body>