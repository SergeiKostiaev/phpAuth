<?php

session_start();
if(!$_SESSION['user']) {
    header('Location: index.php');
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
<!--Профиль-->

    <form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="100" alt="avatar" style="margin: 0 auto">
        <h2><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <a style="margin-top: 50px" href="vendor/logout.php" class="logout">Выйти</a>
    </form>

</body>
</html>