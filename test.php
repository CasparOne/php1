<?php
$dsn = 'mysql:host=localhost;dbname=test';
$dbh = new PDO($dsn, 'root' . '');
$sth = $dbh->prepare('SELECT * FROM persons');
$sth->execute();
$data = $sth->fetchAll();
var_dump($data);