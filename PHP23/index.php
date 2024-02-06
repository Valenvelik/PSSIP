<?php 
    $data = date("Y.m.d");
    $time = date("H.i");
    $day = date("D");
    print($data."<br>".$time."<br>".$day."<br>");

    function GetDay(){
        $Days = ["Понедельник","Вторник","Среда","Четверг","Пятница","Суббота","Воскрсенье"];
        return $Days[((int)date("N"))-1];
    }

    $day = GetDay();
    print($day);

    print("<form action=\"index.php\"style=\"margin: 15px;\" method=\"post\">".Date("m.d.Y.H:i")."<br/><input type=\"submit\" style=\"margin-top: 15px;\" name=\"GiveDay\" value=\"Что за день сегодня?\"></form>");
    if(isset($_POST['GiveDay'])){
        print(GetDay());
    }
        
?>  