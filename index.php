<?php
include __DIR__ . '/functions.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<pre>

    <form action="/index.php" method="GET">
        <input type="text" name="firstN">
        <input type="radio" name="oper" value="-">Вычитание
        <input type="radio" name="oper" value="+">Сложение
        <input type="radio" name="oper" value="/">Деление
        <input type="radio" name="oper" value="*">Умножение
        <input type="text" name="secondN">
        <button type="submit"> = </button>
    </form>
<?php

$firstN = $_GET['firstN'];
$secondN = $_GET['secondN'];
$operation = $_GET['oper'];
//var_dump($_GET);


if (isset($_GET) && !empty($_GET)){
    if ((bool)$firstN && (bool)$secondN) {
        if (isset($operation) && $operation === '-') {
            $res = Subtraction($firstN, $secondN);
            echo 'Резльтат: ' . $res;
        } elseif (isset($operation) && $operation === '+' ) {
            $res = Summarry($firstN, $secondN);
            echo 'Резльтат: ' . $res;
        } elseif (isset($operation) && $operation === '/') {
            $res =  Division($firstN, $secondN);
            echo 'Резльтат: ' . $res;
            var_dump($res);
        } elseif (isset($operation) && $operation === '*') {
            $res = Multiple($firstN, $secondN);
            echo 'Резльтат: ' . $res;
        } else {
            echo 'Ошибка ввода! Повторите ввод и выберите правильную операцию';
        }
    } else {
        echo 'Введите корректные значения для выполнения операции';
    }


}



?>

</pre>
</body>
</html>