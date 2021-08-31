<?php
    // 1. Array
    // Cara lama membuat Array
    $hari = array("Senin", "Selasa", "Rabu");

    // Cara baru membuat Array
    $bulan = ["Januari", "Februari", "Maret"];
    $arr1 = [123, "Tulisan", false];

    // Menampilkan array ke layar
    // var_dump() / print_r()
    // var_dump($hari);
    // echo "<br>";
    // print_r($bulan);
    // echo "<br>";

    // Menampilkan 1 elemen pada array
    // echo $arr1[0];
    // echo "<br>";
    // echo $bulan[1];

    // Menambahkan elemen baru pada array
    var_dump($hari);
    $hari[] = "Kamis";
    $hari[] = "Jum'at";
    echo "<br>";
    var_dump($hari);

?>