<?php 
    // Menjalankan session start
    session_start();
    require 'functions.php';

    // Mengecek Cookie apkah sudah tersedia
    if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
        
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];

        // Ambil username berdasarkan id
        $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");

        $row = mysqli_fetch_assoc($result);

        // Cek cookie dan username
        if( $key === hash('sha256', $row['username']) ) {
            $_SESSION['login'] = true;
        }

        // Jika session login true (Bisa memakai cara ini)
        // if( $_COOKIE['login'] == 'true' ) {
            
        //     // Maka jalankan session login nya
        //     $_SESSION['login'] = true;
        // }
    }

    // Jika sudah login
    if( isset($_SESSION["login"]) ) {

        // Pindahkan ke halaman index setelah login
        header("Location: index.php");
        exit;
    }


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
        
                    // Set session
                    $_SESSION["login"] = true;

                    // Jika Rememberme dichecklist maka menggunakan cookie
                    if( isset($_POST['remember']) ) {
                        
                        // Buat cookie
                        setcookie('id', $row['id'], time() + 60);
                        setcookie('key', hash('sha256', $row['username']), time() + 60);
                    }


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

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">
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
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me</label>
            </li>
            <li>
                <button type="submit" name="login">Masuk</button>
            </li>
        </ul>
    </form>
    
</body>
</html>