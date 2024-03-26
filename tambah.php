<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

<form action="aksiTambah.php" method="POST">

<div>
    <div class="mb-3 mt-5 ms-5">
    <label for="nama" class="form-label">masukan nama</label>
    <input type="text" name="nama" class="form-control" id="nama" placeholder="Ex: Agus">
    </div>
    <div class="mb-3 ms-5">
    <label for="notelp" class="form-label">no telpon</label>
    <input type="text" name="notelp" class="form-control" id="notelp" placeholder="Ex: 088888888">
    </div>
    <div class="mb-3 ms-5">
    <label for="jumlah" class="form-label">jumlah</label>
    <input type="text" name="jumlah" class="form-control" id="jumlah" placeholder="dalam jumlah kilogram (KG)">
    </div>
    <div class="mb-3 ms-5">
    <label for="alamat" class="form-label">Alamat</label>
    <textarea name="alamat" class="form-control" id="alamat" rows="3"></textarea>
    </div>
</div>

<div class="col ms-5">
    <button type="submit" name="tambah" class="btn btn-success btn-sm">tambah</button>
    <a href="dashboard.php"><button type="button" class="btn btn-danger btn-sm">batal</button></a>
</div>
</form>


</body>
</html>