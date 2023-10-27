<?php
session_start();
require_once('photo/db.php');

if (!$_SESSION['user']) {
    header('Location:acount/profil.php');
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Название сайта</title>
    <link rel="stylesheet" href="css/null.css">
    <link rel="stylesheet" href="css/profil.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="content-cite">
        <div class="left-cite">
            <a href="index.php" class="logo-img">
                <img src="../img/svg/logo.svg" alt="логотип">
            </a>
            <div class="albom-profil">
                <div class="albom">
                    <a href="days.php" class="albom-link">
                        <img class="bag" src="../img/svg/bag.svg">
                        <img src="../img/albom/1.png" alt="превью" class="albom-img">
                    </a>
                </div>
                <div class="albom">
                    <a href="#" class="albom-link">
                        <img class="bag" src="../img/svg/bag.svg">
                        <img src="../img/albom/2.png" alt="превью" class="albom-img">
                    </a>
                </div>
                <div class="albom">
                    <a href="#" class="albom-link">
                        <img class="bag" src="../img/svg/bag.svg">
                        <img src="../img/albom/3.png" alt="превью" class="albom-img">
                    </a>
                </div>
                <div class="albom">
                    <a href="#" class="albom-link">
                        <img class="bag" src="../img/svg/bag.svg">
                        <img src="../img/albom/4.png" alt="превью" class="albom-img">
                    </a>
                </div>
                <div class="albom">
                    <a href="#" class="albom-link">
                        <img class="bag" src="../img/svg/bag.svg">
                        <img src="../img/albom/5.png" alt="превью" class="albom-img">
                    </a>
                </div>
                <div class="albom">
                    <a href="#" class="albom-link">
                        <img class="bag" src="../img/svg/bag.svg">
                        <img src="../img/albom/6.png" alt="превью" class="albom-img">
                    </a>
                </div>
                <div class="button-left">
                    <a href="#" id="albom-max" class="albom-max">Все альбомы</a>
                    <a class="exit" id="exit-btn" href="../logout.php">Выход</a>
                </div>
            </div>
        </div>
        <div class="container">
            <input type="text" class="search" id="search-in" placeholder="Поиск">
            <div class="right-cite">
                <header class="header">
                    <div class="logo">Alliance Logistic</div>
                    <div class="buttons-header">
                        <form action="photo/addFile.php" method="POST" id="fo" name="upphoto" enctype="multipart/form-data" class="form-photo">
                            <input type="file" class="smc-i" id="scm" name="photo-file">
                            <label for="scm">
                                <div class="smc""><img src=" ../img/scm.png">
                                </div>
                                <input type="submit" class="scms" id="sub-s" name="upphoto" value="Добавить фото на страницу">
                            </label>
                            <?php
                            if ($_SESSION['message-photo']) {
                                echo '<p class="photo-error" id = "msg-pho" > ' . $_SESSION['message-photo'] . ' </p>';
                            }
                            unset($_SESSION['message-photo']);
                            ?>
                        </form>
                        <button class="subscribe" id="subscribe">
                            <img src="../img/sub.png" alt="подписаться" width="45" height="27">
                        </button>
                        <button class="egs" id="egs">
                            <img src="../img/egs.png" alt="глаз закрытый" width="52" height="47">
                        </button>
                        <button class="menu" id="menu">
                            <img src="../img/menu.png" alt="меню" width="45" height="32">
                        </button>
                    </div>
                </header>
                <div class="profil-photo">
                    <!-- <div class="pro-fo">
                        <img src="" alt="" class="photo-pro">
                    </div> -->
                    <div class="albom-list">
                        <?php
                        $qwery = $conn->query("SELECT * FROM `photos` ORDER BY id DESC");
                        while ($row = $qwery->fetch_assoc()) {
                            $show_img = base64_encode($row['file']) ?>
                            <button class="img-vid">
                                <img src="data:../file/jpeg;base64, <?php echo $show_img ?>" class="img-photo-bd" alt="возникли неполадки">
                            </button>
                            <!-- <div class="video-vid">
                                <video controls autoplay="none">
                                    <source src="data:../file/mp4;base64, <?php echo $show_img ?>" type='video/mp4'>
                                </video>
                            </div> -->
                        <?php } ?>
                    </div>
                </div>
                <section class="panel">
                    <a href="index.php" class="house-link"><img src="../img/svg/house.svg" alt="главная" class="house-panel"></a>
                    <img src="../img/svg/search.svg" alt="поиск" class="search-panel" id="search">
                    <a href="profil.php"><img src="../img/svg/profil.svg" alt="профиль" class="profile-panel"></a>
                </section>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>

</html>