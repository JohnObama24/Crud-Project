<?php 

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'devactocrud';
    $conn = mysqli_connect($host, $user, $pass, $db);
    
?>
<!-- ini untuk membuat koneksi ke database, agar lebih simpel dimasukan ke variabel agar saat memanggil koneksi cukup dengan memanggil nama variabelnya saja -->