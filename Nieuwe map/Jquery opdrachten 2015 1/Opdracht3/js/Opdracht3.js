var min = 16,
    max = 66,
    select = document.getElementById('Select');

for (var i = min; i <= max; i++) {
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select.appendChild(opt);
}

function sum() {
    var inputA = parseInt(document.getElementById('inputA').value);
    var salaris = parseInt(document.getElementById('salaris').value);
    var result = 0

    if (document.getElementById('inputA').checked && document.getElementByID('salaris') < 1600) {
         result = ((salaris * 12) * 1.0175)-salaris;
        document.getElementById('result').innerHTML = result;
    }
    else if (document.getElementById('salaris')>1600) {
              result = Nee;
             document.getElementById('result').innerHTML = result;
             }

}