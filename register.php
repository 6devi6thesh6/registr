<?php

require_once('db.php');

$login = trim($_POST['login']);
$pass = trim($_POST['pass']);
$repeatpass = trim($_POST['repeatpass']);
$email = trim($_POST['email']);


if (empty($login) || empty($pass) || empty($repeatpass) || empty($email)) {
    echo "Заполните все поля";
} else { {
        if ($pass != $repeatpass) {
            echo "\nПароли не совпадают";
        } else {
            //хеширование пароля
            $pass = md5($pass . "fd");
            $sql = "INSERT INTO `users` (login,pass,email) VALUES ('$login', '$pass', '$email')";
            if ($conn->query($sql) === TRUE) {
                echo "Успешная регистрация";
            } else {
                echo "Ошибка: " . $conn->error;
            }
        }
    }
}
