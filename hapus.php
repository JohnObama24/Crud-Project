<?php
include 'koneksi.php';

// mendapatkan id dengan metode get 
$id = $_GET["id"];

// query ini berisi hapus semua dari tabel laundry dimana idnya sama dengan id yg kita pilih
$query = "DELETE FROM laundry WHERE id = '$id';";
// query ini dieksekusi di variabel sql
$sql = mysqli_query($conn, $query);


if($sql){
    header("location: dashboard.php");
} else {
    echo $query;
}
?>