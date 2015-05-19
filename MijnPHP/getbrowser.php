<?php
function getBrowser() {

	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	$browser = "";

    $browser_array  =   array(
                            '/msie/i'       =>  'Internet Explorer',
                            '/firefox/i'    =>  'Firefox',
                            '/safari/i'     =>  'Safari',
                            '/chrome/i'     =>  'Chrome',
                            '/opera/i'      =>  'Opera',
                            '/netscape/i'   =>  'Netscape',
                            '/maxthon/i'    =>  'Maxthon',
                            '/konqueror/i'  =>  'Konqueror',
                            '/mobile/i'     =>  'Handheld Browser'
                        );

    foreach ($browser_array as $regex => $value) { 

        if (preg_match($regex, $user_agent)) {
            $browser    =   $value;
        }

    }
	$browser        =  $browser ? $browser : "Unknown Browser";
    return $browser;
}
echo $browser

/*
Vragen over bovenstaande code:

1.	wat is het doel van de functie getBrowser()?
De browser die je gebruikt kunnen weergeven

2.	 Hoe wordt dit script (de functie getBrowser() dus) gebruikt? Met andere woorden: hoe krijg je de code aan de praat?
door te kijken welke browser jij gebruiktterwijl je dit script runt
3.	wat geeft de functie getBrowser() terug?
de naam van je browser
4.	wat wordt met het teruggegeven resultaat gedaan?
word terug geroepen zodat je het kan echoen
5.	test het script met een aantal browsers; werkt het in alle gevallen?
Nee tenminste niet bij mij
6.	als een nieuwe browser moet worden toegevoegd, waar plaats je dan de code, en hoe ziet die regel eruit?

7.	zoek op (via bijvoorbeeld php.net) wat de functie preg_match() doet

8.	wat is de functie van de slashes ( / ) in de keys van de array $browser_array?

9.	wat is de functie van de "i" in de keys van de array $browser_array? 

10.	verklaar de regel: $browser = $browser ? $browser : "Unknown browser";

11.	HTTP_USER_AGENT wordt gehaald uit de super global array $_SERVER; zoek uit wat nog meer in deze array staat

12.	verklaar de regel: foreach ($browser_array as $regex => $value) 

*/ 
?>