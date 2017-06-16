<?php
function towerBuilder($n) {
  $arr = [];
  for ($i = 1; $i <= $n; $i++) {
    $starsOnLevel = ((2 * ($i)) -1);
    $spacesOnLevel = (((2 * $n) - 1) - ((2*($i))-1)) / 2;

    $spaces = str_repeat(" ", $spacesOnLevel);
    $stars = str_repeat("*", $starsOnLevel);
    $arr[$i-1]=$spaces.$stars.$spaces;
  }
  return $arr;
}
?>