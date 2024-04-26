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

$user = 0;

// || или, && и

$a = 9;
$b = 5;
$v =1;
if ($a > $b || $v > $b) {
    echo $a . '<h1 style="display: inline"> > </h1>' . $b;
} else if ($a < $b) {
    echo $a . '<h1 style="display: inline"> < </h1>' . $b;
} else if ($a == $b) {
    echo $a . '<h1 style="display: inline"> = </h1>' . $b;
};

?>

</body>
</html>
<?php
