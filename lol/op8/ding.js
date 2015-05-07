function Bereken() {

var result = 0;

var bedrag1 = 1.50;
var bedrag2 = 12.20;
var bedrag3 = 3.50;

if(document.getElementById("aardappel").checked == true){
result = result + bedrag1;
}


if(document.getElementById("appel").checked == true){
result = result + bedrag2;
}

if(document.getElementById("bami").checked == true){
result = result + bedrag3;
}







document.getElementById("uitkomst").innerHTML = "EUR " + result;
}
