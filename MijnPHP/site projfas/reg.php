<html>

<head>
 <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">Het Hoofd</div>
<div id="nav">
    <div id="nav_wrapper">
        <ul>
            <li><a href="index.html">inloggen</a>
            </li>
            <li> <a href="reg.php">registreren</a>
            </li>
            <li> <a href="gastenboek.php">Gastenboek</a>
            </li>
			<li> <a href="webshop.html">Gastenboek</a>
            </li>
            <li> <a href="contact.html">Contact</a>
            </li>
        </ul>
    </div>
</div>
<div id="main"><?php
include 'db_connect.php'; 
if (isset($_POST['Submit'])) {
$gebruikersnaam = "$_POST[gebruikersnaam]";
$password = "$_POST[Wachtwoord]";



if (strlen($_POST['gebruikersnaam']) < 4){
	echo 'naam fout ';}
else{
	$sql = "INSERT INTO gebruikers (Gebruikersnaam, wachtwoord)
	VALUES ('$gebruikersnaam', MD5('$password')) ";

	if ($conn->query($sql) === TRUE) {
    echo "uw acount is succesvol aangemaakt";
	} else {
    echo "deze gebruikersnaam bestaat al   <br>" ;
}}}
?>
<html>
<form name="form1" method="post" action="reg.php"> 
<p>
Naam: <input name="gebruikersnaam" type="text" value""></p> 
<p>
<p>
Wachtwoord: <input name="Wachtwoord" type="password" value""></p> 
<p><input type="submit" name="Submit" value="registreren"> 
</p>
</html>