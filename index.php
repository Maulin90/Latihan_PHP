<?php
// Menghubungkan ke file koneksi
include 'config/koneksi.php';

// Menampilkan pesan koneksi berhasil
echo "Koneksi Berhasil!<br>";

// Menggunakan variabel dari koneksi.php 
// Menambahkan logika untuk melakukan query

try {
    $query = $database_connection->query("SELECT * FROM mahasiswa"); 
    $results = $query->fetchAll(PDO::FETCH_ASSOC);

    // Menampilkan hasil query
    foreach ($results as $row) {
        echo "Data: " . $row['email'] . "<br>"; 
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
