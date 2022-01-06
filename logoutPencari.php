<?php
    session_start();
    unset($_SESSION['sesi']);
    unset($_SESSION['id_pencari']);
    session_destroy();
    header("Location:index.php");
?>