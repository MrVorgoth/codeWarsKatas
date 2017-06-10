function findOdd(A) {
  var number = 0,
  counter = 0;
  for (var i = 0; i < A.length; i++) {
    number = A[i];
    for (var j = 0; j < A.length; j++) { 
      if (number == A[j]) {
        counter++;
      }
    }
    if (counter % 2 !=0) {
      console.log("Number = " + number);
      return number;
    }
    counter = 0;
  }
}

document.getElementById("demo").innerHTML = "Result of array [20,1,-1,2,-2,3,3,5,5,1,2,4,20,4,-1,-2,5] is " + findOdd([20,1,-1,2,-2,3,3,5,5,1,2,4,20,4,-1,-2,5]);
document.getElementById("demo2").innerHTML = "Result of array [20,1,-1,2,-2,3,3,5,5,1,2,4,20,4,-1,-2,5] is " + findOdd([20,1,-1,2,-2,3,3,5,5,1,2,4,20,4,-1,-2,5]);
document.getElementById("demo3").innerHTML = "Result of array [20,1,-1,2,-2,3,3,5,5,1,2,4,20,4,-1,-2,5] is " + findOdd([20,1,-1,2,-2,3,3,5,5,1,2,4,20,4,-1,-2,5]);