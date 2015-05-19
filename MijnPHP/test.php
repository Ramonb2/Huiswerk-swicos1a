<?php

$array = array("dit", "zijn", "de","oorspronkelijke", "zes","strings");
reset($array);
while (list(, $value) = each($array)) {
    echo " $value ";
}
echo '<br>';
echo "$array[5] $array[1] $array[2] $array[3] $array[4] $array[0]";