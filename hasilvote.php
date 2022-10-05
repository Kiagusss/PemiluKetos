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
        <h1>Hasil Vote</h1>
        <h2>Sementara</h2>
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
            </div>
        </div>

        <div class="back">
            <button><a href="index.html">Kembali</a></button>
        </div>
    </div>
    <div class="tigan-bianka">
        <img class="tigaaan"src="asset/tigan (belakang).png" alt="">
        <img class="biankaa"src="asset/bianca (belakang).png" alt="">
    </div>
   
</body>

</html>