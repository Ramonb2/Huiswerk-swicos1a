<h3> De scooter kost 1500 euro bereken hier hoeveel je tekort komt</h3>
<form name= "kosten" action= "scooter.php" method="post">
 <p>spaargeld: <input type="text" name="kosten"/> </p>
 <p><input type="submit" name="Ok" value="bereken"/></p>
<?php

$spaargeld = $_POST["kosten"];
$kosten = '1500';

$v =  $kosten - $spaargeld;



if ($v > 500) {
echo "je komt $v tekort het is aan te raden om een baantje te zoeken<br>";
} if ($v < 500 && $v >= 1)  {
echo "je komt $v tekort je hebt bijna genoeg<br>";
}
 if ($v == 0)  {
echo "je hebt genoeg <br> ";
}
?>