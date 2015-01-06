<html>
<head><title>in welke catogorie val ik</title></head>
<body>


<form name= "catogorien" action= "cat.php" method="post">
 <p>aantal minuten: <input type="text" name="minuten"/> </p>
 <p><input type="submit" name="Ok" value="Ok"/></p>


<h3>
<div id="artikel">
<?php
$kosten= "1500"
$minuten = $_POST["minuten"];
$prijs = $kosten - $minuten;

if ($prijs < 500) {
echo "Je komt nog $prijs tekort je hebt bijna genoeg";
} if ($minuten < 500&& $minuten >= 1000)  {
echo "Je komt nog $prijs blijf sparen";
}
 if ($minuten < && $minuten >= 41)  {
echo "je verbruikt per dag $minuten minuten per dag. Je zit in de catogorie Stevig";
}
 if ($minuten >60 )  {
echo "je verbruikt per dag $minuten minuten per dag. Je zit in de catogorie Te veel";
}
?>
<h3>
</div>
</body>
</html>