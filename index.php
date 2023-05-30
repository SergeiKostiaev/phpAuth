<?php

session_start();

if(isset($_SESSION['user'])) {
    header('Location: ../profile.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Авторизация и регистрация</title>
</head>
<body>
<!--Форма авторизации-->
    <form action="vendor/signin.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" id="loginInpt" placeholder="Введите свой Login">
        <label>Пароль</label>
        <input type="password" name="password" id="passwordInpt" placeholder="Введите свой Password">
        <button type="submit">Войти</button>
        <p>
            У Вас нет аккаунта? - <a href="/registr.php">Зарегистрируйтесь</a>
        </p>
        <?php
        if(isset($_SESSION['message'])) {
            echo '<p class="message">'. $_SESSION['message'].'</p>';
        }
        unset($_SESSION['message']);

        ?>
    </form>
</body>
</html>