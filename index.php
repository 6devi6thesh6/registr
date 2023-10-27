<?php
session_start();

if ($_SESSION['user']) {
    header('Location:acount/index.php');
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрационная форма</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500&family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/null.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/media-reg.css">
</head>

<body>

    <div class="container" id="container-vid">
        <div class="top-header">
            <input type="text" class="search" id="search-in" placeholder="Поиск">
        </div>
        <section class="alboms">
            <div class="albom">
                <a href="#" class="albom-link">
                    <img class="bag" src="img/svg/bag.svg">
                    <img src="img/albom/16.png" alt="превью" class="albom-img">
                </a>
                <h3 class="title-albom-link">Элекро-я музыка</h3>
            </div>
            <div class="albom">
                <a href="#" class="albom-link">
                    <img class="bag" src="img/svg/bag.svg">
                    <img src="img/albom/17.png" alt="превью" class="albom-img">
                </a>
                <h3 class="title-albom-link">Японские <span style="margin: 0; padding: 0; font-size: 16px;">машины</span></h3>
            </div>
            <div class="albom">
                <a href="#" class="albom-link">
                    <img class="bag" src="img/svg/bag.svg">
                    <img src="img/albom/18.png" alt="превью" class="albom-img">
                </a>
                <h3 class="title-albom-link">Цитаты</h3>
            </div>
            <div class="albom">
                <a href="#" class="albom-link">
                    <img class="bag" src="img/svg/bag.svg">
                    <img src="img/albom/19.png" alt="превью" class="albom-img">
                </a>
                <h3 class="title-albom-link">Нью-Йорк</h3>
            </div>
            <div class="albom">
                <a href="#" class="albom-link">
                    <img class="bag" src="img/svg/bag.svg">
                    <img src="img/albom/20.png" alt="превью" class="albom-img">
                </a>
                <h3 class="title-albom-link">Манга</h3>
            </div>
            <div class="albom">
                <a href="#" class="albom-link">
                    <img class="bag" src="img/svg/bag.svg">
                    <img src="img/albom/1.png" alt="превью" class="albom-img">
                </a>
                <h3 class="title-albom-link">День мечты</h3>
            </div>
            <div class="albom">
                <a href="#" class="albom-link">
                    <img class="bag" src="img/svg/bag.svg">
                    <img src="img/albom/2.png" alt="превью" class="albom-img">
                </a>
                <h3 class="title-albom-link">Стрит Арты</h3>
            </div>
            <div class="albom">
                <a href="#" class="albom-link">
                    <img class="bag" src="img/svg/bag.svg">
                    <img src="img/albom/3.png" alt="превью" class="albom-img">
                </a>
                <h3 class="title-albom-link">Фотосессия</h3>
            </div>
            <div class="albom">
                <a href="#" class="albom-link">
                    <img class="bag" src="img/svg/bag.svg">
                    <img src="img/albom/4.png" alt="превью" class="albom-img">
                </a>
                <h3 class="title-albom-link">Мотивация</h3>
            </div>
            <div class="albom">
                <a href="#" class="albom-link">
                    <img class="bag" src="img/svg/bag.svg">
                    <img src="img/albom/5.png" alt="превью" class="albom-img">
                </a>
                <h3 class="title-albom-link">Самоучеба</h3>
            </div>
            <div class="albom">
                <a href="#" class="albom-link">
                    <img class="bag" src="img/svg/bag.svg">
                    <img src="img/albom/6.png" alt="превью" class="albom-img">
                </a>
                <h3 class="title-albom-link">Архитектура</h3>
            </div>
            <div class="albom">
                <a href="#" class="albom-link">
                    <img class="bag" src="img/svg/bag.svg">
                    <img src="img/albom/7.png" alt="превью" class="albom-img">
                </a>
                <h3 class="title-albom-link">Обэды</h3>
            </div>
            <div class="albom">
                <a href="#" class="albom-link">
                    <img class="bag" src="img/svg/bag.svg">
                    <img src="img/albom/8.png" alt="превью" class="albom-img">
                </a>
                <h3 class="title-albom-link">Художественные арты</h3>
            </div>
            <div class="albom">
                <a href="#" class="albom-link">
                    <img class="bag" src="img/svg/bag.svg">
                    <img src="img/albom/9.png" alt="превью" class="albom-img">
                </a>
                <h3 class="title-albom-link">Природа</h3>
            </div>
            <div class="albom">
                <a href="#" class="albom-link">
                    <img class="bag" src="img/svg/bag.svg">
                    <img src="img/albom/10.png" alt="превью" class="albom-img">
                </a>
                <h3 class="title-albom-link">Дорогое хобби</h3>
            </div>
            <div class="albom">
                <a href="#" class="albom-link">
                    <img class="bag" src="img/svg/bag.svg">
                    <img src="img/albom/11.png" alt="превью" class="albom-img">
                </a>
                <h3 class="title-albom-link">Дорогое хобби 2</h3>
            </div>
            <div class="albom">
                <a href="#" class="albom-link">
                    <img class="bag" src="img/svg/bag.svg">
                    <img src="img/albom/12.png" alt="превью" class="albom-img">
                </a>
                <h3 class="title-albom-link">Японская лит-ра</h3>
            </div>
            <div class="albom">
                <a href="#" class="albom-link">
                    <img class="bag" src="img/svg/bag.svg">
                    <img src="img/albom/13.png" alt="превью" class="albom-img">
                </a>
                <h3 class="title-albom-link">Дизайн дома</h3>
            </div>
            <div class="albom">
                <a href="#" class="albom-link">
                    <img class="bag" src="img/svg/bag.svg">
                    <img src="img/albom/14.png" alt="превью" class="albom-img">
                </a>
                <h3 class="title-albom-link">Гараж</h3>
            </div>
            <div class="albom">
                <a href="#" class="albom-link">
                    <img class="bag" src="img/svg/bag.svg">
                    <img src="img/albom/15.png" alt="превью" class="albom-img">
                </a>
                <h3 class="title-albom-link">Форумы</h3>
            </div>
        </section>
        <button class="glav">Главная</button>
        <section class="panel">
            <a href="index.php" class="house-link"><img src="img/svg/house.svg" alt="главная" class="house-panel"></a>
            <img src="img/svg/search.svg" alt="поиск" class="search-panel" id="search">
            <button class="profile-link" id="open-modal-btn"><img src="img/svg/profil.svg" alt="профиль" class="profile-panel"></button>
        </section>
    </div>


    <!-- Модальное окно -->
    <div class="modal" id="log-modal">
        <div class="modal_box">
            <button class="exit-modal-btn" id="close-my-modal-btn">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="mdi-window-close" width="45" height="45" viewBox="0 0 24 24" fill="#000">
                    <path d="M13.46,12L19,17.54V19H17.54L12,13.46L6.46,19H5V17.54L10.54,12L5,6.46V5H6.46L12,10.54L17.54,5H19V6.46L13.46,12Z" />
                </svg>
            </button>
            <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
            <label for="reg-log" id="in-up"><span class="in-up" id="t-in-up"></span></label>
            <div class="card-3d-wrap mx-auto">
                <?php
                if ($_COOKIE['useret'] == '') :
                ?>
                    <div class="card-3d-wrapper">
                        <div class="card-front">
                            <div class="center-wrap">
                                <h2 class="vhod" id="vhod">Вход</h2>
                                <div class="section text-center">
                                    <form action="login.php" method="post" class="form2">
                                        <div class="form-group"><input type="text" placeholder="Логин" name="login" class="login"></div>
                                        <div class="form-group"> <input type="text" placeholder="Пароль" name="pass" class="pass"></div>
                                        <button type="submit" class="btn-reset log-btn">Войти</button>
                                        <?php
                                        if ($_SESSION['message-log']) {
                                            echo '<p class="msg" id = "msg-log" > ' . $_SESSION['message-log'] . ' </p>';
                                        }
                                        unset($_SESSION['message-log']);
                                        ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-back">
                            <div class="center-wrap">
                                <h2 class="reg-b">Регистрация</h2>
                                <div class="section text-center">
                                    <form action="register.php" method="post">
                                        <div class="form-group"><input type="text" placeholder="Логин" name="login" class="login"><br></div>
                                        <div class="form-group"><input type="text" placeholder="Пароль" name="pass" class="pass"><br></div>
                                        <div class="form-group"><input type="text" placeholder="Повторите пароль" name="repeatpass" class="repeatpass"><br></div>
                                        <div class="form-group"><input type="text" placeholder="email" name="email" class="email"><br></div>
                                        <button type="submit" class="btn-reset reg">Зарегистрироваться</button>
                                        <?php
                                        if ($_SESSION['message']) {
                                            echo '<p class="msg" id = "msg-pass" > ' . $_SESSION['message'] . ' </p>';
                                        }
                                        unset($_SESSION['message']);
                                        ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <a href="/exit.php">Выйти из профиля</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <script src="js/log_Up.js"></script>

</body>

</html>