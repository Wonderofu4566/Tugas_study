<?php
include 'koneksi.php';

//mengambil Nilai Post
$id = $_POST['id'];
$data1 = $_POST['data1'];
$data2 = $_POST['data2'];
$data3 = $_POST['data3'];

//query 
$query_update = "UPDATE tabel SET 
				data1='$data1',
				data2='$data2',
				data3='$data3'
				WHERE id='$id'";
$update = mysqli_query($db, $query_update);

if ($update) {
	echo "berhasil";
} else {
	echo "gagal";
}

