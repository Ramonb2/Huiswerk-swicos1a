
<?php
$fs = 100;
$fh = 0;

while ($fs >= $fh) {
    $celsius = ($fs - 32) * 5 / 9;
    echo "$fs graden Fahrenheit is $celsius graden celsius<br>";
    $fs-= 1;
}

?>
