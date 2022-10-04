<?php 

include 'koneksi.php'; 
    if(isset($_POST['simpan']))
    {
$nomor = $_POST['nomor'];
$nama_ketua = $_POST['nama_ketua'];
$nama_wakil = $_POST['nama_wakil'];
$visi = $_POST['visi'];
$misi = $_POST['misi'];

$sumber = $_FILES['gambar']['tmp_name'];
    $target = 'gambar/';
    $nama_gambar = $_FILES['gambar']['name'];

$pindah = move_uploaded_file($sumber, $target.$nama_gambar);

if($pindah){
$query = "INSERT INTO calon_kandidat VALUES('$nomor','$nama_gambar','$nama_ketua','$nama_wakil','$visi','$misi','$proker')";
$hasil = mysqli_query($connect, $query);
}

if($hasil)
{ header("location: index.php");
} else{
    echo "Penyimpanan gagal";
} 
    }
?>

