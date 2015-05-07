function Graden({
var graden = parseFloat(document.getElementById("graden").value);


var result = (graden - 32) / 1.8;
document.getElementById("uitkomst").innerHTML = result + " C";
}
