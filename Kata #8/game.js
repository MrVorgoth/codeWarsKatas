var countBits = function(n) {
  counter = 0;
  binary = (n >>> 0).toString(2);
  for(var i=0; i<binary.length; i++) {
    if(binary[i] == 1) {
      counter++;
    }
  }
  return counter;
};

document.getElementById("demo").innerHTML = "Result of 0 is " + countBits(0);
document.getElementById("demo2").innerHTML = "Result of 7 is " + countBits(7);
document.getElementById("demo3").innerHTML = "Result of 10 is " + countBits(10);