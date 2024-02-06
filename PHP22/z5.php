<?php
function func($x,$y){
    $f = pow($y,$x) + sqrt(abs($x) + exp($y)) - log10(pow($x,2) + 3 * $x - 5);
    return $f;
}


print("F = ".func(13,13));
?>