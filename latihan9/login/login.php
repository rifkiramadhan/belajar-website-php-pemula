<?php
    // Cek apakah tombol submit sudah ditekan atau belum
    if( isset($_POST["submit"]) ) {

        // Cek username dan password
        if( $_POST["username"] == "admin" && $_POST["password"] == "123456" ) {

        // Jika benar maka redirect ke halaman admin
        header("Location: admin.php");
        exit;
        
    } else {

        // Jika salah maka tampilkan pesan kesalahan
        $error = true;
    }   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h1>Login Admin</h1>

    <!-- Jika error maka akan menampilkan paragraf Username atau password Anda salah! -->
    <?php if( isset($error) ) : ?>
        <p style="color: red; font-stye: italic;">Username atau password Anda salah!</p>
    <?php endif; ?>

    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username :</label>
                <input id="username" type="text" name="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input id="password" type="password" name="password">
            </li>
            <li>
                <button type="submit" name="submit">Masuk</button>
            </li>
        </form>
    </ul>

</body>
</html>