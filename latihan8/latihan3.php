<?php 
    // Membuat array data mahasiswa
    // Jika menggunakan teknik array numerik maka urutannya tidak boleh salah karena index nya adalah nol / numeric
    // $mahasiswa = [
    //     ["Rifki Ramadhan", "1234567", "Teknik Informatika", "riifkiramadhan2@gmail.com"],
    //     ["Rayani Putri", "123123123", "Teknik Informatika", "rayaniputri@gmail.com"]
    // ];

    // Array Assosiative
    // Array yang index nya itu string yang kita buat sendiri
    $mahasiswa = [
        [
            "nama" => "Rifki Ramadhan", 
            "nrp" => "0512345",
            "email" => "riifkiramadhan2@gmail.com",
            "jurusan" => "Teknik informatika",
            "gambar" => "1.jpg"
        ],

        [
            "nama" => "Rayani Putri", 
            "nrp" => "06123456",
            "email" => "rayaniputri@gmail.com",
            "jurusan" => "Teknik informatika",
            "tugas" => [90, 80, 100],
            "gambar" => "2.jpg"
        ]
    ];  
    // Memanggil dengan mencampurkan array numerik dan assosiative
    // echo $mahasiswa[1]["tugas"][1];
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <!-- Membuat arrray menggunakan array assosiative -->
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" alt="Gambar">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
    
</body>
</html>