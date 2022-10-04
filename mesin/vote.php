<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
   

    $sql = "INSERT INTO candidat_1php
    $query = mysqli_query($connect, $sql);

    if($query) {
        header('Location: index.php');
    }else{
        header('Location: tambah.php?status=gagal');
    }
}
?>