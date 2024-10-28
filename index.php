<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="./register.php" method="post">
        <input type="text" placeholder="login" name="login" required>
        <input type="password" placeholder="password" name="password" required>
        <input type="password" placeholder="repeat password" name="repeatpassword" required>
        <input type="email" placeholder="email" name="email" required>
        <button type="submit">Зарегистрироваться</button>
    </form>

    <form action="./login.php" method="post">
        <input type="text" placeholder="login" name="login" required>
        <input type="password" placeholder="password" name="password" required>
        <button type="submit">Войти</button>
    </form>

</body>
</html>