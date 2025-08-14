<?php 
    include "helper/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-5">

    <div class="container">
        <!-- Tombol Kembali -->
        <a href="index.php" class="btn btn-secondary mb-4">Kembali</a>

        <!-- Form Edit Data -->
        <form action="helper/add_mahasiswa.php" method="POST" >

            <div class="mb-3">
                <label for="nama" class="form-label">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="nama" value="" name="nama_mahasiswa">
                
            </div>

            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" value="" name="nim">
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki" value="Laki-laki">
                    <label class="form-check-label" for="laki">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan">
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
            </div>

            <!-- Prodi -->
            <div class="mb-3">
                <label for="prodi" class="form-label">Prodi</label>
                <input type="text" class="form-control" id="prodi" value="" name="prodi">
            </div>

            <!-- Hobi -->
            <div class="mb-3">
                <label class="form-label">Hobi</label><br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="membaca">
                    <label class="form-check-label" for="membaca">GYM</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="menyanyi">
                    <label class="form-check-label" for="menyanyi">GOSPEL</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="game">
                    <label class="form-check-label" for="game">GAME</label>
                </div>
            </div>

            <!-- Tombol Simpan -->
            <button type="submit" class="btn btn-primary mb-4">Simpan</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>