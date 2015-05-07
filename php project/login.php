<html>

<head>
 <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">Het Hoofd</div>
<div id="nav">
    <div id="nav_wrapper">
        <ul>
            <li><a href="login.php">inloggen</a>
            </li>
            <li> <a href="reg.php">registreren</a>
            </li>
            <li> <a href="gastenboek.php">Gastenboek</a>
            </li>
        </ul>
    </div>
</div>
<div id='main'>
<?php
session_start();
include'db_connect.php';
if (isset($_POST['Gebruikersnaam']) and isset($_POST['wachtwoord'])){
$Gebruikersnaam = $_POST['Gebruikersnaam'];
$wachtwoord = $_POST['wachtwoord'];
$sql = "SELECT Gebruikersnaam, wachtwoord FROM gebruikers WHERE Gebruikersnaam='$Gebruikersnaam' wachtwoord='$wachtwoord'";
if ($conn->query($sql) === TRUE) {
    echo "succesvol ingelogd";
	} else {
		session_destroy();
    echo "uw wachtwoord of username is verkeerd<br>" ;
}
$_SESSION['Gebruikersnaam'] = $Gebruikersnaam;
}else{

echo "wachtwoord of Gebruikersnaam verkeerd";
}


if (isset($_SESSION['Gebruikersnaam'])){
$Gebruikersnaam = $_SESSION['Gebruikersnaam'];
echo "Hallo meneer/mevrouw " . $Gebruikersnaam . "
";
echo "dit is voor admins
";
echo "<a href='logout.php'>Logout</a>";
 
}else{
?>
<div class="register-form">
<?php
	if(isset($msg) & !empty($msg)){
		echo $msg;
	}
 ?>
<h1>Login</h1>
<form action="login.php" method="POST">
    <p><label>User Name : </label>
	<input id="Gebruikersnaam" type="text" name="Gebruikersnaam" placeholder="Gebruikersnaam" /></p>
 
     <p><label>wachtwoord&nbsp;&nbsp; : </label>
	 <input id="wachtwoord" type="password" name="wachtwoord" placeholder="wachtwoord" /></p>
 
    <a class="btn" href="reg.php">Signup</a>
    <input class="btn register" type="submit" name="submit" value="Login" />
    </form>
</div>
</div>
<?php } ?>
</body>
</html>