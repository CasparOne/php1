<?php
$login = $_POST['login'] ?? '';
$password = $_POST['password'] ?? '';
$errMsg = null;
require __DIR__ . '/classes/Users.php';

$users = new Users();

switch (true) {
    case (isset($_POST['submit']) && ($login == '' || $password == '')):
        $errMsg = 'Не верный ввод!';
        break;
    case (!isset($_POST['submit']) && ($login == '' || $password == '')):
        $errMsg = null;
        break;
    case ($users->checkPass($login, $password)):
        session_start();
        $_SESSION['usr'] = $login;
        header('Location:http://php1.local/index.php');
        break;
    case (!$users->isUserExists($login)):
        $errMsg = 'Нет такого пользователя!';
        break;
    case (!$users->checkPass($login, $password)):
        $errMsg = 'Не верный пасс!';
        break;
    default:
        $errMsg = null;
        break;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log-in</title>
</head>
<body>
<center>
    <h1>Добро пожаловать в галерею</h1>
    <p>Что бы авторизироваться - введите логин/пароль</p>
</center>
<div align="center">
    <form action="login.php" method="post">
        Login:<input name="login"><br><br>
        Password:<input name="password"><br><br>
        <button name="submit" type="submit">Войти</button>
        <br>
        <h3><?php echo $errMsg ?></h3>
    </form>
</div>
</body>
</html>