function sum() {
	var inputA = parseInt(document.getElementById('inputA').value);
	var inputB = parseInt(document.getElementById('inputB').value);
	
	var result = inputA + inputB;
	
	document.getElementById('result').innerHTML = result;
}