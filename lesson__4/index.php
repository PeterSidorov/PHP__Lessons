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


$str = '   444   ';
echo "VAR: $str <br>";

echo "<input type='text'><br>";
$length = strlen(trim($str));
// trim убирает пробелы из строки, strlen считает сколько символов в строке
echo $length;
"<br>";


$passwordUser = "olfdDFDf67dfbf$$$";

echo md5($passwordUser); //Хеширует пароль


?>
</body>
</html>
<?php
