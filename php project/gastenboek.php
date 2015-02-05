<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "gastenboek";
$naam = "$_POST[Naam]";
$bericht = "$_POST[bericht]";
$Bericht1 =	 strip_tags($bericht);
$Naam1 =	 strip_tags($naam);
function strip_tags_content($Bericht, $tags = '', $invert = FALSE) { 

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
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if (strlen($_POST['bericht']) < 10){
	echo 'je bericht is te kort';}
else{
	$sql = "INSERT INTO berichten (naam, bericht, datum)
	VALUES ('$Naam1', '$Bericht1', NOW())";

	if ($conn->query($sql) === TRUE) {
    echo "uw bericht is succesvol geplaatst";
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}}
?>


<html>
<p><b> Reageer: </b></p>
<form name="form1" method="post" action="gastenboek.php"> 
<p>
Naam: <input name="Naam" type="text" value""></p> 
<p>
<p>Bericht:</p>
<p><textarea name="bericht" rows="7" cols="45" maxlength="250" minlength="10"></textarea></p>
<p><input type="submit" name="Submit" value="klik"> 
</p>
<p><b> Gastenboek Reacties: </b></p>
<p >
<?php $sql1 = "SELECT naam, datum, bericht FROM berichten";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "<table><tr> ". $row["naam"]. " 		<b> " . $row["datum"] ."</tr>  </b><br><tr>  <b>Bericht:</b> " . $row["bericht"] ."</tr><br></table> ";
    }
} else {
    echo "Geen berichten tot nu toe";
}
$conn->close();
?></p>
</form> 
</html>

