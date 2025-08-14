<?php
include 'koneksi.php';
//mengambil nilai post

$nama = $_POST['nama'];
$id_kerja = $_POST['id_kerja'];
$jobdesc = $_POST['jobdesc'];
$jabatan = $_POST['jabatan'];
$lokasi = $_POST['lokasi'];

//query
$query_simpan = "INSERT INTO data_pekerja (nama, id_kerja, jobdesc, jabatan, lokasi) 
				values ('$nama', '$id_kerja', '$jobdesc', '$jabatan', '$lokasi') ";

$simpan = mysqli_query($db, $query_simpan);

//cek
if ($simpan) {
	header("location: ../index.php");
} else {
	echo "gagal";
}
