<?php

include 'connection.php';

$id = $_GET['id'];

$delete = mysqli_query($cn,"DELETE FROM mahasiswa WHERE id='$id'");


if($delete){
    echo"<script>
        document.location.href = 'index.php';
    </script>
    "; 
} else
    echo "Gagal";