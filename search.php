<?php
// 1. Koneksi
include 'connection.php';

// 2. Tangkap id search
$keyword = $_GET['keyword'];

// 3. Query ke database 
$query = mysqli_query($cn, "SELECT * FROM mahasiswa WHERE 
                        nama LIKE '%$keyword%'  OR
                        nim LIKE '%$keyword%' OR
                        email LIKE '%$keyword%' OR
                        jurusan LIKE '%$keyword%'
");

// 4. Tampung data query kedalam variabel baru
$results = mysqli_fetch_all($query,MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Data Utama</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <style>
    a {
        text-decoration: none;
        color: darkgoldenrod;
    }

    a:hover {
        color: seagreen;
    }
    </style>
</head>

<body>
    <!-- table -->
    <section id="table" class="m-5">
        <div class="container">

            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <!-- Header -->
                    <h1>Tabel Mahasiswa STMIK Mandalika</h1>

                    <!-- Search -->
                    <form action="search.php" method="POST">
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <input type="text" name="keyword" placeholder="Cari Mahasiswa.." class="form-control"
                                    value="<?php echo $_POST['keyword'];?>">
                            </div>

                            <div class="col-md-6">
                                <button type="submit" class="btn btn-success w-100">Cari Data</button>
                            </div>
                        </div>
                    </form>

                    <!-- Tambah Data -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4"><a href="insert-form.php" class="">Klik Untuk Tambah Data..</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-6">
                                <div class="mb-4"><a href="index.php" class="">Kembali ke Halaman Utama.</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tabel Data -->
                    <table class="table table-bordered">
                        <tr class="table-success">
                            <th>Nomor</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Email</th>
                            <th>Jurusan</th>
                            <th>Gambar</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>

                        <!-- table data hasil dari database -->
                        <?php $i = 1?>
                        <?php foreach($results as $mhs):?>
                        <tr>
                            <td><?php echo $i;?></td>
                            <td><?= $mhs['nama'];?></td>
                            <td><?= $mhs['nim'];?></td>
                            <td><?= $mhs['email'];?></td>
                            <td><?= $mhs['jurusan'];?></td>
                            <td><?= $mhs['gambar'];?></td>
                            <td><a href="update-form.php?id=<?php echo $mhs['id'];?>">Update</a></td>
                            <td><a href="delete.php?id=<?php echo $mhs['id'];?>"
                                    onclick="return confirm('Yakin ingin menghapus Data ?')">Delete</a>
                            </td>
                        </tr>
                        <?php $i++;?>
                        <?php endforeach;?>
                    </table>
                </div>
            </div>




        </div>
    </section>
</body>

</html>