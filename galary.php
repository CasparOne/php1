<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
$imgDir = '/images/';
$gh = '/image.php';
$imgList = ['42' => 'Hydrangeas.jpg', '43' => 'Jellyfish.jpg', '44' => 'Desert.jpg', '45' => 'Koala.jpg'];
?>
<body>
<h2>Галерея задание п. 2.</h2>
<table>
    <tr>
        <?php foreach ($imgList as $id => $imgNname) {
            ?>
            <td>
            <a href="<?php echo $gh . '?' . 'id=' . $id ?>">
                <img src=" <?php echo $imgDir . $imgNname ?>" height="25%" align="center"></a>
            </td>
            <?php
        }
        ?>
    </tr>
</table>
</body>
</html>