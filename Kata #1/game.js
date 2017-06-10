function multiply(number) {
  var result = 0;
  for (var i = 0; i < number; i++) {
    if (i % 3 == 0 || i % 5 == 0) {
      result += i;
    }
  }
  return result;
}

document.getElementById("demo").innerHTML = "Result of number 8 is " + multiply(8);
document.getElementById("demo2").innerHTML = "Result of number 15 is " + multiply(15);
document.getElementById("demo3").innerHTML = "Result of number 31 is " + multiply(31);