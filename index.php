<?php
session_start();
if (!isset($_SESSION['usr']) || null == $_SESSION['usr']) {
    $_SESSION['usr'] = null;
    header('Location:http://php1.local/login.php');
}
require __DIR__ . '/classes/Users.php';
require __DIR__ . '/classes/Images.php';
$users = new Users();
$imgList = new Images();
include __DIR__ . '/templates/index.php';
