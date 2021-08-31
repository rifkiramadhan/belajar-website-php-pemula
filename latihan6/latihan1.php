<?php
    // 1. Date
    // Membuat fungsi date untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

    // 2. Time
    // UNIX Timestamp / EPOCH Time (Asal mula waktu di dunia IT)
    // Detik yang sudah berlalu sejak 1 Januari 1970
    // echo time();

    // 60 Menit * 60 Detik * 24 Jam * 2 Hari = 172800 Detik
    // Menampilkan hari saat ini, kemudian ditambah sekian detik yang akan datang
    // echo date("l", time()+60*60*24*100);

    // Menampilkan hari saat ini, kemudian dikurangi 100 hari kebelakang
    // echo date("d M Y", time()-60*60*24*100);

    // 3. Mktime
    // Untuk membuat sendiri detik yang sudah berlalu
    // mktime(0, 0, 0, 0, 0, 0,);

    // Jam, Menit, Detik, Bulan, Tanggal, Tahun
    // echo date("l", mktime(0, 0, 0, 6, 1, 1999));

    // 4. Strtotime / Format Tanggal
    echo date("l", strtotime("6 jan 1999"));


?>