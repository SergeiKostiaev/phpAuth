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
<!--Форма регистрации-->
    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label>ФИО</label>
        <input type="text" name="full_name" id="NameInpt" placeholder="Введите свое полное имя">
        <label>Логин</label>
        <input type="text" name="login" id="loginInpt" placeholder="Введите свой Login">

        <label>E-mail</label>
        <input type="email" name="email" id="emailInpt" placeholder="Введите свой E-mail">

        <label>Изоображение профиля</label>
        <input type="file" name="avatar" id="imageInpt">

        <label>Пароль</label>
        <input type="password" name="password" id="passwordInpt" placeholder="Введите свой Password">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" id="passwordInpt" placeholder="Введите свой Password еще раз">
        <button type="submit">Зарегистрироваться</button>
        <p>
            У Вас уже есть аккаунт? - <a href="/">Авторизация</a>
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