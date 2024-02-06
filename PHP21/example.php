<html>
<head>
    <title>Первый пример</title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251"/>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
</head>
<body>
    <?php 
        $title = "Наша первая динамическая страница";
        $user_name = "User";
        define('PI', 3.141592);
        echo"<h3> $title </h3>";
        echo "<p>"."Ваше имя: ".$user_name."</p>";
        echo "<p>"."Дата: ".date("d-m-Y"),"</p>";
        echo "<p>"."Константа Pi = ",PI,"</p>";
    ?>
</body>
</html>