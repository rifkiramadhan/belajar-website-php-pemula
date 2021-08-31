<?php
    // Melakukan pengulangan pada array
    // for / foreach
    $angka = [3, 2, 15, 20, 11, 80, 1, 45];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <!-- Cara Menampilkan Array Menggunakan Looping / Perulangan -->
    <?php for( $i = 0; $i < count($angka); $i++ ) { ?>
        <div class="kotak">
            <?php echo $angka[$i]; ?>
        </div>
    <?php } ?>

    <div class="clear"></div>

    <!-- Untuk setiap elemen yang ada di dalam array angka maka lakukan sesuatu -->
    <?php foreach( $angka as $a ) { ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach( $angka as $a ) : ?>
        <div class="kotak"><?= $a ?></div>
    <?php endforeach; ?>
</body>
</html>