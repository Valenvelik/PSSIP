<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Карточка Валентины Цыганенко</title>
</head>

<body>
    <!--Задание 1-->
    <?php
    include "header.php";
    ?>

    <!--Задание 2-->
    <?php
    $d = 10;
    $L = $d * pi();
    echo "Длина окружности: " . $L;
    ?>

    <!--Задание 3-->
    <?php
    $i = 1;
    $n = 15;
    while ($i <= $n + 5) {
        echo "Валентина Цыганенко<br>";
        $i++;
    }
    ?>

    <!--Задание 4-->
    <?php
    $students = array(
        "Иванов" => 100,
        "Петров" => 200,
        "Сидоров" => 300
    );
    foreach ($students as $name => $stipend) {
        echo "Студент: " . $name . ", стипендия: " . $stipend . "<br>";
    }
    $totalStipend = array_sum($students);
    echo "Суммарная стипендия: " . $totalStipend . "<br>";
    ?>

    <!--Задание 5-->
    <?php
    $s1 = "Я люблю Беларусь";
    $s2 = "Я будущий программист";

    //Определение длины строки s2
    $xsdd = strlen($s2);
    echo "Длина строки s2: " . $xsdd . "<br>";

    //Вычисление 15 символа в строке s1 и определение его ASCII-кода (ь)
    $n = 15;

    $str = "Я люблю Беларусь";
    if (mb_strlen($str, "UTF-8") >= 15) {
        $char = mb_substr($str, 15, 1, "UTF-8");
        $ascii = ord($char);
        echo "n-ый символ в строке s1: " . $char . ", ASCII-код: " . $ascii . "<br>";
    } else {
        echo "Строка слишком короткая!";
    }

    //Замена слов в строке
    $s1 = str_replace("Беларусь", "Гродно", $s1);
    echo "Строка s1 после замены: " . $s1 . "<br>";
    ?>

    <!--Задание 6-->
    <?php
    $x = 1;
    $y = 1;
    $p = (log10($x) - exp($x + $y) + pow($x, $y)) / (sqrt(5) + pow($y, 4) + abs(pow($x, 3) - log10($y)));

    echo $p;
    ?>

    <!--Продолжение задания 1-->
    <?php
    include "footer.php";
    ?>
</body>

</html>