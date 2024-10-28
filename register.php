<?php
require_once('db.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $repeatpassword = $_POST['repeatpassword'];
    $email = $_POST['email'];

    if (empty($login) || empty($password) || empty($repeatpassword) || empty($email)) {
        echo "Заполните все поля";
    } else {
        if ($password != $repeatpassword) {
            echo "Пароли не совпадают";
        } else {
            // Подготовленный запрос для безопасности
            $stmt = $conn->prepare("INSERT INTO users (login, password, email) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $login, $password, $email);
            
            if ($stmt->execute() === TRUE) {
                echo "Вы успешно зарегистрированы";
            } else {
                echo "Ошибка: " . $stmt->error;
            }
            
            $stmt->close();
        }
    }
}
?>