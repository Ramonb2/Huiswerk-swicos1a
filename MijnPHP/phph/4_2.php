<?php

$sh = $_POST["sh"];
$eigensh= $_POST["eigensh"];
$res= 0;
$res2 = 0;

if (isset($_POST['submit'])) {

echo "Toegestane snelheid(Km/h) : $sh <br>";
echo "Eigen Snelheid(Km/h) : $eigensh";

$res = $eigensh - $sh;

}

if ($res > 0){

$res2 = $res * 5 + 30;
echo "<p><b>$res Km/h te hard. Je moet &euro;$res2,- boete betalen.";

}else
{

echo "<p><b>Je hoeft geen boete te betalen.";

}


?>

