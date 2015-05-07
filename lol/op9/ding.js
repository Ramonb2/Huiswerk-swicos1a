function Bereken() {

var result = 0;

var bedrag = [12,2,5];

result = Math.max.apply(Math, bedrag);

document.getElementById("uitkomst").innerHTML = "EUR " + result;
}
