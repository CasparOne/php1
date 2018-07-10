<?php
include __DIR__ . '/SESSION.php';
include __DIR__ . '/functions.php';
$dbPath = __DIR__ . '/data.txt';
echo '<pre>';
$login = $_POST['login'];
$password = $_POST['password'];
//var_dump($credentials = $_POST);

//ar_dump(file($dbPath));

if (Auth($login, $password, $dbPath)) {
    echo 'Pass!!';
} else {
    echo 'Wrong login/password';
}


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
<body><br><br><br><br>
<div align="center">
    <form method="post" action="/login.php">
        <input type="login" name="login">
        <input type="password" name="password">
        <button type="submit">Login Me</button>
    </form>
</div>
</body>
</html>
