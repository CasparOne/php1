<?php
require __DIR__ . '/classes/Users.php';
echo '<pre>';
$cl = new Users();

var_dump($cl->isUserExists('admin'));
var_dump($cl->checkPass('123', '123'));
