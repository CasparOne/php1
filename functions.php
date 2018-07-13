<?php
/** Функция GetRecords читает файл и возвращает массив записей гостевой книги */
function GetRecords($path)
{
    if (!is_readable($path)){
        return false;
    } else {
        return file($path, FILE_IGNORE_NEW_LINES);
    }
}
/** Функция возвращает массив, включающий новую добавленную строку */
function AppRecord($path)
{
    if (!GetRecords($path)){
        return false;
    } else {
        $newRecordArr = implode($_POST, ' ');
        $remaning = GetRecords($path);
        return $remaning[] = $newRecordArr;
    }
}