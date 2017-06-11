<?php
function accum($s) {
    $result = "";
    $counter = 0;
    $chars = str_split($s);
    $length = strlen($s);
    
      foreach($chars as $char) {
        $counter++;
        
        for ($i = 0; $i < $counter; $i++) {
          if ($i == 0) {
            $result .= strtoupper($char);
          } else {
            $result .= strtolower($char);
          }
        }

        if ($counter != $length) {
          $result .= "-";
        }
      }
    
    return $result;
}
?>