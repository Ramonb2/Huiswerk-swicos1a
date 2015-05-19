<?php
// in deze functie staan de woorden die uit het gastenboek worden gefilterd
	function replace($x){
		$original = array("fuck","ass","kut","lul","penis","kanker","vagina","luuk","aars","flikker","teringlijer","Je moeder");
		$x= str_ireplace($original, 'Bobba', $x);
		return $x;
	}
// een functie om smileys in het bericht te zetten
	function breplace($y){
		       $icons = array(
                ':)'    =>  '<img class="emoticon" img src="afbeeldingen/1.png" alt="1"  />',
				':D'    =>  '<img class="emoticon" img src="afbeeldingen/2.png" alt="2"  />',
                ':('    =>  '<img class="emoticon" img src="afbeeldingen/3.png" alt="3"  />',
                ';('    =>  '<img class="emoticon" img src="afbeeldingen/4.png" alt="4"  />',
                '(angel)'    =>  '<img class="emoticon" img src="afbeeldingen/5.png" alt="5"  />',
                'o_O'    =>  '<img class="emoticon" img src="afbeeldingen/6.png" alt="6"  />',
                '8)'   =>  '<img class="emoticon" img src="afbeeldingen/7.png" alt="7"  />',
                '3:)'   =>  '<img class="emoticon" img src="afbeeldingen/8.png" alt="8"  />',
                '(cat)'    =>  '<img class="emoticon" img src="afbeeldingen/9.png" alt="9"  />',
                ':v'    =>  '<img class="emoticon" img src="afbeeldingen/10.png" alt="10" />',
                ';)'    =>  '<img class="emoticon" img src="afbeeldingen/11.png" alt="11" />',
                '>_<'    =>  '<img class="emoticon" img src="afbeeldingen/12.png" alt="12"  />',
                ':/'    =>  '<img class="emoticon" img src="afbeeldingen/13.png" alt="13"  />',
                '(heart)'    =>  '<img class="emoticon" img src="afbeeldingen/14.png" alt="14" />',
		);
		$y=str_replace (array_keys($icons) , array_values($icons), $y);
		return $y;
		
		
	}
