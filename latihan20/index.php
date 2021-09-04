<?php
    // Menjalankan session
    session_start();

    // Jika tidak ada session login
    if( !isset($_SESSION["login"]) ) {
        // Maka keluarkan user ke halaman login
        header("Location: login.php");
        exit;
    }

    // Menyiapkan data yang akan disimpan ke dalam tabel
    // Menghubungkan functions ke dalam file
    require 'functions.php';

    // Query data mahasiswa disimpan ke dalam variabel mahasiswa dan bentuknya array
    // ASC / Ascending (Membesar)
    // DESC / Descending (Mengecil)
    $mahasiswa = query("SELECT * FROM mahasiswa");

    // Jika tombol cari ditekan
    if( isset($_POST["cari"]) ) {

        // Maka jalankan pencarian keyword
        $mahasiswa = cari($_POST["keyword"]);
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
    <a href="logout.php">Keluar</a>

    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" placeholder="Masukkan keyword pencarian..." autofocus autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari</button>
    </form>
    <br>

    <div id="container">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>NRP</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>
    
            <?php $i = 1; ?>
    
            <!-- Menggunakan foreach utuk looping array untuk menampilkan data -->
            <?php foreach( $mahasiswa as $row ) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> ||
                        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin ?'); " >Hapus</a>
                    </td>
                    <td>
                        <img width="50" src="img/img-data/<?= $row["gambar"]; ?>" alt="">
                    </td>
                    <td><?= $row["nrp"]; ?></td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["email"]; ?></td>
                    <td><?= $row["jurusan"]; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>

    <!-- My JavaScript -->
    <script src="js/script.js"></script>
</body>
</html>