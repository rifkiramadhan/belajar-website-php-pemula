<?php
    // Cek apakah tidak ada data di $_GET

    // Apakah $_GET["nama"] sudah pernah dibuat ?
    if( !isset($_GET["nama"]) || 
        !isset($_GET["nrp"]) || 
        !isset($_GET["email"]) ||
        !isset($_GET["jurusan"]) ||
        !isset($_GET["gambar"])) {

        // Maka aakan meredirect ke halaman latihan2.php / halaman semula
        header("Location: latihan2.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>

    <ul>
        <li>
            <img width="100" src="img/<?= $_GET["gambar"]; ?>" alt="Foto">
        </li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nrp"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
    </ul>
    <a href="latihan2.php">Kembali</a>
    
</body>
</html>