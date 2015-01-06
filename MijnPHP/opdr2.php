<table>

<?php
$Fahrenheit = 100;
$stop_Fahrenheit = 0;

while ($Fahrenheit >= $stop_Fahrenheit) {
    $celsius = ($Fahrenheit - 32) * 5 / 9;
	if ($Fahrenheit > 50)
    echo "$Fahrenheit graden Fahrenheit is $celsius graden celsius<br>";
	else
	    echo "$Fahrenheit graden Fahrenheit is $celsius graden celsius*<br>";
    $Fahrenheit-= 1;
}

?>
</table>