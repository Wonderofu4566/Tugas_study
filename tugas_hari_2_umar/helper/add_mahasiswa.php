<?php
include 'koneksi.php';
//mengambil nilai post

$nama_mahasiswa = $_POST['nama_mahasiswa'];
$nim = $_POST['nim'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$prodi = $_POST['prodi'];


//query
$query_simpan = "INSERT INTO data_saya (nama_mahasiswa, nim, jenis_kelamin, prodi) 
				values ('$nama_mahasiswa', '$nim', '$jenis_kelamin', '$prodi') ";
$simpan = mysqli_query($db, $query_simpan);

//cek
if ($simpan) {
	header("location: ../index.php");
} else {
	echo "gagal";
}
