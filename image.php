<?php
$id = $_GET['id'];

switch ($id) {
    case '42':
        $img = 'Desert.jpg';
        break;
    case '43':
        $img = 'Hydrangeas.jpg';
        break;
    case '44':
        $img = 'Jellyfish.jpg';
        break;
    case '45':
        $img = 'Koala.jpg';
        break;
    default:
        $img = 'error.png';
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
<a href="/galary.php"><p><< BACK </p></a>
<br><br>
<?php echo '<img src=' . '"' .  '/' . $img .'">'?>

</body>
</html>
