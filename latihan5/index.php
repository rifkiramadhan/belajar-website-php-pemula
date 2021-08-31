<?php
    // Pengulangan
    // 1. for
    // 2. while
    // 3. do.. while
    // 4. foreach / Pengulangan khusus array

    // Ada 3 Bagian Pengulangan
    // 1. Inisialisasi, Itu kita dapat menentukan variabel awal untuk pengulangannya
    // 2. Kondisi Terminasi, Digunakan untuk memberhentikan pengulangannya
    // 3. Increment / Decrement, Digunakan supaya pengulangannya bisa maju atau mundur

    /*
     * Untuk index i yang bernilai 0, selama nilai index i lebih kecil dari 5 maka lakukan pengulangannya terus menerus
     * sampai akhirnya kondisinya bernilai false atau sampai nilainya maksimal
     */
    // for( $i = 0; $i < 5; $i++ ) {
    //     // Jadi hello world! akan di ulang sebanyak 5x
    //     echo "Hello World!";
    //     // Dan menambahkan break line / barus baru
    //     echo "<br>";
    // }

    // Dijalankan 0x atau tidak akan pernah dijalankan
    // Selama kondisinya bernilai true, maka lakukan apapun yang ada di dalam bracket nya / kurung kurawalnya
    /*
     * Untuk index i yang bernilai 5, selama nilai index i lebih kecil dari 5 maka cetak hello world! ke layar sebanyak 5x
     */
    // $i = 10;
    // while( $i < 5 ) {
    //     echo "Hello World!";
    //     echo "<br>";
    //     $i++;
    // }

    // Lakukan kondisi selama bernilai false, maka blok nya akan dijalankan terlebih dahulu 1x kemudian jalankan kondisinnya
    // Untuk indexi yang bernilai 10
    $i = 10;

    // Dijalankan 1x jika false false
    // Maka akan menjalankan bloknya terlebih dahulu 1x
    do {
        echo "Hello World!";
        echo "<br>";

        // Kemudian ditambah 1x jadi 11
        $i++;
    
    // Apakah 10 lebih kecil dari 5 ? false 
    // Apakah 11 lebih kecildari 5 ? false, jika false selesai pengulangannya
    } while ( $i < 5 );
?>