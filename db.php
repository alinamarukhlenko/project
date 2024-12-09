<?php
$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
$dbname = "registerUser";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Соединение не установлено: " . mysqli_connect_error());
} else {
    echo "Успешно";
}
?>