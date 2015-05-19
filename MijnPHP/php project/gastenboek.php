<html>

<head>
 <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">Gastenboek Ramon Brakels</div>
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
<div id="main"><?php
session_id('login');
session_start();
include 'db_connect.php'; 
include 'filter.php';
if (isset($_POST['Submit'])) {

$naam = $_SESSION[username];
$bericht = "$_POST[bericht]";
$Bericht1 =	 strip_tags($bericht);
$Naam1 =	 strip_tags($naam);
$Bericht2 = breplace($Bericht1);

// Functie voor het weghalen van bepaalde tekens
function strip_tags_content($bericht, $tags = '', $invert = FALSE) { 

  preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($tags), $tags); 
  $tags = array_unique($tags[1]); 
    
  if(is_array($tags) AND count($tags) > 0) { 
    if($invert == FALSE) { 
      return preg_replace('@<(?!(?:'. implode('|', $tags) .')\b)(\w+)\b.*?>.*?</\1>@si', '', 
	  $bericht); 
    } 
    else { 
      return preg_replace('@<('. implode('|', $tags) .')\b.*?>.*?</\1>@si', '', $bericht); 
    } 
  } 
  elseif($invert == FALSE) { 
    return preg_replace('@<(\w+)\b.*?>.*?</\1>@si', '', $bericht); 
  } 
  return $bericht; 
}
if (strlen($_POST['bericht']) < 10){
	echo 'je bericht is te kort';}
else{
	$sql = "INSERT INTO berichten (naam, bericht, datum)
	VALUES ('$Naam1', '$Bericht2', NOW())";

	if ($conn->query($sql) === TRUE) {
    echo "uw bericht is succesvol geplaatst";
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}}}
?>


<html>
<div id ='Gastenboek'>
<p><b> Reageer: </b></p>
<form name="form1" method="post" action="gastenboek.php"> 
<p>
<p>
<p>Bericht:</p>
<p><textarea name="bericht" rows="7" cols="45" maxlength="250" minlength="10" required></textarea></p>
<p><input type="submit" name="Submit" value="klik"> 
</p>
<p><b> Gastenboek Reacties: </b></p>
<p >

<?php
include_once 'db_connect.php'; 
$sql1 = "SELECT naam, datum, bericht FROM berichten";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "<table><tr> ". $row["naam"]. " 		<b> " . $row["datum"] ."</tr>  </b><br><tr>  <b>Bericht:</b> " . replace ($row["bericht"] )."</tr><br><br></table> ";
    }
} else {
    echo "Geen berichten tot nu toe";
}
$conn->close();
?></p>
</form> 
</div>
</div>
<div id="footer"</div>
</body>
</html>
