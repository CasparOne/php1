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
include __DIR__ . '/templates/login.php';

