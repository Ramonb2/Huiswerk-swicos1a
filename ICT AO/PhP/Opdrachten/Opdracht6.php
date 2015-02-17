<?php

@$kleur= $_POST["kleur"];
echo "<style> body {background-color:$kleur} </style>"
?>


<body>
<center ><h1><?php echo $kleur; ?></h1></center>
</body>




?>



<form name= "temp" action= "Opdracht6.php" method="post">


Kies een kleur:  <select name = "kleur">
               <option value = "Red">Rood</option>
               <option value = "Green">Groen</option>
               <option value = "Yellow">Geel</option>
			   <option value = "Blue">Blauw</option>
               <option value = "White">Wit</option>
             </select>

<p><input type="submit" name="submit" value="Start" /></p>

</form>