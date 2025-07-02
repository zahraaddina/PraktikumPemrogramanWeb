<?php
$koneksi = mysqli_connect("localhost:3307", "root", "", "webif");

    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    function query($query) {
        global $koneksi;
        $result = mysqli_query($koneksi, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambahdata($data)
    {
        global $koneksi;
        $nama = $data["nama"];
        $nim = $data["nim"];
        $jurusan = $data["jurusan"];
        $nohp = $data["nohp"];

        //untuk upload foto
        $file = $_FILES['foto']['name'];
        $namafile = date('dmy_hm'). '_' . $file; // Menggunakan tanggal dan waktu untuk nama file unik, supaya  tidak ada duplikasi nama file
        $tmp = $_FILES['foto']['tmp_name']; // Ambil nama file dan lokasi sementara
        //buat folder untuk disimpan dimana
        $folder = 'images/'; // Folder tempat menyimpan foto
        $path = $folder . $namafile; // Path lengkap untuk menyimpan foto

        
        
        if(move_uploaded_file($tmp, $path)) {
        // Pastikan urutan kolom sesuai tabel: id, foto, nama, nim, jurusan, nohp
        $query = "INSERT INTO mahasiswa VALUES ('', '$namafile', '$nama', '$nim', '$jurusan', '$nohp')";
        mysqli_query($koneksi, $query);
        return mysqli_affected_rows($koneksi);
        } 
        else {
            return echo mysqli_affecteda_rows($koneksi); // Mengembalikan 0 jika gagal upload foto
        }


    /
    }

    function hapusdata($id)
    {
        global $koneksi;
        mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = $id"); // Eksekusi query

        return mysqli_affected_rows($koneksi); 
    } 

    function ubahdata($data, $id)
    {
         global $koneksi;
        $nama = $data["nama"];
        $nim = $data["nim"];
        $jurusan = $data["jurusan"];
        $nohp = $data["nohp"];

        //untuk upload foto
        $file = $_FILES['foto']['name'];
        $namafile = date('dmy_hm'). '_' . $file; // Menggunakan tanggal dan waktu untuk nama file unik, supaya  tidak ada duplikasi nama file
        $tmp = $_FILES['foto']['tmp_name']; // Ambil nama file dan lokasi sementara
        //buat folder untuk disimpan dimana
        $folder = 'images/'; // Folder tempat menyimpan foto
        $path = $folder . $namafile; // Path lengkap untuk menyimpan foto

        if(move_uploaded_file($tmp, $path)) {
        // Pastikan urutan kolom sesuai tabel: id, foto, nama, nim, jurusan, nohp
        $query = "UPDATE mahasiswa set 
        nama= '$nama',
        nim= '$nim', 
        jurusan = '$jurusan', 
        nohp= '$nohp' 
        WHERE id = $id;
        ";

        mysqli_query($koneksi, $query);
        return mysqli_affected_rows($koneksi);
        } 
        else {
            return echo mysqli_affecteda_rows($koneksi); // Mengembalikan 0 jika gagal upload foto
        }
    }
?>