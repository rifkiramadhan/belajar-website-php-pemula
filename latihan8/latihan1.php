<?php
    // Array Assosiative (Versi baru)
    $hari = array("Senin", "Selasa", "Rabu");

    // Array Numeric (Versi lama)
    $bulan = ["Januari", "Februari", "Maret"];

    $arr = [100, "Teks", true];

    // Menampilkan array versi debugging
    // Menggunakan var_dumb()
    var_dump($hari);
    echo "<br>";

    // Menggunakan print_r() / Print Rekursif
    print_r($bulan);
    echo "<br>"; 
    
    // Menampilkan elemen pada array
    echo $arr[0];
?>