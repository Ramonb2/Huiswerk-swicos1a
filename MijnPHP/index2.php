<?php

$maanden = array("","Januari","Februari","Maart","April","Mei","Juni","Juli","Augustus","September","Oktober","November","December");
$dagenpermaand = array("","31","28","31","30","31","30","31","31","30","31","30","31");
echo "<br>";
echo "<b>Vraag: 7 en 8</b><br>";
print_r($maanden);
echo "<br>";
echo "<b>Vraag: 9 en 10</b><br>";

$i = count($maanden);
$i --;
while($i >= 1){
echo "<br>De maand $maanden[$i] heeft $dagenpermaand[$i] dagen";
$i --;
}

?>