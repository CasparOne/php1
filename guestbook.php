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
<h1>Guest book!</h1>
<br><br><br>
<?php
include __DIR__ . '/functions.php';
$path = __DIR__ . '/data.txt';
$records = GetRecords($path);
?>
<br><br><br><br>
<pre>
<form name="newRecord" action="/app.php" method="post">
    Имя:<input type="text" name="firstname">
    Фамилия: <input type="text" name="lastname">
    Отчество: <input type="text" name="midlname">
    E-mail: <input type="email" name="email">
    <br><button type="submit">Отправить</button>
</form>
<?php
if (!$records) {
    echo 'Error!';
} else {
    echo $oneLine = implode("\n", $records); // способ, после вопроса " В какой момент появляется симввол перевода строки
    //foreach ($records as $oneRecord) { // старый не актуальный способ вывода строк.
    //}
}
?>
</body>
</html>
