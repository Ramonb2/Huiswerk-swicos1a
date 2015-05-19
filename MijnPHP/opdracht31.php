<?php
$Dagen = array
(1=>'maandag[1]','dinsdag[2]', 'woensdag[3]', 'donderdag[4]', 'vrijdag[5]', 'zaterdag[6]', 'zondag[7]');

for( $i=1; $i<9; $i++ ){
if($i%2!==0){
echo $Dagen[$i]; 

echo", ";
}
echo "</br>";
}
?>