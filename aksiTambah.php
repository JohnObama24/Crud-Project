<?php

    include 'koneksi.php';

    // Jika ada interaksi dengan tombol 'tambah', maka data yang diambil dari inputan form adalah nama, nomor telepon, jumlah, dan alamat.
    if(isset($_POST['tambah'])){

        // mengambil data dari inputan di form
        $nama = $_POST['nama'];
        $notelp = $_POST['notelp'];
        $jumlah = $_POST['jumlah'];
        $alamat = $_POST['alamat'];

        // lalu dimsukan ke databse dengan menggunakan querry
        $query = "INSERT INTO laundry VALUES(null, '$nama', '$notelp', '$jumlah', '$alamat')";
        $sql = mysqli_query($conn, $query);


         // jika sql berhasil maka akan langsung dipindahkanm keindex.php dengan menggunakan tag header
        if($sql){
            header("location: dashboard.php");
        } else {
            echo $query;
        }
         
    }

?>