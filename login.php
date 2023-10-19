<?php
require_once('db.php');

$login = $_POST['login'];
$pass = $_POST['pass'];

if (empty($login) || empty($pass)) {
    echo "Заполните все поля";
} else {
    //Расхеширование пароля
    $pass = md5($pass . "fd");
    $sql = "SELECT * FROM `users` WHERE login = '$login' AND pass = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Добро пожаловать " . $row['login'];
            setcookie('useret', $row['login'], time() + 3600, "/");
            header('Location: /');
        }
    } else {
        echo "Нет такого пользователя!";
    }
}
