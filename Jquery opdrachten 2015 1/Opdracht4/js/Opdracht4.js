function Taxi(){

	var Gereden1 = parseInt(document.getElementById("Gereden1").value);
	var Gereden2 = parseInt(document.getElementById("Gereden2").value);
	var Totaal = 0;
	

	if(document.getElementById("Weekend").value == "Ja"){

		Totaal = Totaal * 1.15;
		
	}
		if(document.getElementById("Weeks").value == "Ja"){

		Totaal = (Gereden2 * 0.25) + Gereden1;
		
	}
	
	if(document.getElementById("Weeks").value == "Nee"){

		Totaal = (Gereden2 * 0.45) + Gereden1;

	}
	
	document.getElementById("prijs").innerHTML = Totaal.toFixed(2);

}