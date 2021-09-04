// Mengambil elemen-elemen yang dibutuhkan
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

// Meminta javascript untuk membuatkan function keyword, dan ketika keyword ditulis
keyword.addEventListener('keyup', function() {
    
    // Jalankan fungsi berikut ini dengan membuat object ajax
    var xhr = new XMLHttpRequest();

    // Mengecek kesiapan ajax
    xhr.onreadystatechange = function() {
        // 200 = Oke, 4 = Ready; Ajax siap dilakukan        
        if( xhr.readyState == 4 && xhr.status == 200 ) {
            // console.log(xhr.responseText);

            // Apapun yang ada di dalam html simpan kedalam container / ganti isinya
            container.innerHTML = xhr.responseText;

        }
    }

    // Eksekusi Ajax sambil mengirimkan keyword agar keywordnya berjalan
    xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
    
    // Menjalankan ajax
    xhr.send();

});