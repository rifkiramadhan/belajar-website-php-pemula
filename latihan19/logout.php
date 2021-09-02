<?php
    // Menjalankan session start
    session_start();

    // Meyakinkan untuk menghilangkan session
    $_SESSION = [];

    // Menghilangkan session
    session_unset();

    // Menghapus session
    session_destroy();

    // Menghapus cookie dengan cara set waktu yang sudah lewat 1 jam
    setcookie('id', '', time() - 3600);
    setcookie('key', '', time() - 3600);


    header("Location: login.php");
    exit;

?>