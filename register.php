<?php

session_start();
require_once('db.php');


$login = trim($_POST['login']);
$pass = trim($_POST['pass']);
$repeatpass = trim($_POST['repeatpass']);
$email = trim($_POST['email']);

$log = mysqli_query($conn, "SELECT * FROM `users` WHERE `login`='$login'");
$mai = mysqli_query($conn, "SELECT * FROM `users` WHERE `email`='$email'");


if (empty($login) || empty($pass) || empty($repeatpass) || empty($email)) {
    $_SESSION['message'] = 'Заполните все поля';
    header('Location:index.php');
} else { {
    if (mysqli_num_rows($log)==1) {
        $_SESSION['message'] = 'Такой логин уже существует';
        header('Location:index.php');
        
    }else if ($pass != $repeatpass) {
            $_SESSION['message'] = 'Пароли не совпадают';
            header('Location:index.php');
        } else if (strlen($pass) < 6) {
            $_SESSION['message'] = 'Пароль должен быть больше 5 символов';
            header('Location:index.php');
        } else if (mysqli_num_rows($mai)==1){
            $_SESSION['message'] = 'К почте уже привязан аккаунт';
            header('Location:index.php');
        }
        else {
            //хеширование пароля
            $pass = md5($pass . "fd");
            $sql = "INSERT INTO `users` (login,pass,email) VALUES ('$login', '$pass', '$email')";
            if ($conn->query($sql) === TRUE) {
                $_SESSION['message-log'] = 'Успешная регистрация';
                header('Location:index.php');
            } else {
                echo "Ошибка: " . $conn->error;
            }
        }
    }
}
