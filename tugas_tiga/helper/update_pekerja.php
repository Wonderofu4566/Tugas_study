<?php
include 'koneksi.php';

// Validasi input
if (!isset($_POST['id'])) {
    die("Error: Data tidak lengkap!");
}

$id = $_POST['id'];
$nama = $_POST['nama'];
$id_kerja = $_POST['id_kerja'];
$jobdesc = $_POST['jobdesc'];
$jabatan = $_POST['jabatan'];
$lokasi = $_POST['lokasi'];

// Query update
$query_update = "UPDATE data_pekerja SET 
                nama='$nama',
                id_kerja='$id_kerja',
                jobdesc='$jobdesc',
                jabatan='$jabatan',
                lokasi='$lokasi'
                WHERE id='$id'";
$update = mysqli_query($db, $query_update);

if ($update) {
    header("location: ../index.php");
} else {
    echo "Error: " . mysqli_error($db);  // Debug error SQL
}
?>