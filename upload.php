<?php
session_start();
//var_dump($_FILES);
$formName = 'myimage';
$fileSize = 5 * (2 ** 20) ; //размер файла 5 мегабат. Значение (int)5 можно поменять "по вкусу"

if (isset($_FILES[$formName])) {
    if (0 == $_FILES[$formName]['error'] &&
        ($_FILES[$formName]['type'] == 'image/jpeg' || $_FILES[$formName]['type'] == 'image/png') &&
        $_FILES[$formName]['size'] <=$fileSize) {
        move_uploaded_file($_FILES[$formName]['tmp_name'], __DIR__ . '/images/' . $_FILES['myimage']['name']);
        header('Location: http://php1.local/');
    }
    else {
        echo 'Error uploading image!';
        ?><br> <a href="/index.php"><< НАЗАД</a> <?php
    }
}

