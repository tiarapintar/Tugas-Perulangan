<?php
// Mendefinisikan array nilai
$nilai = [80, 90, 75, 85, 100];

// Inisialisasi variabel untuk jumlah
$jumlah = 0;

// Menggunakan perulangan untuk menghitung jumlah nilai
foreach ($nilai as $n) {
    $jumlah += $n;
}

// Menghitung rata-rata nilai
$rata_rata = $jumlah / count($nilai);

// Menampilkan hasil
echo "Jumlah total nilai: " . $jumlah . "\n";
echo "Rata-rata nilai: " . $rata_rata . "\n";
?>