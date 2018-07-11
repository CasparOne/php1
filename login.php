<?php
$datafile = __DIR__ . '/data.txt';
$login = $_POST['login'];
$password = $_POST['password'];
$errMsg = null;
include __DIR__ . '/functions.php';
switch (true) {
    case (isset($_POST['submit']) && ($login == '' || $password == '')):
        $errMsg = 'Не верный ввод!';
        break;
    case (!isset($_POST['submit']) && ($login == '' || $password == '')):
        unset($errMsg);
        break;
    case (checkPassword($login, $password)):
        session_start();
        $_SESSION['usr'] = $login;
        header('Location:http://php1.local/index.php');
        break;
    case (!existsUser($login)):
        $errMsg = 'Нет такого пользователя!';
        break;
    case (!checkPassword($login, $password)):
        $errMsg = 'Не верный пасс!';
        break;
    default:
        unset($errMsg);
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
    <title>Document</title>
</head>
<body>
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