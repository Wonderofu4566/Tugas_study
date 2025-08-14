<?php
include "helper/koneksi.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body class="p-5">
    <div class="container mt-5 text-center">
        <h1>Daftar Mahasiswa</h1>
    </div>
    <div class="d-flex justify-content-start m-3">
        <a href="tambah_data.php" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="container d-flex mt-3 text-center justify-content-center mt-5">
        <div class="card rounded-3 justify-content-center">
            <table class="table table-striped table-bordered border-primary">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Jenis Kelamin</th>
                        <th>Prodi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $query_tampil = "SELECT * FROM data_saya";
                    $tampil = mysqli_query($db, $query_tampil);
                    while ($data = mysqli_fetch_array($tampil)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['nama_mahasiswa']; ?></td>
                            <td><?php echo $data['nim']; ?></td>
                            <td><?php echo $data['jenis_kelamin']; ?></td>
                            <td><?php echo $data['prodi']; ?></td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="edit_data.php" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>
                                    <button class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </div>
                            </td>
                        </tr>
                    <?php } ?> <!-- button trigger -->
                    
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- FORM -->
                                    <form class="text-start">
                                        <!-- Nama Mahasiswa -->
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama Mahasiswa</label>
                                            <input type="text" class="form-control" id="nama"
                                                value="Shafwan Abhinaya">
                                        </div>

                                        <!-- NIM -->
                                        <div class="mb-3">
                                            <label for="nim" class="form-label">NIM</label>
                                            <input type="text" class="form-control" id="nim" value="F1E124067">
                                        </div>

                                        <!-- Jenis Kelamin -->
                                        <div class="mb-3">
                                            <label class="form-label">Jenis Kelamin</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio"
                                                    name="jenis_kelamin" id="laki" value="Laki-laki" checked>
                                                <label class="form-check-label" for="laki">Laki-laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio"
                                                    name="jenis_kelamin" id="perempuan" value="Perempuan">
                                                <label class="form-check-label"
                                                    for="perempuan">Perempuan</label>
                                            </div>
                                        </div>

                                        <!-- Prodi -->
                                        <div class="mb-3">
                                            <label for="prodi" class="form-label">Prodi</label>
                                            <input type="text" class="form-control" id="prodi"
                                                value="Informatika">
                                        </div>

                                        <!-- Hobi -->
                                        <div class="mb-3">
                                            <label class="form-label">Hobi</label><br>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="membaca"
                                                    checked>
                                                <label class="form-check-label" for="membaca">GYM</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="menyanyi"
                                                    checked>
                                                <label class="form-check-label" for="menyanyi">GOSPEL</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="game">
                                                <label class="form-check-label" for="game">GAME</label>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--hapus  -->
                    <!-- modol nji -->
                    <!-- Button trigger modal -->
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Apakah anda yakin menghapus file ini?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-danger btn-sm">Tetap Hapus</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>