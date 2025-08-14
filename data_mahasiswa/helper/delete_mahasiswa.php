<?php
include 'koneksi.php';
// Mengambil nilai post
$id = $_POST['id'];

// Query
$query_hapus = "DELETE FROM tabel WHERE id = '$id'";
$hapus = mysqli_query($db, $query_hapus);

// Cek
if ($hapus) {
    echo "Data berhasil dihapus";
} else {
    echo "Gagal menghapus data";
}

?>