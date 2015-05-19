<?php  //Start the Session
session_start();
 include('db_connect.php');

if (isset($_POST['username']) and isset($_POST['password'])){

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM `gebruikers` WHERE gebruikersnaam='$username' and wachtwoord='$password'";
 
$result = mysql_query($query) or die(mysql_error());
$count = mysql_num_rows($result);

if ($count == 1){
$_SESSION['username'] = $username;
}else{

echo "Invalid Login Credentials.";
}
}

if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
echo "Hai " . $username . "
";
echo "This is the Members Area
";
echo "<a href='logout.php'>Logout</a>";
 
}else{
?>
<!DOCTYPE html>
 <head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>


<div class="register-form">
<?php
	if(isset($msg) & !empty($msg)){
		echo $msg;
	}
 ?>
<h1>Login</h1>
<form action="" method="POST">
    <p><label>User Name : </label>
	<input id="username" type="text" name="username" placeholder="username" /></p>
 
     <p><label>Password&nbsp;&nbsp; : </label>
	 <input id="password" type="password" name="password" placeholder="password" /></p>
 
    <a class="btn" href="register.php">Signup</a>
    <input class="btn register" type="submit" name="submit" value="Login" />
    </form>
</div>
<?php } ?>
</body>
</html>