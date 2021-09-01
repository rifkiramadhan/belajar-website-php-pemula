<?php 
    // Cara ini tidak modular / Tidak rapih

    // Membuat koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    // Mengambil data dari tabel mahasiswa / query data mahasiswa
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
    // var_dump($result);
    // if( !$result ) {
    //     echo mysqli_error($conn);
    // }

    // Mengambil data (fetch) mahasiswa dari object result
    // 1. mysqli_fetch_row()
    // Mengembalikan array numerik
    // $mhs = mysqli_fetch_row($result);
    // var_dump($mhs);

    // 2. mysqli_fetch_assoc()
    // Mengembalikan aray associative
    // mhs = mysqli_fetch_assoc($result);
    // var_dump($mhs["nama"]);

    // 3. mysqli_fetch_array()
    // Mengembalikan keduanya
    // $mhs = mysqli_fetch_array($result);
    // var_dump($mhs[0]);

    // 4. mysqli_fetch_object()
    // Mengembalikan object
    // $mhs = mysqli_fetch_object($result);
    // var_dump($mhs->nama);

    // Melakukan perulangan untuk mengecek data yang masuk
    // while($mhs = mysqli_fetch_assoc($result)) {
    //     var_dump($mhs);
    // }

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
    
    <h1>Daftar Mahasiswa</h1>

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
        <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="">Ubah</a> ||
                    <a href="">Hapu</a>
                </td>
                <td>
                    <img width="50" src="img/<?= $row["gambar"]; ?>" alt="">
                </td>
                <td><?= $row["nrp"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endwhile; ?>
    </table>

</body>
</html>