<?php 
    // $_GET
    // $_GET["nama"] = "Rifki Ramadhan";
    // $_GET["nrp"] = "0512345";
    // var_dump($_GET);

    // Array Assosiative
    // Array yang index nya itu string yang kita buat sendiri
    $mahasiswa = [
        [
            "nama" => "Rifki Ramadhan", 
            "nrp" => "0512345",
            "email" => "riifkiramadhan2@gmail.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "1.jpg"
        ],

        [
            "nama" => "Rayani Putri", 
            "nrp" => "06123456",
            "email" => "rayaniputri@gmail.com",
            "jurusan" => "Teknik Informasi",
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
    <title>GET</title>
</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <?php foreach( $mahasiswa as $mhs ) : ?>
            <li>
                <a href="latihan3.php?nama=<?= $mhs["nama"]; ?>
                                      &nrp=<?= $mhs["nrp"]; ?>
                                      &email=<?= $mhs["email"]; ?>
                                      &jurusan=<?= $mhs["jurusan"]; ?>
                                      &gambar=<?= $mhs["gambar"]; ?>">
                <?= $mhs["nama"]; ?></a> 
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>