<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id='header'><h1>Woordjes trainer</h1></div>
<div id="nav">
    <div id="nav_wrapper">
        <ul>
            <li> <a href="index.html">Home</a>
			<li> <a href="index.html">Quiz</a>
						</li>
			<li> <a href="index.html">Contact</a>
						</li>
			<li> <a href="index.html">Overhoren</a>
            </li>
        </ul>
    </div>
</div>
<div id='main'>
<?php
include_once 'db_connect.php';
$woord = "$_POST[Woord]";
$invoerder = 'Admin';
if(
	$sql = "INSERT INTO `woorden`.`woorden` (`woord`, `invoerder`) VALUES ( '$woord', '$invoerder');")

	if ($conn->query($sql) === TRUE) {
    echo "uw ingevoerde woord(en) zijn/is succesvol toegevoegd";
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}
?>
<html>
<p><b> Voeg een woord toe: </b></p>
<form name="form1" method="post" action="Voeg_toe.php"> 
<p>
woord: <input name="Woord" type="text" value""></p> 
<p>
<p><input type="submit" name="Submit" value="klik"> 
</p>
<p><b> toegevoegde woorden: </b></p>
<p > </p>
</html>
<?php $sql1 = "SELECT woord, invoerder FROM `woorden` ORDER BY `woorden`.`id` ASC";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo " ". $row["invoerder"]. " <br> <b>woord:</b> " . $row["woord"] ."<br> ";
    }
} else {
    echo "Geen woorden tot nu toe";
}
$conn->close();
?></p>
</form> 
</div>
<div id="footer"</div>
</body>
</html>
