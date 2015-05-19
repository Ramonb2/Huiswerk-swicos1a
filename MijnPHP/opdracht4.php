<?php

$getal = array (1, 1);

$i = $getal[0];
$j = $getal[1];

echo $i.'';
echo $j.'';

for($k = 0; $k < 10; ++$k) {

$teller = $j;
$j = $i + $j;
$i = $teller;
echo $j.'';
}

?>