<?php
echo '<pre>';
function getUserList($datafile)
{
    $dataset = file($datafile);
    foreach ($dataset as $arrElmnt) {
        $index = explode(';', trim($arrElmnt))[3];
        $value = explode(';', trim($arrElmnt))[4];
        $logPass[$index] = $value;
    }
    return $logPass;
}

function existsUser($login, $datafile)
{
    return array_key_exists(trim($login), getUserList($datafile));
}

function checkPassword($login, $password, $datafile)
{
    foreach (getUserList($datafile) as $key => $val) {
        $credent[] = $key . ';' . $val;
    }
    if (in_array($login . ';' . $password, $credent)) {
        return true;
    } else {
        return false;
    }
}