<?php

	$bedrag = "";
	$btw = "" ;

function get_btw($bedrag , $btw) {
	
	if ($btw == "Laag") {
		$bedrag = $bedrag * 1.06;
	}
	else {
		$bedrag = $bedrag * 1.21;
	}
	
	return $bedrag;
}
echo get_btw("500" , "Laag");


function bmi($lengte , $gewicht){
	return ($gewicht/ ($lengte * $lengte));
	
}
echo '<br>';
echo bmi(1.80,80);
?>
