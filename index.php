<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрационная форма</title>
    <link rel="stylesheet" href="css/null.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div class="container">
        <button class="log_up" id="open-modal-btn">Вход/Регистрация</button>

    </div>


    <!-- Модальное окно -->
    <div class="modal" id="log-modal">
        <div class="modal_box">
            <button class="exit-modal-btn" id="close-my-modal-btn">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="mdi-window-close" width="45" height="45" viewBox="0 0 24 24" fill="#000">
                    <path d="M13.46,12L19,17.54V19H17.54L12,13.46L6.46,19H5V17.54L10.54,12L5,6.46V5H6.46L12,10.54L17.54,5H19V6.46L13.46,12Z" />
                </svg>
            </button>
            <h2 class="name_log-up"><span>Вход</span><span>Регистрация</span></h2>
            <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
            <label for="reg-log"></label>
            <div class="card-3d-wrap mx-auto">
                <?php
                if ($_COOKIE['useret'] == '') :
                ?>
                    <div class="card-3d-wrapper">
                        <div class="card-front">
                            <div class="center-wrap">
                                <div class="section text-center">
                                    <form action="login.php" method="post" class="form2">
                                        <div class="form-group"><input type="text" placeholder="Логин" name="login" class="login"></div>
                                        <div class="form-group"> <input type="text" placeholder="Пароль" name="pass" class="pass"></div>

                                        <button type="submit" class="btn-reset log-btn">Войти</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-back">
                            <div class="center-wrap">
                                <div class="section text-center">
                                    <form action="register.php" method="post">
                                        <div class="form-group"><input type="text" placeholder="Логин" name="login" class="login"><br></div>
                                        <div class="form-group"><input type="text" placeholder="Пароль" name="pass" class="pass"><br></div>
                                        <div class="form-group"><input type="text" placeholder="Повторите пароль" name="repeatpass" class="repeatpass"><br></div>
                                        <div class="form-group"><input type="text" placeholder="email" name="email" class="email"><br></div>
                                        <button type="submit" class="reg">Зарегистрироваться</button>
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

        <script src="js/log_Up.js"></script>

</body>

</html>