<?php
foreach ($images->getImgFileName() as $img) {
    $imgsArr[] = $img->getImg();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Галерея - <?php echo $imgsArr[$id] ?></title>
</head>
<body>
<a href="/index.php">
    <h4><p><< BACK</p></h4>
</a>
<img src="/images/<?php echo $imgsArr[$id] ?>">
</body>
</html>
