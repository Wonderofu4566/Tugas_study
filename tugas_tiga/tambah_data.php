<?php 
    include "helper/koneksi.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9">
                <div class="card shadow-lg">
                    <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Tambah Data Pekerja</h4>
                        <a href="index.php" class="btn btn-light btn-sm">Kembali</a>
                    </div>
                    <div class="card-body p-4">
                        <form action="helper/add_pekerja.php" method="POST">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama pekerja</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="id_kerja" class="form-label">ID Pekerja</label>
                                <input type="text" class="form-control" id="id_kerja" name="id_kerja" required>
                            </div>
                            <div class="mb-3">
                                <label for="jobdesc" class="form-label">Jobdesc</label>
                                <input type="text" class="form-control" id="jobdesc" name="jobdesc" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label d-block">Jabatan</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="junior" name="jabatan" value="junior" required>
                                    <label class="form-check-label" for="junior">Junior</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="upper_junior" name="jabatan" value="upper_junior" required>
                                    <label class="form-check-label" for="upper_junior">Upper Junior</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="lower-senior" name="jabatan" value="lower-senior" required>
                                    <label class="form-check-label" for="lower-senior">Lower Senior</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="senior" name="jabatan" value="senior" required>
                                    <label class="form-check-label" for="senior">senior</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="lokasi" class="form-label">Lokasi</label>
                                <input type="text" class="form-control" id="lokasi" name="lokasi" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </form>
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