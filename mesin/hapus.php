<?php
include 'koneksi.php'; 
if (isset($_GET['nomor'])) 

    $nomor = $_GET['nomor']; 
    $sql = "DELETE FROM calon_kandidat WHERE nomor='$nomor'"; 
    $query = mysqli_query($connect, $sql); 
    
if($query){
    header('Location: index.php'); 
}else{
    header('Location: hapus.php?status=gagal');
}
?>