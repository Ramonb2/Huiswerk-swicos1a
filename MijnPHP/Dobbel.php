<head>
<style>
</style>
</head>

<body>
<form action="Dobbel.php" method="POST">
<input type="submit" name="submit" value="Gooi">
</form>

<?php
if( isset ( $_POST["submit"] )){

$w1 = rand(1,6);
$w2 = rand(1,6);
$Totaal= $w1+$w2;
if ($w1 == $w2){
echo "<h3>Je heb $w1 en $w2 gegooid Je hebt gewonnen.<br> Je prijs is NIKS :)";
}
else {
echo "<h3> Je hebt $w1 en $w2 gegooid<br> in totaal heb je $Totaal gegooid<br>";
}
}
?>
</body>