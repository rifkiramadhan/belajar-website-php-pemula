<?php
    // Menjalankan session start
    session_start();

    // Meyakinkan untuk menghilangkan session
    $_SESSION = [];

    // Menghilangkan session
    session_unset();

    // Menghapus session
    session_destroy();

    header("Location: login.php");
    exit;

?>