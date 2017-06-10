function getMiddle(s) {
  len = s.length;
  middle = "";
  middleLeft = "";
  middleRight = "";
  // If string is even
  if (len % 2 == 0) {
    num = (len / 2) - 1;
    for (var i=0; i<len; i++) {
      if (i == num) {
        middleLeft = i;
      }
      if (i == num + 1) {
        middleRight = i;
      }
    }
    console.log(s[middleLeft] + s[middleRight]);
    return s[middleLeft] + s[middleRight];
  } else {
    // If string is odd
    num = Math.floor(len / 2);
    for (var i=0; i<len; i++) {
      if (i == num) {
        middle = i;
      }
    }
    console.log(s[middle]);
    return s[middle];
  }
}

document.getElementById("demo").innerHTML = "Result of test is " + getMiddle("test");
document.getElementById("demo2").innerHTML = "Result of testing is " + getMiddle("testing");
document.getElementById("demo3").innerHTML = "Result of middle is " + getMiddle("middle");