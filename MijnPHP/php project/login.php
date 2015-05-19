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
session_id('login');
session_start();
include 'db_connect.php';
if (isset($_POST['myusername'])){
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

// tegen sql injectie
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM gebruikers WHERE Gebruikersnaam='$myusername' and wachtwoord=MD5('$mypassword')";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
$_SESSION[username] = $myusername;
header("location:gastenboek.php");
}
else {
echo "Wrong Username or Password";
}}
?>
<div class="register-form">
<h1>Login</h1>
<form action="login.php" method="POST">
    <p><label>User Name : </label>
	<input id="Gebruikersnaam" type="text" name="myusername" placeholder="Gebruikersnaam" /></p>
 
     <p><label>wachtwoord&nbsp;&nbsp; : </label>
	 <input id="wachtwoord" type="password" name="mypassword" placeholder="wachtwoord" /></p>
 
    <a class="btn" href="reg.php">Signup</a>
    <input class="btn register" type="submit" name="submit" value="Login" />
    </form>
</div>
</div>
</body>
</html>