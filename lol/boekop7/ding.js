function Bereken() {

var namen = ["piet","jan","henk","sjon","geert","hank"];


document.write("Array bevat: " + namen.length + " Items");

document.write("<br>" + namen[0] + " " + namen[2] + " " + namen[4]);

namen.sort();
document.write("<br>" + namen);

var name = prompt();
namen.push(name); 
document.write("<br>" + namen);

document.write("<br>" + namen.join("*"));

}
