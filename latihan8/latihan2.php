<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Membuat script PHP untuk array numeric / array angka -->
    <?php     
        $angka = [
            [1, 2, 3], 
            [4, 5, 6], 
            [7, 8, 9]
            ]; 
        // Memanggil index array multi dimensi yang terhitung dari kiri ke kanan  
        // echo $angka[2][2];
    ?>

    <?php foreach( $angka as $a ) : ?>
        <!-- Foreach yang didalam untuk mengulang elemen-elemen nya -->
        <?php foreach( $a as $b ) : ?>
           <div class="kotak"><?= $b ?></div>
        <?php endforeach; ?>
        
        <div class="clear"></div>
    <?php endforeach; ?>
    
</body>
</html>