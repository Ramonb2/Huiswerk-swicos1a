<?php
$aantal=10;
$aantal2=$aantal;
$b = Array();

if (isset($_POST['submit1'])) {
while($aantal >= 0){
$rdm = Mt_rand(1,6);
$b[$aantal] = $rdm; 
$aantal --;
}
}

if (isset($_POST['submit2'])) {

while($aantal >= 0){

$b[$aantal] = null; 
$aantal --;
}
}
if (isset($_POST['submit1'])) {
while($aantal2 >= 0){
echo '<img src="dice' . $b[$aantal2] . '.png">';
$aantal2 --;
}
}
?>

<form name= "temp" action= "3.php" method="post">

<p><input type="submit" name="submit1" value="Gooi" /></p>
<p><input type="submit" name="submit2" value="Stop" /></p>
</form>