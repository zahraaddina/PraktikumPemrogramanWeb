<?php
//koneksi ke database
require 'function.php';

    $query = "SELECT * FROM mahasiswa";
    $rows = query($query); //hasilnya wadah dengan isinyassss


    //ambil data (fetch) dari lemari result
    //while ($mhs = mysqli_fetch_assoc($result))
    //{
        //var_dump($mhs);
    //}
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <a href="tambahdata.php"><button style ="margin-bottom: 12px; background-color: pink;">Tambah Data Mahasiswa</button></a>
    <table border="1" cellpadding="10" cellspacing="0">    
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>No. Hp</th>
            <th>Aksi</th>
        </tr>

        <?php 
        $i = 1;
        foreach ($rows as $mhs) { ?>
        <tr>
            <td><?= $i ?></td>
            <td><img src="../images/<?= $mhs["foto"] ?>" width="60"/></td>
            <td><?= $mhs["nama"] ?></td>
            <td><?= $mhs["nim"] ?></td>
            <td><?= $mhs["jurusan"] ?></td>
            <td><?= $mhs["nohp"] ?></td>
            <td><a href="hapusdata.php?id=<?= $mhs["id"] ?>"><button>Hapus</button></a></td>
            
            
        </tr>
        <?php $i++; } ?>

    </table>
</body>
</html>