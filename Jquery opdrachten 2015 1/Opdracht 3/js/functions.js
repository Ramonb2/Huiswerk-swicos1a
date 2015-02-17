function sum() {
	var inputA = parseInt(document.getElementById('inputA').value);
	var inputB = parseInt(document.getElementById('inputB').value);
	
	if (document.getElementById('+').checked) {
		var result = inputA + inputB;
	}
	else if (document.getElementById('-').checked) {
		var result = inputA - inputB;
	}
	else if (document.getElementById('*').checked) {
		var result = inputA * inputB;
	}
	else if (document.getElementById('/').checked) {
		var result = inputA / inputB;
	}
	
	if (document.getElementById('heel').selected) {
		 document.getElementById('result').innerHTML = parseInt ( result);
	} else {
		document.getElementById('result').innerHTML = result;
	}
}