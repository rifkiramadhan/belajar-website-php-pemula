<?php 
    // 1. Mendefinisikan fungsi terlebih dahulu kemudian panggil fungsinya
    // Jika tidak mengirimkan argumen apapun maka yang dikirimkan adalah argumen defaultnya
    function salam($waktu = "Datang", $nama = "Admin") {
        return "Selamat $waktu, $nama!";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <!-- Memanggil fungsi salam yang berargumen Rifki ke layar browser -->
    <!-- Jika di bahasa PHP kedua argumen haurus dihubungkan denganvariabel yang dibuat dan sakah satu tidak boleh kosong -->
    <h1><?= salam("Pagi", "Rifki"); ?></h1>

</body>
</html>