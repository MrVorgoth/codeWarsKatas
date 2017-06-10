function narcissistic(value) {
  digit = value.toString();
  counter = value.toString().length;
  result = 0;
  for (var i = 0; i < counter; i++) {
    result += Math.pow(digit[i], counter);
  }
  
  if (result == value) {
    return true;
  } else {
    return false;
  }
}

document.getElementById("demo").innerHTML = "Result of 24 is " + narcissistic(24);
document.getElementById("demo2").innerHTML = "Result of 63 is " + narcissistic(63);
document.getElementById("demo3").innerHTML = "Result of 153 is " + narcissistic(153);

if (!narcissistic(24)) {
  document.getElementById("demo").style.color = "red";
}

if (!narcissistic(63)) {
  document.getElementById("demo2").style.color = "red";
}

if (!narcissistic(153)) {
  document.getElementById("demo3").style.color = "red";
}