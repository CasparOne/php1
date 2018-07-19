<?php
session_start();
if (!isset($_SESSION['usr']) || null == $_SESSION['usr']) {
    $_SESSION['usr'] = null;
    header('Location:http://php1.local/login.php');
}
require __DIR__ . '/classes/Users.php';
require __DIR__ . '/classes/Image.php';
$users = new Users();
$imgList = new Image();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Галерея фотографий</title>
</head>
<body>
<h1>PHP1 Урок 5</h1>
<h3>Вы вошли, как <?php echo ucfirst($users->getCurUser()); ?>!</h3>
<form action="/upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="myimage">
    <button type="submit">Загрузить</button><br><br>
</form>
<?php
foreach ($imgList->getImgList() as $imgName) { ?>
    <a href="/images <?php echo '/' . $imgName ?>"><img src="/images/<?php echo $imgName; ?>" height="200"></a>
<?php } ?>
</body>
</html>