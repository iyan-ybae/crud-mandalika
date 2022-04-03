<?php
include 'connection.php';

$nama = htmlspecialchars($_POST['nama']);
$nim = htmlspecialchars($_POST['nim']);
$email = htmlspecialchars($_POST['email']);
$jurusan = htmlspecialchars($_POST['jurusan']);
$gambar = htmlspecialchars($_POST['gambar']);

$insert = mysqli_query($cn,"INSERT INTO mahasiswa SET nama='$nama',nim='$nim',email='$email',jurusan='$jurusan',gambar='$gambar'");

if($insert){
    echo"<script>
        alert('Sukses Menambahkan');
        document.location.href = 'index.php';
    </script>
    "; 
} else
echo "gagal";