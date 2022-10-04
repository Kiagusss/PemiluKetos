<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nomor = $_POST['nomor'];
    $gambar = $_POST['gambar'];
    $nama_ketua = $_POST['nama_ketua'];
    $nama_wakil = $_POST['nama_wakil'];
    $visi = $_POST['visi'];
    $misi = $_POST['misi'];

    $sql = "UPDATE calon_kandidat SET  gambar = '$gambar' ,nama_ketua = '$nama_ketua' 
    ,nama_wakil = '$nama_wakil' ,visi = '$visi' ,misi = '$misi' WHERE nomor='$nomor'";
    $query = mysqli_query($connect, $sql);

    if($query) {
        header('Location: index.php');
    }else{
        header('Location: tambah.php?status=gagal');
    }
}
?>
