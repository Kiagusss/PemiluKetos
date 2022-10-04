<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data</title>
</head>
<body>
    <form action="tambah_data.php" method="post" enctype="multipart/form-data">
        <h3>Tambah Data Kandidat : </h3> 
        <p><label>Nomor Kandidat : <input type="number" name="nomor" required="required"></label></p> 
        <p><label>Gambar  : <input type="file" name="gambar"</label> </p>
        <p><label>Nama Calon Ketua : <input type="text" name="nama_ketua"></label></p> 
        <p><label>Nama Calon Wakil Ketua: <input type="text" name="nama_wakil"></label></p> 
        <p><label>Visi : <textarea name="visi" cols="30" rows="10"></textarea></label></p> 
        <p><label>Misi : <textarea name="misi" cols="30" rows="10"></textarea></label></p>
        <input type="submit" name="simpan" value="simpan">
    </form>
</body>
</html>