<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log-in</title>
</head>
<body>
<center>
    <h1>Добро пожаловать в галерею</h1>
    <p>Что бы авторизироваться - введите логин/пароль</p>
</center>
<div align="center">
    <form action="login.php" method="post">
        Login:<input name="login"><br><br>
        Password:<input name="password"><br><br>
        <button name="submit" type="submit">Войти</button>
        <br>
        <h3><?php echo $errMsg ?></h3>
    </form>
</div>
</body>
</html>