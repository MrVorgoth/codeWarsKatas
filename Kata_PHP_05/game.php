<?php
function find($integers) {
  $even;
  $evenCounter = 0;
  $odd;
  $oddCounter = 0;
  
  foreach($integers as $item) {
    if ($item % 2 == 0) {
      $evenCounter++;
      $even = $item;
    } else {
      $oddCounter++;
      $odd = $item;
    }
  }
  if ($evenCounter == 1) {
    return $even;
  } else {
    return $odd;
  }
}
?>