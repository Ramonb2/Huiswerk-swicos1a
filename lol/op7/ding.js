function Go() {

document.getElementById("uitkomst1").innerHTML = "";
document.getElementById("uitkomst2").innerHTML = "";
document.getElementById("uitkomst3").innerHTML = "";
document.getElementById("uitkomst4").innerHTML = "";

if(document.getElementById("dollar").checked == true){
var euro = parseFloat(document.getElementById("euro").value);
var result1 = euro * 1.08105;
result1 = result1 + " Dollar";
document.getElementById("uitkomst1").innerHTML = result1;
}

if(document.getElementById("franken").checked == true){
var euro = parseFloat(document.getElementById("euro").value);
var result2 = euro * 1.04387;
result2 = result2 + " Frank";
document.getElementById("uitkomst2").innerHTML = result2;
}

if(document.getElementById("roebels").checked == true){
var euro = parseFloat(document.getElementById("euro").value);
var result3 = euro * 63.0543196;
result3 = result3 + " Roebel";
document.getElementById("uitkomst3").innerHTML = result3;
}

if(document.getElementById("peso").checked == true){
var euro = parseFloat(document.getElementById("euro").value);
var result4 = euro * 16.3085327;
result4 = result4 + " Peso";
document.getElementById("uitkomst4").innerHTML = result4;
}





}
