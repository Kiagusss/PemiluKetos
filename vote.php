<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $id = $_POST ['id'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $pilihan = $_POST ['pilihan'];

    $sql = "INSERT INTO `data_siswa`(`id`, `nama`, `kelas`, `pilihan`) VALUES ('$id','$nama','$kelas','$pilihan')";
    $query = mysqli_query($connect, $sql);

    if($query) {
        header('Location: hasilvote.php');
    }else{
        header('Location: vote.php?status=gagal');
    }
}
?>