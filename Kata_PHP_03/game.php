<?php
function findShort($str) {
  $arr = explode(" ", $str);
  $length = strlen(reset($arr));

  foreach ($arr as $item) {
    if(strlen($item) < $length) {
      $length = strlen($item);
    }
  }
  return $length;
}
?>