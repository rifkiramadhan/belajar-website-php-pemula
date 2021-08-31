<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <table border="1" cellpadding="10" cellspacing="0">
        <?php
            // Cara yang lebih simple
            // for( $i = 1; $i <= 3; $i++ ) {
            //     echo "<tr>";
            //     for( $j = 1; $j <= 5; $j++ )    {
            //         echo "<td>$i,$j</td>";
            //     }
            //     echo "</tr>";
            // }                
        ?>

        <!-- Cara Templating / Yang lebih membingungkan -->
        <!-- Menandai for bracket dengan : dan endfor; -->
        <?php for( $i = 1; $i <= 5; $i++) : ?>

            <!-- Menandai if bracket dengan : dan endif; -->
            <?php if( $i % 2 == 0 ) : ?>
                <tr class="warna-baris">
            <?php else : ?>
                <tr>
            <?php endif; ?>
            
                <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                    <!-- Merubah sintaks php echo dengan = agar lebih singkat  -->
                    <td><?= "$i, $j"; ?></td>
                <?php endfor; ?>

                </tr>
        <?php endfor; ?>
    </table>
    
</body>
</html>