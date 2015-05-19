<?php

$land = array("Nederland","Belgie","Duitsland","Frankrijk","Luxemburg","Spanje");

$i = count($land);
$i --;

while($i >= 0){
echo "$land[$i],";
$i --;
}
echo "<br>";


$i = count($land);
$i --;
echo $land[mt_rand(0,$i)];

echo "<br>";


sort($land);
print_r($land);

echo "<br>";

while($i >= 0){
if ($i % 2 == 0) {

}
else{
echo "$land[$i],";
}
$i --;
}
echo"<br>";
$maanden = array("","Januari","Februari","Maart","April","Mei","Juni","Juli","Augustus","September","Oktober","November","December");
$dagenpermaand = array("","31","28","31","30","31","30","31","31","30","31","30","31");
echo "<br>";
print_r($maanden);
echo "<br>";

$i = count($maanden);
$i --;
while($i >= 1){
echo "<br>De maand $maanden[$i] heeft $dagenpermaand[$i] dagen";
$i --;
}

?>