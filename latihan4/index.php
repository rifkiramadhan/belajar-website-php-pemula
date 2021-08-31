<?php
    // Ini adalah komentar PHP dengan double slash untuk satu baris
    /* 
     * Ini adalah komentar PHP dengan slash bintang untuk banyak baris 
     */

    // Sintaks PHP - PHP Dasar
    // echo, print
    // print_r
    // var_dump
    
    // Menyuruh PHP untuk mencetak string atau tulisan Rifki Ramadhan ke layar
    // echo dan print hasilnya sama
    // echo "Rifki Ramadhan";
    // echo 1234;
    // echo true;
    // echo false;
    
    /*
     * echo untuk mencetak string, untuk kutip dua sedikit lebih sakti daripada kutip satu, karena dengan menggunakan
     * menggunakan kutip dua kita bisa menggunakan interpolasi, dan interpolasi digunakan untuk mengecek apakah di dalam
     * kutip dua atau didalam string itu terdapat variabel atau tidak, jika terdapat variabel didalam kutip dua maka yang
     * ditampilkan adalah isi variabelnya
     */
    // echo ''
    // echo ""
    // echo "jum'at"

    // print "Rifki Ramadhan";

    /* 
     * print_r harus diawali kurung buka dan tutup sebelum dan setelah tanda petik dua atau string
     * atau bisa mencetak string dan array
     */ 
    // print_r("Rifki Ramadhan");

    /* 
     * var_dump akan memberikan informasi ke layar tidak hanya apa yang ditampilkannya saja tetapi diayang juga akan
     * memberikan informasi yang ditampilkannya itu tipe datanya apa, lalu ukurannya berapa 
     */
    // var_dump("Rifki Ramadhan");    

    // 3. Variabel dan Tipe Data
    // Variabel, Tidak boleh diawali dengan angka tetapi boleh mengandung angka

    // Mengasign / memasukan nama ke dalam variabel nama
    $nama = "Rifki Ramadhan"; 

    // Jika menggunakan kutip dua / interpolasinya berjalan
    echo "Halo, nama saya adalah $nama";
    echo "<br>";

    // Jika menggunakan kutip satu / Interpolasinya tidak berjalan
    echo 'Halo, nama saya adalah $nama';
    echo'<br>';

    // Opertaor
    // 1. Aritmatika / Matematika (+ - * / %)
    $x = 10;
    $y = 20;
    // echo 1 + 1;
    echo $x * $y;
    echo "<br>";

    // 2. Penggabung String / Concatenation / Concat (.)
    $nama_depan = "Rifki";
    $nama_belakang = "Ramadhan";
    echo $nama_depan . " " . $nama_belakang;
    echo "<br>";

    // 3. Assignment / Penugasan (=, +=, -=, *=, /=, %=, .=)
    // $x = 1;
    // $x += 5;
    // $x -= 5;
    // echo $x;
    $nama = "Rifki";
    $nama .= " ";
    $nama .= "Ramadhan";
    echo $nama;
    echo "<br>";

    // 4. Perbandingan (<, >, <=, , >=, ==, !=), Untuk mengecek nilai yang sama atau tidak 
    // var_dump(1 < 5);
    // var_dump(1 == 5);
    var_dump(1 == "1"); 
    echo "<br>";

    // 5. Identitas (===, !===), Tidak hanyak untuk mengecek nilai yang sama atau tidak tetapi tipe datanya juga / ""
    var_dump(1 === "1");
    echo "<br>"; 

    // 6. Logika (&&, ||, !)
    $x = 30;    
 
    /*
     * Apakah 30 lebihkecil dari 20? false, apakah 30 bilangan genap? true, meskipun ada satu yang betul karena
     * menggunakan operator && dimana dan adalah keduanya harus true, maka hasilnya adalah false
     */
    // var_dump($x < 20 && $x % 2 == 0);

    /*
     * Apakah 30 lebihkecil dari 20? false, apakah 30 bilangan genap? true, meskipun ada satu yang betul karena
     * menggunakan operator || dimana or adalah salah satu harus true, maka hasilnya adalah true
     */    
    var_dump($x < 20 || $x % 2 == 0);

?>

<!-- Penulisan sintaks PHP -->
<!-- 1. PHP di dalam HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>

    <!-- Kita bisa menulis nama pada judul h1 dan teks paragraf dengan bahasa PHP -->
    <h1>Halo, Selamat Datang <?php echo $nama; ?></h1>
    <p><?php echo "Penulisan ini disarankan"; ?></p>

    <!-- 2. HTML di dalam PHP, Penulisan ini tidak disarankan karena untuk memisahkan bahasa HTML dan PHP -->
    <?php   
        // Kita bisa menulis seluruh tag HTML kedalam bahasa PHP
        echo "<h1>Halo, Selamat Datang Ramadhan</h1>";
        echo "<p>Penulisan ini tidak disarankan</p>";
    ?>

</body>
</html>