<?php
    $s1 = "Я люблю Беларусь";
    $s2 = "Я учусь в Политехническом колледже. О о О";
    print("Длинна строки S1 - ".mb_strlen($s1));
    $n = 13;
    print("<br/>N-ый символ сроки S2 - ".mb_substr($s2,$n-1,1)."<br/>ASII код символа - ".ord(mb_substr($s2,$n-1,1)));
    $s2 = str_replace("о","а",$s2);
    $s2 = str_replace("О","А",$s2);
    print("<br/>Новая строка S2: ".$s2);
?>