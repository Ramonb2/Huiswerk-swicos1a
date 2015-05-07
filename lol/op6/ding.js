function Go() {
var euro = parseFloat(document.getElementById("euro").value);


var result = euro * 1.08105;
document.getElementById("uitkomst").innerHTML = result + " Dollar";
}
