<?php
$id = $_GET['id'];
$gh = '/image.php';
$imgList = ['42' => 'Hydrangeas.jpg', '43' => 'Jellyfish.jpg', '44' => 'Desert.jpg', '45' => 'Koala.jpg'];
/** Если значение индекса 'id' соответствует одному из значений ключа в массиве $imgList[] */
if (array_key_exists($id, $imgList)) {
    $img = $imgList[$id];
} /** ИНАЧЕ выводим ошибку. Данная проверка введена сюда, что бы корректно обработать значение параметра id
 * передаваемого методом GET*/
else {
    $img = '400_error.png';
    var_dump($img);
}
/** Еще один вариант, но он в данном случае менее удобен.
* switch ($id) {
    * case '42':
 * $img = 'Hydrangeas.jpg';
 * break;
 * case '43':
 * $img = 'Jellyfish.jpg';
        * break;
 * case '44':
 * $img = 'Desert.jpg';
        * break;
    * case '45':
        * $img = 'Koala.jpg';
 * break;
 * default:
 * $img = '400_error.png';
* }
*/
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
<?php echo '<img src=' . '"' .  '/images/' . $img .'">'?>
</body>
</html>
