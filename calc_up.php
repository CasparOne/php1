<?php

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
<h1>Калькулятор вариант 2 (улучшенный)</h1>
<pre>
    <form action="/calc_up.php" method="GET">
        A = <input type="number" name="firstN" value="<?php echo $_GET['firstN'] ?>">
        B = <input type="number" name="secondN" value="<?php echo $_GET['secondN'] ?>">
        <input type="radio" name="oper" value="-">-
        <input type="radio" name="oper" value="+">+
        <input type="radio" name="oper" value="/">/
        <input type="radio" name="oper" value="*">*
        <button type="submit" name="button"> = </button>
    </form>
    </pre>
<?php
if (isset($_GET['button'])) {
    echo 'Результат: ';
    $firstN = floatval($_GET['firstN']);
    $secondN = floatval($_GET['secondN']);
    if (!isset($_GET['oper'])) {
        echo $result = 'Не верная операция!';
        die();
    }
    if (!isset($_GET['firstN']) || !isset($_GET['secondN'])) {
        echo $result = 'Не верные значения!';
        die();
    }
    if ($_GET['firstN'] == '' || $_GET['secondN'] == '') {
        echo $result = 'Вы не ввели числа! Операция не возможна';
        die();
    }
    switch ($_GET['oper']) {
        case '-':
            echo $result = ($firstN - $secondN);
            break;
        case '+':
            echo $result = ($firstN + $secondN);
            break;
        case '*':
            echo $result = ($firstN * $secondN);
            break;
        case '/':
            if ($secondN == 0) {
                echo $result = 'Делить на ноль, сами знаете...';
            } else {
                echo $result = ($firstN / $secondN);
            }
            break;
        default:
            echo 'Что то пошло не так!!';
    }
}
?>
</body>
</html>

