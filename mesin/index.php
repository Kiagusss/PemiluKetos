<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data pelanggan</title>

</head>
<body>
    <h4><a href="tambah.php"><span>[+]</span> Tambah Baru</a></h4>
    
    <table border="1">
        <tr>
            <td>Nomor Kandidat</td>
            <td>Gambar</td>
            <td>Nama Calon Ketua</td>
            <td>Nama Calon Wakil Ketua</td>
            <td>Visi</td>
            <td>Misi</td>
        </tr>

        <?php 
            $sql = "SELECT * FROM calon_kandidat";  
            $query = mysqli_query ($connect, $sql); 
 
            while($data = mysqli_fetch_array($query))
            { 
                echo" 
                <tr> 
                    <td>$data[nomor]</td> 
                    <td> <img src='gambar/$data[gambar]' width ='50px'></td>   
                    <td>$data[nama_ketua]</td> 
                    <td>$data[nama_wakil]</td> 
                    <td>$data[visi]</td>  
                    <td>$data[misi]</td>  
                    <td> 
                        <a href='form_edit.php?nomor=".$data['nomor']."'>
                            Edit
                        </a>
                        <a href='hapus.php?nomor=".$data['nomor']."'>
                            Hapus
                        </a>
                    </td> 
                </tr>"; 
            } 
        ?> 
    </table>

    
</body>
</html>