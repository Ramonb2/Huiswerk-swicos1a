<?php
	$time = "";
	$dagdeel = "";
	
	
	$time = date("H:i");
	
	
	if ($time >= "06:00" && $time <= "12:00") {
		$dagdeel = "morgen" ;}
	if ($time >= "12:01" && $time <= "18:00") {
		$dagdeel = "Middag" ; }
	if ($time >= "18:01" && $time <= "00:00") {
		$dagdeel = "avond" ; }
	if ($time >= "00:01" && $time <= "5:59") {
		$dagdeel = "nacht" ; }
		
		<html>
		<h2> Goede <?php echo $dagdeel ?> bezoeker. het is nu <?php $time ?>.
</html>

?>
