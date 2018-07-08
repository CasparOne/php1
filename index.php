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
        <input type="number" name="firstN">
        <input type="radio" name="subt" value="1">Вычитание
        <input type="radio" name="summ" value="1">Сложение
        <input type="radio" name="divis" value="1">Деление
        <input type="radio" name="multipl" value="1">Умножение
        <input type="number" name="secondN">
        <button type="submit"> = </button>
    </form>
<?php

var_dump($_GET);
?>

</pre>
</body>
</html>