<?php
    session_start();
    unset($_SESSION['sesi']);
    unset($_SESSION['id_pemilik']);
    session_destroy();
    header("Location:index.php");
?>