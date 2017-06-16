<?php
function longestConsec($strarr, $k) {
    $longest = '';

    for ($i = 0; $i <= count($strarr) - $k; $i++) {
        $string = '';
    
        for ($j = 0; $j < $k; $j++) {
            $string .= $strarr[$i + $j];
        }
        
        if (strlen($string) > strlen($longest)) {
            $longest = $string;
        }
    }
    
    return $longest;
}
?>