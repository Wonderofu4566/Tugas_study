<?php
include "helper/koneksi.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data pekerja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- Logo -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg">
                    <div class="card-header bg-dark text-white text-center">
                        <h3 class="mb-0">Data Pekerja</h3>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-start mb-3">
                            <a href="tambah_data.php" class="btn btn-success">
                                <i class="bi bi-plus-lg"></i> Tambah Data
                            </a>
                        </div>
                        <div>
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">ID Pekerja</th>
                                        <th scope="col">Jobdesc</th>
                                        <th scope="col">Jabatan</th>
                                        <th scope="col">lokasi</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $query_tampil = "SELECT * FROM data_pekerja";
                                    $tampil = mysqli_query($db, $query_tampil);
                                    while ($data = mysqli_fetch_array($tampil)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['id_kerja']; ?></td>
                                            <td><?php echo $data['jobdesc']; ?></td>
                                            <td><?php echo $data['jabatan']; ?></td>
                                            <td><?php echo $data['lokasi']; ?></td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <form action="edit_data.php" method="POST">
                                                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                                        <button type="submit" class="btn btn-warning btn-sm">
                                                            <i class="bi bi-pencil-square"></i> Edit
                                                        </button>
                                                    </form>
                                                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $data['id']; ?> ">
                                                        <i class="bi bi-trash"></i> Hapus
                                                    </button>
                                                    <form action="helper/delete_pekerja.php" method="POST">
                                                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="hapus<?php echo $data['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Menghapus Data</h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Apakah Anda yakin menghapus data ini?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>