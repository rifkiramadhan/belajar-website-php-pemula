<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>

<!-- Apakah tombol submit sudah ditekan ? -->
<?php if( isset($_POST["submit"]) ) : ?>
    <!-- Jika sudah tampilkan nama -->
    <h1>Halo, Selamat datang <?= $_POST["nama"]; ?></h1>
<?php endif; ?>
<!-- Jika belum maka kosong -->

    <!-- Membuat form menggunakan method request post -->
    <form action="" method="post">
        <!-- Dan semua data nya akan dikirimkan ke halaman latihan5.php -->
        Masukkan nama :
        <input type="text" name="nama">
        <button type="submit" name="submit">Kirim</button>
    </form>
    
</body>
</html>