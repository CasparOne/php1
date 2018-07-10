<?php
include __DIR__ . '/functions.php';
$datafile = __DIR__ . '/data.txt';
$login = 'koshka@gmail.ru';
$password = '123';
var_dump($login, $password, $datafile);

var_dump(checkPassword($login, $password, $datafile));

