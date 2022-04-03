<?php
// Koneksi
include 'connection.php';

// HTML
include 'header.php';

// 1. Kita tangkap id nya lalu tampung kedalam variabel
$id = $_GET['id'];

// 2. Kita lakukan query ke database akan tetapi hanya id yang terkait
$query = mysqli_query($cn, "SELECT * FROM mahasiswa WHERE id='$id' LIMIT 1");

// 3. Lalu kita tampung hasil query kedalam variabel baru
$result = mysqli_fetch_all($query,MYSQLI_ASSOC);

?>

<section id="update" class="m-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <!-- Header -->
                <h1>Update Data Mahasiswa STMIK Mandalika</h1>
                <a href="index.php">Kembali ke Halaman Utama</a>
                <hr>

                <!-- Tabel Data -->
                <form action="update-logic.php" method="POST" class="mt-4">
                    <!-- Tampung data id  -->
                    <input type="hidden" name="id" value="<?php echo $result[0]['id']?>">

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Mahasiswa : </label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            value="<?php echo $result[0]['nama'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM : </label>
                        <input type="text" class="form-control" id="nim" name="nim"
                            value="<?php echo $result[0]['nim'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label"> Email : </label>
                        <input type="text" class="form-control" id="email" name="email"
                            value="<?php echo $result[0]['email'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label"> Jurusan </label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan"
                            value="<?php echo $result[0]['jurusan'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label"> Gambar : </label>
                        <input type="text" class="form-control" id="gambar" name="gambar"
                            value="<?php echo $result[0]['gambar'];?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>
</section>