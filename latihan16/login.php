<?php 

    require 'functions.php';

    // Menegcek apakah tombol login sudah ditekan atau belum
    if( isset($_POST["login"]) ) {

            $username = $_POST["username"];
            $password = $_POST["password"];

            $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
            
            // Mengecek apakah ada username
            if( mysqli_num_rows($result) === 1 ) {
                
                // Mengecek apakah ada password
                $row = mysqli_fetch_assoc($result);
                
                // Jika berhasil diverifikasi
                if( password_verify($password, $row["password"]) ) {
        
                    // Arahkan user untuk masuk ke sebuah sistem
                    header("Location: index.php");
                    exit;
            }
        }

        $error = true;
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>

    <h1>Halaman Login</h1>

    <!-- Jika terdapat eror -->
    <?php if( isset($error) ) : ?>
        <p>Username atau password Anda salah!</p>
    <?php endif; ?>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login">Masuk</button>
            </li>
        </ul>
    </form>
    
</body>
</html>