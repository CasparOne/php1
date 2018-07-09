<?php
/** Функция GetRecords читает файл и возвращает массив записей гостевой книги */
function GetRecords($path)
{
    if (!is_readable($path)){
        return false;
    } else {
        return $line = file($path);
    }
}

/** Функция добавляет запись о новом госте в файл-БД гостей */
function AppRecord()
{
    return true;
}