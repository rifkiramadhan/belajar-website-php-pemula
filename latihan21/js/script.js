// Meminta jQuery untuk mengambilkan document lalu ketika document itu siap
$(document).ready(function() {

    // Menghilangkan tombol cari
    $('#tombol-cari').hide();
    
    // Even ketika keyword ditulis
    $('#keyword').on('keyup', function() {

        // Memunculkan icon loading
        $('.loader').show();

        // Mengambil data dan melakukan sesuatu dari ajax
        $.get('ajax/mahasiswa.php?keyword=' + $('#keyword').val(), function(data) {
            
            // Ketika sudah didapatkan maka isi containernya
            $('#container').html(data);
            $('.loader').hide();

        });

        // Menggunakan ajax dengan memanggil satu baris saja / Ajax menggunakan load
        // $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());
    });

});