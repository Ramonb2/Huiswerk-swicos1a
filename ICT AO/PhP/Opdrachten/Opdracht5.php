<?php

@$getal = $_POST["getal"];

if (isset($_POST['submit'])) {

if ($getal == $_COOKIE["Cookie"]){
echo "<p><b>Hoera! Je hebt het getal in ";
echo  $_COOKIE['Cookie2'];
echo " Keer geraden.</b>";

setcookie("Cookie", mt_rand(1, 100));
setcookie("Cookie2", 0);
}

if ($getal > $_COOKIE["Coekie"]){
echo "<p><b>Het geraden getal is te hoog; probeer het nog eens!</b>";
setcookie("Cookie2", $_COOKIE["Cookie2"] + 1);
}

if ($getal < $_COOKIE["Cookie"]){
echo "<p><b>Het geraden getal is te laag; probeer het nog eens!</b>";
setcookie("Cookie2", $_COOKIE["Cookie2"] + 1);
}
}
else{
setcookie("Cookie", mt_rand(1, 100));
setcookie("Cookie2", 0);
}

if($getal <= 0 or $getal >= 100){
echo "<b><p>Kies een getal tussen de 1 en 100.</b>";
}

?>

<form name= "temp" action= "Opdracht5.php" method="post">

<p> Ik heb een getal in mijn geheugen, jij moet het raden
<br>Welk getal raad je ?

<p> Getal:  <input type="text" name="getal"/>

<p><input type="submit" name="submit" value="Check" /></p>

</form>