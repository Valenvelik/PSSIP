<title>Tsyganenko Valentina</title>
<?php
echo"Привет всем!!!";
$color = "blue";
$size = "30px";
print('<br/><span style="color:'.$color.';font-size:'.$size.';">Цыганенко Валентина Викторовна</span><br/>');
define('e', 2.71828);
print("Число е равно ".e);
$num_e1 = e;
print('<br/>'.gettype($num_e1));

print('<br/>');
$num_e1 = (string)$num_e1;
print($num_e1);
print('<br/>'.gettype($num_e1));

print('<br/>');
$num_e1 = (int)$num_e1;
print($num_e1);
print('<br/>'.gettype($num_e1));

print('<br/>');
$num_e1 = (bool)$num_e1;
print($num_e1);
print('<br/>'.gettype($num_e1));


print('<br/>');
print('<br/>');
define('e', 12);
print("Новая константа е = ".e);
print("<br/>Увы! Она не меняется..");

print('<br/>');
print('<br/>');
$newVar = 1;
print($newVar.'<br/>');
$newVar = 2;
print($newVar.'<br/>');
$newVar = 3;
print($newVar.'<br/>');
?>