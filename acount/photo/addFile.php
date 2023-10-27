<?php
session_start();

require_once('db.php');

if (isset($_POST['upphoto'])) {
    $img_type = substr($_FILES['photo-file']['type'], 0, 5);
    if (!empty($_FILES['photo-file']['tmp_name']) and $img_type == 'image') {
        $img = addslashes(file_get_contents($_FILES['photo-file']['tmp_name']));
        $conn->query("INSERT INTO `photos`(`file`) VALUES('$img')"); 
    } else if (!empty($_FILES['photo-file']['tmp_name'])){
        $img = addslashes(file_get_contents($_FILES['photo-file']['tmp_name']));
        $conn->query("INSERT INTO `photos`(`file`) VALUES('$img')");
    }
     else {
        $_SESSION['message-photo'] = 'Файл не выбрано';
        header('Location:../profil.php');
    }
}

header('Location:../profil.php');
