function order(words) {
  number = 1;
  result = "";
  arr = [];
  arr = words.split(" ");
  if (words == "") {
    return result;
  }
  do {
    for(var i = 0; i < arr.length; i++) {
      for(var j = 0; j < arr[i].length; j++) {
        if(arr[i][j] == number) {
          if (result == "") {
            result += arr[i];
          }
          else {
            result += " " + arr[i];
          }
          number++;
        }
      }
    }
  } while(number-1 != arr.length);
  return result;
}

document.getElementById("demo").innerHTML = "Result of [W2orld Hel1lo] is " + order('W2orld Hel1lo');
document.getElementById("demo2").innerHTML = "Result of [is2 Thi1s T4est 3a] is " + order('is2 Thi1s T4est 3a');
document.getElementById("demo3").innerHTML = "Result of [4of Fo1r pe6ople g3ood th5e the2] is " + order('4of Fo1r pe6ople g3ood th5e the2');