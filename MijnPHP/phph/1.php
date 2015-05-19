<?php
$aantal=600;
$aantalsave= 0;
$r = 0;
$n1 = 0;
$n2 = 0;
$n3 = 0;
$n4 = 0;
$n5 = 0;
$n6 = 0;

$aantalsave = $aantal;

while($aantal >= 0){

$r = Mt_rand(1,6);
echo "<br>".$r;
${"n".$r} ++;


$aantal --;

}

echo "<h2><br>Je hebt $aantalsave keer gegooid. Hiervan heb je:</h2>";
echo "<b><br>1,</b> $n1 keer gegooid";
echo "<b><br>2,</b> $n2 keer gegooid";
echo "<b><br>3,</b> $n3 keer gegooid";
echo "<b><br>4,</b> $n4 keer gegooid";
echo "<b><br>5,</b> $n5 keer gegooid";
echo "<b><br>6,</b> $n6 keer gegooid";


?>