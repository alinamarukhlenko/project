<?php
require_once('db.php');

$login = $_POST['login'];
$password = $_POST['password'];

if (empty($login) || empty($password)) {
    echo "Заполните поля login или password";
} else {
    
    $stmt = $conn->prepare("SELECT * FROM users WHERE login = ?");
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if (password_verify($password, $row['password'])) {
                echo "Добро пожаловать " . $row['login'];
                header('Location: about.html');
                exit();
            } else {
                echo "Неверный пароль";
            }
        }
    } else {
        echo "Такого пользователя не существует";
    }

    $stmt->close(); 
}
?>
