<?php
include 'koneksi.php';
    $nomor = $_GET['nomor']; 
    $sql = "SELECT * FROM calon_kandidat WHERE nomor='$nomor'";  
    $query = mysqLi_query($connect, $sql); 
    $data = mysqli_fetch_assoc($query); 

if(mysqli_num_rows($query) < 1 ){ 
    die("data tidak ditemukan...");
}  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
    <form action="update.php" method="POST">
        <input type="hidden" name="nomor" value="<?php echo $data['nomor']?>"/>
        <p><label>Gambar : <img src="gambar/<?php echo $data['gambar']; ?>" style="width: 70px; margin-bottom: 30px;">
                            <input type="file" name="gambar">
            </label></p>
        <p><label>Nama Calon Ketua : <input type="text" name="nama_ketua" value="<?php echo $data['nama_ketua']?>"required="required" ></label></p>
        <p><label>Nama Calon Wakil Ketua : <input type="text" name="nama_wakil" value="<?php echo $data['nama_wakil']?>"></label></p>
        <p><label>Visi : <textarea name="visi"> <?php echo $data['visi']?></textarea></label></p>
        <p><label>Misi : <textarea name="misi"> <?php echo $data['misi']?></textarea></label></p>
        <input type="submit" name="simpan" value="simpan"/>
    </form>
</body>
</html>