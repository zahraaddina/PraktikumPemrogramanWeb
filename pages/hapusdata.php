<?php
    require 'function.php';
    $id = $_GET['id'];

    if(hapusdata($id)>0) 
    {
        echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'datamahasiswa.php';
        </script>";
    }
    else
    {
        echo "
        <script>
            alert('Data gagal dihapus!');
            document.location.href = 'datamahasiswa.php';
        </script>";

        mysqli_error($koneksi);
    }

?> 