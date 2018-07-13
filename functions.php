<?php
/** Функция возвращает массив [имя пользователя][пароль] */
function getUserList()
{
    $path = __DIR__ . '/data.txt';
    if (!is_file($path) and !is_readable($path)) {
        $usrPass = null;
    } else {
        $arr = file($path);
        foreach ($arr as $val) {
            $usr = explode(';', trim($val))[0];
            $pass = explode(';', trim($val))[1];
            $usrPass[$usr] = $pass;
        }
    }
    return $usrPass;
}
/** Функция проверяет зарегистрирован пользователь или нет */
function existsUser($login)
{
    if (!isset($login) && '' == $login) {
        return false;
    }
    if (!getUserList()) {
        return false;
    }
    $usrPass = getUserList();
    if (array_key_exists($login, $usrPass)) {
        return true;
    } else {
        return false;
    }
}
/** Функция проверяет введеный пароль с хешем пароля, который хранится в базе (в файле) ЕСЛИ совпадает - возвращает true
 * ИНАЧЕ возвращает false*/
function checkPassword($login, $password)
{
    $usrPass = getUserList();
    if (!existsUser($login)) {
        return false;
    }
    if (password_verify($password, $usrPass[$login])) {
        return true;
    } else {
        return false;
    }
}
/** функция возвращает имя пользователя (логин), под которым вошел текущий пользователь. */
function getCurrentUser()
{
    if (!$_SESSION || ($_SESSION['usr'] == null)) {
        return null;
    } else {
        return $_SESSION['usr'];
    }
}