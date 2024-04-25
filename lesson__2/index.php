<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson two</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<header class="header">
    <div class="container">
        <p>BUTTON</p>
    </div>
</header>
</body>
</html>

<?php
const USER__AGE = 24;

$userAgeText = 'User age: ';

echo $userAgeText . USER__AGE . '<br>';
echo '<br>';

$number = 7; //Создание переменной
$number = 45; //Новое значение

$num = 8;

$boolFalse = false;
$boolTrue = true;

$str = "Переменная";

echo $str . ': ' . $number . '<br>' . $str . ': '. $num;

$a = 5;
$b = "6";
echo '<br>';
echo $a + floatval($b);
?>