<?php
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

function checkPassword($login, $password)
{
    $usrPass = getUserList();
    if (!existsUser($login)) {
        return false;
    }
    foreach ($usrPass as $key => $value) {
        $arrLogPass[] = $key . ';' . $value;
    }
    if (!in_array($login . ';' . $password, $arrLogPass)) {
        return false;
    } else {
        return true;
    }

}

function getCurrentUser()
{
    if (!$_SESSION || ($_SESSION['usr'] == null)) {
        return null;
    } else {
        return $_SESSION['usr'];
    }
}