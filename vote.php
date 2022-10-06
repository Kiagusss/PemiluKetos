<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $pilihan = $_POST ['pilihan'];

    $sql = "INSERT INTO `data_vote`( `pilihan`) VALUES ('$pilihan')";
    $query = mysqli_query($connect, $sql);

    if($query) {
        header('Location: hasilvote.php');
    }else{
        header('Location: vote.php?status=gagal');
    }
}
?>