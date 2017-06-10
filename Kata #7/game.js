function filter_list(l) {
  arr = [];
  for (var i=0; i<l.length; i++) {
    if (typeof(l[i]) == "number") {
      arr.push(l[i]);
    }
  }
  return arr;
}

document.getElementById("demo").innerHTML = "Result of [1,2,'a','b'] is " + filter_list([1,2,'a','b']);
document.getElementById("demo2").innerHTML = "Result of [1,'a','b',0,15] is " + filter_list([1,'a','b',0,15]);
document.getElementById("demo3").innerHTML = "Result of [1,2,'aasf','1','123',123] is " + filter_list([1,2,'aasf','1','123',123]);