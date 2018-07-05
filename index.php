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
<h1>PHP1</h1>

<?php
include __DIR__ . '/functions.php';

$a = 5;
$b = false;
const A = null ;
const B = false;


var_dump(var_dump((int) A));
//var_dump(var_dump((int) B));

?>


</body>
</html>