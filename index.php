<?php

require_once 'core.php';

if (isAuthorized()) {
    location('admin.php');
}

$errors = [];
if (!empty($_POST['enterAsUser'])) {
    if (login($_POST['login'], $_POST['password'])) {
        location('admin.php');
    } else {
        $errors[] = 'Неверный логин или пароль';
    }
}

if (!empty($_POST['enterAsQuest'])) {
    $_SESSION['quest']['username'] = str_replace(' ', '', $_POST['username']);
    location('admin.php');
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

    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?php echo $error ?></li>
        <?php endforeach; ?>
    </ul>

    <h1>Авторизуйтесь</h1>
    <form method="POST">
        <label>Логин <input type="text" name="login" id="login"></label>
        <label>Пароль <input type="text" name="password" id="password"></label>
        <input type="submit" value="Войти" name="enterAsUser">
    </form>

    <h2>Или войдите как гость</h2>
    <form method="POST">
        <label>Введите ваше имя: <input type="text" name="username" id="username" required></label>
        <input type="submit" name="enterAsQuest">
    </form>

</body>
</html>