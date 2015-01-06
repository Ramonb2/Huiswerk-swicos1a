<html>
<head><title>in welke catogorie val ik</title>
<style type="text/css">
body p input {
	font-family: "Arial Black", Gadget, sans-serif;
	font-size: 14px;
	background-color: #CCC;
	height: 20px;
	width: 140px;
	border-top-style: solid;
	border-top-color: #000;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-radius: 8px;
}
body p input {
	border: thin solid #000;
}
</style>
</head>
<body>
<style>
#artikel {
    width: 320px;
    padding: 10px;
    border: 1px solid gray;
    margin: 10; 
}
table#t01 {
    width: 50%; 
    background-color: #f1f1c1;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
    background-color: #fff;
}
table#t01 th {
    color: white;
    background-color: black;
}
</style>
<table id="t01">
  <tr>
    <th>Tijd(min)</th>
    <th><20</th> 
	<th>Tussen 21 en 40</th> 
	<th>Tussen 41 en 60</th> 
	<th>Meer dan 60</th> 
  </tr>
  <tr>
    <th>Categorie</th>
    <th>simpel</th> 
	<th>Gemmideld</th> 
	<th>Stevig</th> 
	<th>Te veel</th> 
  </tr>
</table>

<form name= "catogorien" action= "cat.php" method="post">
 <p>aantal minuten: <input type="text" name="minuten"/> </p>
 <p><input type="submit" name="Ok" value="Ok"/></p>


<h3>
<div id="artikel">
<?php
$minuten = $_POST["minuten"];

if ($minuten < 20) {
echo "je verbruikt per dag $minuten minuten per dag. Je zit in de catogorie Simpel";
} if ($minuten < 40&& $minuten >= 21)  {
echo "je verbruikt per dag $minuten minuten per dag. Je zit in de catogorie Gemmideld";
}
 if ($minuten < 60&& $minuten >= 41)  {
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