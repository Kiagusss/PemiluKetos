<?php
include 'koneksi.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="hasilvote">  
    <h1>Hasil Vote Sementara</h1>
    <div class="inicard">  
        <div class="card1">
        <h3>Kandidat 1</h3> <br>
        <?php
                        $sql = "SELECT COUNT(*) FROM data_siswa WHERE pilihan='1'";
                        $query = mysqli_query($connect, $sql);

                        $total = mysqli_fetch_array($query);
                        echo $total[0];
                        ?>
    </div>

    <div class="card2">
        <h3>Kandidat 2</h3> <br>
        <?php
                        $sql = "SELECT COUNT(*) FROM data_siswa where pilihan='2'";
                        $query = mysqli_query($connect, $sql);

                        $total = mysqli_fetch_array($query);
                        echo $total[0];
                        ?>
    </div></div>
  

    <div class="back">
        <a href="index.html">Kembali</a>
    </div>
</div>
  
</body>
</html>