<?php
include __DIR__ . '/functions.php';
$path = __DIR__ . '/data.txt';
$newArray = AppRecord($path);
if (!$newArray) {
    echo 'Error!';
} else {
file_put_contents($path, $newArray);
}

header('Location: http://php1.local/guestbook.php');



