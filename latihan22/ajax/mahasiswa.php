<?php 
    // Sleep adalah detik
    // sleep(1);

    // Usleep adalah micro seconds
    usleep(500000);

    // Mengkaitkan file function.php
    require '../functions.php';

    // Memganggil keyword dari ajax yang telah dikirim dari keyword.value
    $keyword = $_GET["keyword"];

    /*
     * Setiap mengetikkan sesuatu pada kolom pencarian maka data pencariannya akan dikirimkan ke file mahasiswa.php menggunakan ajax
     * dan nanti file mahasiswa.php akan mengambil apapun yang diketikkan lalu mencari mahasiswa yang diketikkan berdasarkan keywordnya
     * dan ini dilakukan setiap menekan tombol dan tidak perlu menekan tombol cari kembali
     */  
    $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR
                                                nrp LIKE '%$keyword%' OR
                                                email LIKE '%$keyword%' OR
                                                jurusan LIKE '%$keyword%' ";
    $mahasiswa = query($query);  
?>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
    
<?php $i = 1; ?>
        <!-- Menggunakan foreach utuk looping array untuk menampilkan data -->
    <?php foreach( $mahasiswa as $row ) : ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> ||
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin ?'); " >Hapus</a>
            </td>
            <td>
                <img width="50" src="img/img-data/<?= $row["gambar"]; ?>" alt="">
            </td>
            <td><?= $row["nrp"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
            </tr>
    <?php $i++; ?>
 <?php endforeach; ?>
 </table>