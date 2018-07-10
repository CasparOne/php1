<?php
session_start();
if (isset($_SESSION['loged'])) {
    $_SESSION['loged'] = 0;
}
if ($_SESSION['loged'] != 1) {
    header('Location:http://php1.local/login.php');
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>PHP1 Урок 4</h1>
<form action="/upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="myimage">
    <button type="submit">Загрузить</button><br><br>
</form>

<?php
$list = scandir(__DIR__ . '/images');
$list = array_diff($list, ['.','..']);
foreach ($list as $img) {
    ?>
    <img src="/images/<?php echo $img; ?>" height="200">

    <?php

}
?>


</body>
</html>