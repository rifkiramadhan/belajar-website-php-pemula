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
        // $gambar = htmlspecialchars($data["gambar"]);

        // Menjalanakn fungsi untuk upload gambar
        $gambar = upload();

        // Jika yang dikirimkan oleh fungsi upload itu adalah gagal
        if( !$gambar ) {
            return false;
        }

        // Menambahkan data mahasiswa kemudian tambahkan seluruh data nya menjadi data mahasiswa yang baru
        $query = "INSERT INTO mahasiswa VALUES ('', '$nrp', '$nama', '$email', '$jurusan', '$gambar')";
        mysqli_query($conn, $query);

        // Mengembalikan data ketika ada data yang berhasil ditambahkan
        return mysqli_affected_rows($conn);
    }

    function upload() {

        // Jalakan variabel untuk mengambil nama gambar dari atribut name
        $namaFile = $_FILES['gambar']['name'];

        // Jalankan varaibel untuk mengambil gambar sesuai dengan maximal ukuran gambar
        $ukuranFile = $_FILES['gambar']['size'];

        // Jalankan variabel untuk mengambil gambar jika error
        $error = $_FILES['gambar']['error'];

        // Jalankan variabel untuk mengambil gambar dan menyimpan ke tempat penyimpanan sementara
        $tmpName = $_FILES['gambar']['tmp_name'];

        // Cek apakah tidak ada gambar yang diupload
        if( $error === 4 ) {
            echo "<script>
                        alert('Pilih gambar terlebih dahulu!');
                  </script>";
            return false;
        }

        // Cek apakah gambar yang diupload adalah gambar atau bukan
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));

        // Cek apakah ada string yang terdapat didalam sebuah array yang valid
        if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {

            echo "<script>
                        alert('Yang anda upload bukan gambar!');
                  </script>";
            return false;

        }

        // Cek apakah gambar yang diupload terlalu besar atau tidak
        if( $ukuranFile > 1000000 ) {
            echo "<script>
                        alert('Ukuran gambar terlalu besar!');
                  </script>";
            return false;
        }

        // Lolos pengecekan, gambar siap diupload
        // Generate nama gambar yang baru

        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
        // var_dump($namaFileBaru); die;

        move_uploaded_file($tmpName, 'img/img-data/' . $namaFileBaru);
        return $namaFileBaru;
        
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
        $gambarLama = htmlspecialchars($data["gambarLama"]);
        // $gambar = htmlspecialchars($data["gambar"]);

        // Cek apakah user memilih gambar baru atau tidak, jika memilih gambar lama
        if( $_FILES['gambar']['error'] === 4 ) {
            // Jika memilih gambar lama maka tetapkan pada gambar yang lama
            $gambar = $gambarLama;

        // Maka gambar itu akan diisi dengan upload atau jalankan fungsi upload gambar yang baru
        } else {
            $gambar = upload();
        }


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