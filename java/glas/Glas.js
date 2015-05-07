var m² = parseInt(document.getElementById("m²").value);
var leeftijd = document.getElementById("leeftijd").value;
var rest = document.getElementById("Rest").checked;

var glas = 30;
var sglas = 55;


jaarsalaris = maandsalaris * 12;	
uitkering = jaarsalaris * percentage;

if((leeftijd < 21) && (document.getElementById("gehuwd").checked == false))
		{
		maxmaandsalaris = 1300;
		}
document.getElementById("uitkering").innerHTML = Math.floor(uitkering);
}