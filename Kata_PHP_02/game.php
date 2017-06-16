<?php
function toJadenCase($string) {
  $result = "";
  $counter = 0;
  $myArray = (explode(" ", $string));
  
  foreach($myArray as $element) {
    $counter++;
    $first = ucfirst($element);
    $result = ($counter == 1) ? $result.$first : $result = $result." ".$first;
  }
  
  return $result;
}
?>