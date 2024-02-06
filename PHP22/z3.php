<?php
$array = [2,1,8,-4,9];
print("Массив: ");
foreach($array as $element){
    print($element ."; ");
}

sort($array);
print("<br/>Минимальное число в масссиве: ".$array[0]);
?>