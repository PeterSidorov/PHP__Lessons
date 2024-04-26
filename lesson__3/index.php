<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: lightcoral">
<?php
$x = 100;
$y = 20;
echo $x + $y . '<br>';
echo $x - $y . '<br>';
echo $x * $y . '<br>';
echo $x / $y . '<br>';
echo $x % $y . '<br>';

$x += 10;
echo $x.'<br>'.'<br>';

echo M_1_PI. '<br>';
echo M_E. '<br>';

echo mt_rand(1, 10).'<br>'; //Случайнок число
echo min(55, 43, 7, 22, 455445).'<br>'; //находит минимальное число
echo max(888, 43, 6, 1, 3, 22, 2); //находит минимальное число
?>
</body>
</html>
<?php
