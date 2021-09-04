<?php

    // Memanggil library yang ada pada folder vendor
    require_once __DIR__ . '/vendor/autoload.php';

    // Menyiapkan data yang akan disimpan ke dalam tabel
    // Menghubungkan functions ke dalam file
    require 'functions.php';

    // Query data mahasiswa disimpan ke dalam variabel mahasiswa dan bentuknya array
    // ASC / Ascending (Membesar)
    // DESC / Descending (Mengecil)
    $mahasiswa = query("SELECT * FROM mahasiswa");

    // Menginstansiasi library
    $mpdf = new \Mpdf\Mpdf();

    $html = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Mahasiswa</title>

        // My MPDF CSS
        <link rel="stylesheet" href="css/cetak.css" >

    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th>NRP</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>';

        $i = 1;
        foreach( $mahasiswa as $row ) {
            $html .= '
            <tr>
                <td>'. $i++ .'</td>
                <td><img width="50" src="img/img-data/'. $row["gambar"] .'" ></td>
                <td>'. $row["nrp"] .'</td>
                <td>'. $row["nama"] .'</td>
                <td>'. $row["email"] .'</td>
                <td>'. $row["jurusan"] .'</td>

            </tr>';
        }

    $html .= '</table>
    </body>
    </html>';

    // Mencetak HTML ke dalam halaman PDF
    $mpdf->WriteHTML($html);
    // Bisa disingkat dengan mengetik huruf 'D' (download) / 'I' (inline)
    $mpdf->Output('daftar-mahasiswa.pdf', \Mpdf\Output\Destination::INLINE);

?>