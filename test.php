<?php
$dbPath = __DIR__ . '/data.txt';
echo '<pre>';
$login = $_POST['login'];
$password = $_POST['password'];

var_dump($f = file($dbPath));

foreach ($f as $strArr) {
    $strArr = explode(' ', $strArr);
    var_dump($strArr);


}