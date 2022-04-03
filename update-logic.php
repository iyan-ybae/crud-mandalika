<?php

include 'connection.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$jurusan = $_POST['jurusan'];
$gambar = $_POST['gambar'];

$update = mysqli_query($cn,"UPDATE mahasiswa SET nama='$nama',nim='$nim',email='$email',jurusan='$jurusan',gambar='$gambar' WHERE id='$id'");

if($update){
    echo "<script>
        alert('Sukses Menambahkan');
        document.location.href = 'index.php';
    </script>
";
} else
    echo "Gagal Menambahkan";