<?php
    setcookie('useret', $row['login'], time() - 3600, "/");
    header("Location: /");
?>