<?php
function ReadDBFile($dbPath)
{
    return true;
}


function Auth($login, $password, $dbPath)
{
    foreach (file($dbPath) as $arrElem) {
        $arrElem = explode(' ', $arrElem);
        var_dump($arrElem);
        if (($_POST['login'] == str_replace("\n", '', $arrElem[3])) && ($_POST['password'] == str_replace("\n", '', $arrElem[4]))) {
            return true;
        } else {
            return false;
        }
    }
}