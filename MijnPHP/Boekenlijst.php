<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" >
</head>
<body>
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "portfolio";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 $sql1 = "SELECT naam,  ISBN, Afbeelding FROM boeken   WHERE ISBN";
$result = $conn->query($sql1);

?>
<table>
<tr> <th width='764px' height='25px'>Naam</th>
						 	<th width='154'>ISBN</th>
									<th width='112'>Afbeelding</th>
<?php								
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "
 <tr><td>". $row["naam"]."</td><td>" . $row["ISBN"] ."</td><td>" . $row["Afbeelding"] ."</td></tr><br>";
    }
} else {
    echo "Geen berichten tot nu toe";
}
$conn->close();


?>
</table>
</body>
</html>