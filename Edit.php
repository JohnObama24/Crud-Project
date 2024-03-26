<?php
    include 'koneksi.php';

    // mengambi l data id dari url dengan metode GET
    $id = $_GET["id"];

    // mengambil semua data dari tabel laundry dimana yg dipilih sama dengan idnya
    $query = "SELECT * FROM laundry WHERE id = '$id';";
    // query ini dieksekusi di variabel sql
    $sql = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($sql);

    // memanggil kolom
    $nama = $result['nama'];
    $notelp = $result['notelp'];
    $jumlah = $result['jumlah'];
    $alamat = $result['alamat'];


    // mengecek apakah di edit ada isinya
    if(isset($_POST['edit'])){
        // mengambil data post 
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $notelp = $_POST['notelp'];
        $jumlah = $_POST['jumlah'];
        $alamat = $_POST['alamat'];

        // membuat querry update 
        $query = "UPDATE laundry SET nama='$nama', notelp='$notelp', jumlah='$jumlah', alamat='$alamat' WHERE id = '$id';";
        $sql = mysqli_query($conn, $query);

        // jika sql berhasil maka akan langsung dipindahkanm keindex.php dengan menggunakan tag header
        if($sql){
            header("location: dashboard.php");
        } else {
            echo $query;
        }
         
    }







?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<h1>EDIT DATA</h1>
<form action="" method="POST">
<div>
<div class="mb-3 mt-5 ms-5">
    <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $result['id']; ?>">
    </div>
    <div class="mb-3 mt-5 ms-5">
    <label for="nama" class="form-label">masukan nama</label>
    <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $result['nama']; ?>">
    </div>
    <div class="mb-3 ms-5">
    <label for="notelp" class="form-label">no telpon</label>
    <input type="text" name="notelp" class="form-control" id="notelp" value="<?php echo $result['notelp']; ?>">
    </div>
    <div class="mb-3 ms-5">
    <label for="jumlah" class="form-label">jumlah</label>
    <input type="text" name="jumlah" class="form-control" id="jumlah" value="<?php echo $result['jumlah']; ?>">
    </div>
    <div class="mb-3 ms-5">
    <label for="alamat" class="form-label">Alamat</label>
    <textarea name="alamat" class="form-control" id="alamat" rows="3" ><?php echo $result['alamat']; ?></textarea>
    </div>
</div>

<div class="col ms-5">
    <button type="submit" name="edit" class="btn btn-success btn-sm">simpan perubahan</button>
    <a href="index.php"><button type="button" class="btn btn-danger btn-sm">batal</button></a>
</div>
</form>


</body>
</html>