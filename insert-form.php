<?php
include 'header.php';
?>

<section id="form-insert" class="m-5 ">
    <div class="container">
        <!-- Form Insert -->
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <!-- Header -->
                <h1>Tambah Data Mahasiswa</h1>
                <form action="insert-logic.php" method="post" class="mt-5">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input required type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input required type="text" class="form-control" id="nim" name="nim">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input required type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <input required type="text" class="form-control" id="jurusan" name="jurusan">
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input required type="text" class="form-control" id="gambar" name="gambar">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>