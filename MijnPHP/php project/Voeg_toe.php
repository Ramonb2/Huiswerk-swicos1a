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
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "woorden";
$woord = "$_POST[Woord]";
$invoerder = 'niks'
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if{
	$sql = "INSERT INTO woorden (woord, invoerder, datum)
	VALUES ('$woord', '$invoerder', NOW())";

	if ($conn->query($sql) === TRUE) {
    echo "uw ingevoerde woord(en) zijn/is succesvol toegevoegd";
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}}
?><html>
<p><b> Reageer: </b></p>
<form name="form1" method="post" action="gastenboek.php"> 
<p>
Naam: <input name="Woord" type="text" value""></p> 
<p>
<p>Bericht:</p>
<p><textarea name="bericht" rows="7" cols="45" maxlength="250" minlength="10"></textarea></p>
<p><input type="submit" name="Submit" value="klik"> 
</p>
<p><b> Gastenboek Reacties: </b></p>
<p >
<?php $sql1 = "SELECT woord, datum, invoerder FROM woorden";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "<table><tr> ". $row["woord"]. " 		<b> " . $row["datum"] ."</tr>  </b><br><tr>  <b>Bericht:</b> " . $row["invoerder"] ."</tr><br></table> ";
    }
} else {
    echo "Geen berichten tot nu toe";
}
$conn->close();
?></p>
</form> 
</div>
<div id="footer"</div>
</body>
</html>
