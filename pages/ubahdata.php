<?php
require 'function.php';

$id = $_GET['id']; // Ambil id dari URL
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id"); // Ambil data mahasiswa berdasarkan id

var_dump($mhs[0]);



if (isset($_POST['submit'])) {
    if (ubahdata($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'datamahasiswa.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal ditambahkan!');
            document.location.href = 'datamahasiswa.php';
        </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>
    <form action ="" method="post" encypt="multipart/form-data"> //files nya tidak bisa menyimpan array
        <label for ="name">Nama:</label>
        <input type="text" name="nama" id="name" placeholder="Nama Lengkap" required value="<? $mhs["nama"]?>"/> 

        <label for ="nim">NIM:</label>
        <input type="text" name="nim" id="nim"/> <br>

        <label for ="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" id="jurusan" required value="<? $mhs["jurusan"]?>"/> <br>

        <label for ="nohp">No. Hp:</label>
        <input type="text" name="nohp" id="nohp" required value="<? $mhs["nohp"]?>" /> <br>

        <label for="foto">Foto:</label>
        <input type="file" name="foto"required/> <br>
        
        <button type="submit" name="submit">Tambah</button>
</body>
</html>