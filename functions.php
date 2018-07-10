<?php
/** Функция GetRecords читает файл и возвращает массив записей гостевой книги */
function GetRecords($path)
{
    if (!is_readable($path)){
        return false;
    } else {
        $ar = file($path);
        return $ar;
    }
}

/** Функция возвращает массив, включающий новую добавленную строку */
function AppRecord($path)
{
    if (!GetRecords($path)){
        return false;
    } else {
        $newRecord = implode($_POST, ' ');
        $remaning = GetRecords($path);
        $remaning[] = "\n" . $newRecord;
        return $remaning;
    }
}