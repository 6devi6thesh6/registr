<?php
session_start();
require_once('photo/db.php');

if (!$_SESSION['user']) {
    header('Location:acount/profil.php');
}

$result = mysqli_query($conn, "SELECT `categories` FROM `Alboms`");
$nameAl =  mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Название сайта</title>
    <link rel="stylesheet" href="css/null.css">
    <link rel="stylesheet" href="css/profil.css">
    <link rel="stylesheet" href="css/new-alb.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container" id="container-vid">
        <header class="header">
            <div class="logo">Alliance Logistic</div>
            <div class="buttons-header">
                <button class="albom-new" id="albom-new">
                    <img src="img/svg/album.svg" style="background-color: inherit;" alt="Добавить альбом" width="43" height="45">
                </button>
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
        <h2 class="name-albom">

        </h2>
    </div>

    <!-- Модалка -->
    <div class="modal" id="log-modal">
        <div class="modal_box">
            <button class="exit-modal-btn" id="close-my-modal-btn">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="mdi-window-close" width="45" height="45" viewBox="0 0 24 24" fill="#000">
                    <path d="M13.46,12L19,17.54V19H17.54L12,13.46L6.46,19H5V17.54L10.54,12L5,6.46V5H6.46L12,10.54L17.54,5H19V6.46L13.46,12Z" />
                </svg>
            </button>
            <h2 class="titile-al">Создание нового альбома</h2>
            <form action="new-al.php" method="POST" id="new-alb-fo">
            <input type="text" id="al-cat" class="al-cat" value="">
                <select name="categor-al" id="al-ca" onchange="document.getElementById('al-cat').value= this.value">
                    <option value="1" class="categor-al">
                        <?php $result = mysqli_query($conn, "SELECT `categories` FROM `Alboms` WHERE id = '1'");
                        $nameAl =  mysqli_fetch_array($result);
                        echo $nameAl['categories'] ?>
                    </option>
                    <option value="2" class="categor-al">
                        <?php $result = mysqli_query($conn, "SELECT `categories` FROM `Alboms` WHERE id = '2'");
                        $nameAl =  mysqli_fetch_array($result);
                        echo $nameAl['categories'] ?>
                    </option>
                    <option value="3" class="categor-al">
                        <?php $result = mysqli_query($conn, "SELECT `categories` FROM `Alboms` WHERE id = '3'");
                        $nameAl =  mysqli_fetch_array($result);
                        echo $nameAl['categories'] ?>
                    </option>
                    <option value="4" class="categor-al">
                        <?php $result = mysqli_query($conn, "SELECT `categories` FROM `Alboms` WHERE id = '4'");
                        $nameAl =  mysqli_fetch_array($result);
                        echo $nameAl['categories'] ?>
                    </option>
                    <option value="5" class="categor-al">
                        <?php $result = mysqli_query($conn, "SELECT `categories` FROM `Alboms` WHERE id = '5'");
                        $nameAl =  mysqli_fetch_array($result);
                        echo $nameAl['categories'] ?>
                    </option>
                    <option value="6" class="categor-al">
                        <?php $result = mysqli_query($conn, "SELECT `categories` FROM `Alboms` WHERE id = '6'");
                        $nameAl =  mysqli_fetch_array($result);
                        echo $nameAl['categories'] ?>
                    </option>
                    <option value="7" class="categor-al">
                        <?php $result = mysqli_query($conn, "SELECT `categories` FROM `Alboms` WHERE id = '7'");
                        $nameAl =  mysqli_fetch_array($result);
                        echo $nameAl['categories'] ?>
                    </option>
                    <option value="8" class="categor-al">
                        <?php $result = mysqli_query($conn, "SELECT `categories` FROM `Alboms` WHERE id = '8'");
                        $nameAl =  mysqli_fetch_array($result);
                        echo $nameAl['categories'] ?>
                    </option>
                    <option value="9" class="categor-al">
                        <?php $result = mysqli_query($conn, "SELECT `categories` FROM `Alboms` WHERE id = '9'");
                        $nameAl =  mysqli_fetch_array($result);
                        echo $nameAl['categories'] ?>
                    </option>
                    <option value="10" class="categor-al">
                        <?php $result = mysqli_query($conn, "SELECT `categories` FROM `Alboms` WHERE id = '10'");
                        $nameAl =  mysqli_fetch_array($result);
                        echo $nameAl['categories'] ?>
                    </option>
                    <option value="11" class="categor-al">
                        <?php $result = mysqli_query($conn, "SELECT `categories` FROM `Alboms` WHERE id = '11'");
                        $nameAl =  mysqli_fetch_array($result);
                        echo $nameAl['categories'] ?>
                    </option>
                    <option value="12" class="categor-al">
                        <?php $result = mysqli_query($conn, "SELECT `categories` FROM `Alboms` WHERE id = '12'");
                        $nameAl =  mysqli_fetch_array($result);
                        echo $nameAl['categories'] ?>
                    </option>
                    <option value="13" class="categor-al">
                        <?php $result = mysqli_query($conn, "SELECT `categories` FROM `Alboms` WHERE id = '13'");
                        $nameAl =  mysqli_fetch_array($result);
                        echo $nameAl['categories'] ?>
                    </option>
                    <option value="14" class="categor-al">
                        <?php $result = mysqli_query($conn, "SELECT `categories` FROM `Alboms` WHERE id = '14'");
                        $nameAl =  mysqli_fetch_array($result);
                        echo $nameAl['categories'] ?>
                    </option>
                    <option value="15" class="categor-al">
                        <?php $result = mysqli_query($conn, "SELECT `categories` FROM `Alboms` WHERE id = '15'");
                        $nameAl =  mysqli_fetch_array($result);
                        echo $nameAl['categories'] ?>
                    </option>
                    <option value="16" class="categor-al">
                        <?php $result = mysqli_query($conn, "SELECT `categories` FROM `Alboms` WHERE id = '16'");
                        $nameAl =  mysqli_fetch_array($result);
                        echo $nameAl['categories'] ?>
                    </option>
                    <option value="17" class="categor-al">
                        <?php $result = mysqli_query($conn, "SELECT `categories` FROM `Alboms` WHERE id = '17'");
                        $nameAl =  mysqli_fetch_array($result);
                        echo $nameAl['categories'] ?>
                    </option>
                    <option value="18" class="categor-al">
                        <?php $result = mysqli_query($conn, "SELECT `categories` FROM `Alboms` WHERE id = '18'");
                        $nameAl =  mysqli_fetch_array($result);
                        echo $nameAl['categories'] ?>
                    </option>
                    <option value="19" class="categor-al">
                        <?php $result = mysqli_query($conn, "SELECT `categories` FROM `Alboms` WHERE id = '19'");
                        $nameAl =  mysqli_fetch_array($result);
                        echo $nameAl['categories'] ?>
                    </option>
                    <option value="20" class="categor-al">
                        <?php $result = mysqli_query($conn, "SELECT `categories` FROM `Alboms` WHERE id = '20'");
                        $nameAl =  mysqli_fetch_array($result);
                        echo $nameAl['categories'] ?>
                    </option>
                </select>
            </form>
        </div>
    </div>
    <script src="js/log_Up.js"></script>
    <script src="js/new.albun.js"></script>
</body>

</html>