<?php
    // Membuat array data mahasiswa
    // Jika menggunakan teknik array numerik maka urutannya tidak boleh salah karena index nya adalah nol / numeric
    $mahasiswa = [
        ["Rifki Ramadhan", "1234567", "Teknik Informatika", "riifkiramadhan2@gmail.com"],
        ["Rayani Putri", "1234567", "Teknik Informatika", "riifkiramadhan2@gmail.com"],
        ["Rina Sari Putri", "1234567", "Teknik Informatika", "riifkiramadhan2@gmail.com"],
        ["Tasya Adinda", "1234567", "Teknik Informatika", "riifkiramadhan2@gmail.com"],
        ["Vika", "1234567", "Teknik Informatika", "riifkiramadhan2@gmail.com"],
        ["Siti", "1234567", "Teknik Informatika", "riifkiramadhan2@gmail.com"]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <!-- Kode ini tidak disarankan --> 
    <ul>
        <?php foreach( $mahasiswa as $mhs ) : ?>
            <li><?= $mhs[0]; ?></li>
        <?php endforeach; ?>
        <?php echo "<hr>"; ?>
    </ul>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NRP : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>