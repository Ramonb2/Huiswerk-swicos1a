function Go() {
var graden = parseFloat(document.getElementById("graden").value);


var result = graden * 1.8 + 32;
document.getElementById("uitkomst").innerHTML = result + " F";
}
