<?php
    // Menyiapkan data yang akan disimpan ke dalam tabel
    // Menghubungkan functions ke dalam file
    require 'functions.php';

    // Menjalankan session
    session_start();

    // Jika tidak ada session login
    if( !isset($_SESSION["login"]) ) {
        // Maka keluarkan user ke halaman login
        header("Location: login.php");
        exit;
    }

    // Pagination Untuk menentukan halaman yang tampil tiap slide

    // Konfigurasi Pagination
    $jumlahDataPerHalaman = 2;
    // $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
    // $jumlahData = mysqli_num_rows($result);
    // var_dump($jumlahData);

    $jumlahData = count(query("SELECT * FROM mahasiswa"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
    $awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;

    // Jika halamannya ada isinya
    // if( isset($_GET["halaman"]) ) {
    //     // Maka halaman aktifnya diambil dari URL
    //     $halamanAktif = $_GET["halaman"];
    // } else {
    //     $halamanAktif = 1;
    // }
    // var_dump($halamanAktif);

    


    // Query data mahasiswa disimpan ke dalam variabel mahasiswa dan bentuknya array
    // ASC / Ascending (Membesar)
    // DESC / Descending (Mengecil)
    $mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

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
        <input type="text" name="keyword" size="40" placeholder="Masukkan keyword pencarian..." autofocus autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>
    <br><br>

    <!-- Panah Navigasi Leter Then / Laquo -->
    <?php if( $halamanAktif > 1 ) : ?>
        <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
    <?php endif; ?>

    <!-- Navigasi -->
    <?php for( $i = 1; $i <= $jumlahHalaman; $i++ ) : ?>

        <!-- Jika link nya aktif maka akan dicetak tebal -->
        <?php if( $i == $halamanAktif ) : ?>
            <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <!-- Panah Navigasi Gretter Then / Raquo -->
    <?php if( $halamanAktif < $jumlahHalaman ) : ?>
        <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
    <?php endif; ?>

    <br>
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

</body>
</html>