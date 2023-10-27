<?php
session_start();
require_once('db.php');

$login = $_POST['login'];
$pass = $_POST['pass'];

if (empty($login) || empty($pass)) {
    $_SESSION['message-log'] = 'Заполните все поля!';
    header('Location:index.php');
} else {
    //Xеширование пароля
    $pass = md5($pass . "fd");
    $check_users = mysqli_query($conn, "SELECT * FROM `users` WHERE `login`='$login' and `pass` = '$pass'");
    if(mysqli_num_rows($check_users) == 1) {

        $user = mysqli_fetch_assoc($check_users);

        $_SESSION["user"] = [
          "id" =>  $user["id"],
          "username"=> $user["username"],
          "email"=> $user["email"],
          "pass"=> $user["pass"]
        ];
        header("Location:acount/index.php");
    }else {
        $_SESSION['message-log'] = 'Нет такого пользователя!';
        header('Location:index.php');
    }

    // if ($result->num_rows > 0) {
    //     $user = 
    //     $_SESION['user'] = [
    //         "id"=>user
    //     ] 
    //} 
}
