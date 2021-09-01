<?php
    // Memisahkan logika codingan dengan tampilan web

    // Membuat koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    // Mmbuat fungsi query
    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);

        // Data kosong
        $rows = [];

        // Data yang diambil setiap loopingnya
        while( $row = mysqli_fetch_assoc($result) ) {

            // Mengambil wadah data yang kosong untuk mengambil data dari setiap perulangan nya satu per satu
            $rows[] = $row;
        }
        // Mengembalikan wadah data yang kosong
        return $rows;
    }

    function tambah($data) {
        global $conn;

        $nrp = htmlspecialchars($data["nrp"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $gambar = htmlspecialchars($data["gambar"]);

        // Menambahkan data mahasiswa kemudian tambahkan seluruh data nya menjadi data mahasiswa yang baru
        $query = "INSERT INTO mahasiswa VALUES ('', '$nrp', '$nama', '$email', '$jurusan', '$gambar')";
        mysqli_query($conn, $query);

        // Mengembalikan data ketika ada data yang berhasil ditambahkan
        return mysqli_affected_rows($conn);
    }

    function hapus($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
        return mysqli_affected_rows($conn);
    }

    // Membuat function ubah untuk menampung data post yang di inginkan
    function ubah($data) {
        global $conn;
        
        // Menangkap value table mahasiswa dengan variabel
        $id = $data["id"];
        $nrp = htmlspecialchars($data["nrp"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $gambar = htmlspecialchars($data["gambar"]);

        // Mengubah data mahasiswa set semuanya kemudian ubah semua data nya menjadi data yang baru
        $query = "UPDATE mahasiswa SET nrp = '$nrp',
                                       nama = '$nama',
                                       email = '$email',
                                       jurusan = '$jurusan',
                                       gambar = '$gambar'
                                   WHERE id = $id ";
        mysqli_query($conn, $query);

        // Mengembalikan data ketika ada data yang berhasil diubah
        return mysqli_affected_rows($conn);
    }

    // Membuat function cari untuk mengetikkan keyword cari
    function cari($keyword) {

        // Mencari mahasiswa yang namanya tersedia
        $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR
                                                nrp LIKE '%$keyword%' OR
                                                email LIKE '%$keyword%' OR
                                                jurusan LIKE '%$keyword%' ";

        // Memanggil fungsi yang sudah dibuat didalam fungsi baru
        return query($query);
    }
?>