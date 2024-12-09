<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="icon" href="img/favicon.png" type="image/x-icon"> 
    <link rel="stylesheet" href="authorize.css"> 
</head>
<body>

<div class="container">
    <h2>Регистрация</h2>
    <form action="./register.php" method="post">
        <div class="form-elements">
            <input type="text" placeholder="ФИО" name="login" required>
            <input type="email" placeholder="Электронная почта" name="email" required>
        </div>
        <div class="form-elements">
            <input type="password" placeholder="Пароль" name="password" required>
            <input type="password" placeholder="Повторить пароль" name="repeatpassword" required>
        </div>
        <button type="submit">Зарегистрироваться</button>
    </form>

    <h2>Авторизация</h2>
    <form action="./login.php" method="post">
        <div class="form-elements">
            <input type="text" placeholder="ФИО" name="login" required>
            <input type="password" placeholder="Пароль" name="password" required>
        </div>
        <button type="submit">Войти</button>
    </form>
</div>

</body>
</html>
