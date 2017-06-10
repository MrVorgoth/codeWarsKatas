function digital_root(n) {
	counter = n.toString().length;
	number = n.toString();
	result = 0;
	digitalRootCounter = 0;

	do {
		if(digitalRootCounter > 0) {
			counter = result.toString().length;
			number = result.toString();
			result = 0;
		}
		for (var i = 0; i < counter; i++) {
			result += parseFloat(number[i]);
		}
		digitalRootCounter++;
	} while (result.toString().length != 1);
return result;
console.log(result);
}

document.getElementById("demo").innerHTML = "Result of number 15 is " + digital_root(15);
document.getElementById("demo2").innerHTML = "Result of number 20 is " + digital_root(20);
document.getElementById("demo3").innerHTML = "Result of number 942 is " + digital_root(942);