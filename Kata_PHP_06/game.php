<?php
function tribonacci($signature, $n) {
  $arr = [];
  
  if($n == 0) {
    return $arr;
  } elseif($n == 1) {
    array_push($arr, $signature[0]);
  } elseif($n == 2) {
    array_push($arr, $signature[0]);
    array_push($arr, $signature[1]);
  } elseif($n == 3) {
    array_push($arr, $signature[0]);
    array_push($arr, $signature[1]);
    array_push($arr, $signature[2]);
  } else {
  
    foreach($signature as $item) {
      array_push($arr, $item);
    }
  
    for($i = 0; $i < $n-3; $i++) {
    if (isset($arr[$i])) {
      $number1 = $arr[$i];
    }
    if (isset($arr[$i+1])) {
      $number2 = $arr[$i+1];
    }
    if (isset($arr[$i+2])) {
      $number3 = $arr[$i+2];
    }
      $result = $number1 + $number2 + $number3;
      array_push($arr, $result);
    }
  }
  return $arr;
}
?>