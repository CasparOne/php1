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
<h1>PHP1 - Урок 2 ДЗ</h1>
<div><p>Таблица истинности "AND"</p>
    <table border="1" title="">
        <tr>
            <td>A</td>
            <td>B</td>
            <td>A && B</td>
        </tr>
        <tr align="center">
            <td>0</td>
            <td>0</td>
            <td><?php echo (int)(false && false); ?></td>
        </tr>
        <tr align="center">
            <td>0</td>
            <td>1</td>
            <td><?php echo (int)(false && true); ?></td>
        </tr>
        <tr align="center">
            <td>1</td>
            <td>0</td>
            <td><?php echo (int)(true && false); ?></td>
        </tr>
        <tr align="center">
            <td>1</td>
            <td>1</td>
            <td><?php echo (int)(true && true); ?></td>
        </tr>
    </table>
</div>

<div><p>Таблица истинности "OR"</p>
    <table border="1" title="">
        <tr>
            <td>A</td>
            <td>B</td>
            <td>A && B</td>
        </tr>
        <tr align="center">
            <td>0</td>
            <td>0</td>
            <td><?php echo (int)(false || false); ?></td>
        </tr>
        <tr align="center">
            <td>0</td>
            <td>1</td>
            <td><?php echo (int)(false || true); ?></td>
        </tr>
        <tr align="center">
            <td>1</td>
            <td>0</td>
            <td><?php echo (int)(true || false); ?></td>
        </tr>
        <tr align="center">
            <td>1</td>
            <td>1</td>
            <td><?php echo (int)(true || true); ?></td>
        </tr>
    </table>
</div>

<div><p>Таблица истинности "XOR"</p>
    <table border="1" title="">
        <tr>
            <td>A</td>
            <td>B</td>
            <td>A && B</td>
        </tr>
        <tr align="center">
            <td>0</td>
            <td>0</td>
            <td><?php echo (int)(false XOR false); ?></td>
        </tr>
        <tr align="center">
            <td>0</td>
            <td>1</td>
            <td><?php echo (int)(false XOR true); ?></td>
        </tr>
        <tr align="center">
            <td>1</td>
            <td>0</td>
            <td><?php echo (int)(true XOR false); ?></td>
        </tr>
        <tr align="center">
            <td>1</td>
            <td>1</td>
            <td><?php echo (int)(true XOR true); ?></td>
        </tr>
    </table>
</div>
<br> <br>

<?php

include __DIR__ . '/functions.php';

$a = 2;
$b = 4;
$c = 5;
$D = Discriminant($a, $b, $c);

echo '<br> <p>Решение квадратного уравнения</p> <br>' . $a . 'x^2+' . $b . 'x+' . $c . '<br>';
echo 'a=' . $a . '<br>b=' . $b . '<br>c=' . $c . '<br>D=' . $D;

/** Main check Discriminant and return calculated results */
if ($D > 0) {
    $x1 = ((-$b + sqrt($D)) / (2 * $a));
    $x2 = ((-$b - sqrt($D)) / (2 * $a));
    echo '<br>Корни уравнения: X1=' . $x1 . '  X2=' . $x2;
} elseif ($D = 0) {
    $x1 = ((-$b - sqrt($D)) / (2 * $a));
    echo '<br>Корень уравнения: X=' . $x1;
} else {
    echo '<br> <p>Корней нет!</p>';
}


/** Объявляем переменную $inc и присваеваем ей значение функции inlude
 * (в данном случае оператор include используется как функция) */
$inc = include __DIR__ . '/data.txt';
var_dump($inc);

/** Так же, можно значение функции include передать в функцию echo, которая выводит даное значение  браузер
 в общем случае, функция возвращает еденицу (int)1, но когда это значение передается в функцию echo оно не явно приводится
 * к типу (str) */
echo include __DIR__. '/test.txt';

echo '<br><br>';


echo GenderDetection('');




?>


</body>
</html>