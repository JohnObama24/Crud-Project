<?php
  // menyambungkan dengan database
    include 'koneksi.php';

    // kita pakai kode querry dimana artinya pilih semua dari table  laundry
    $querry = "SELECT * FROM laundry;";
    // lalu kode querry tadi dijalankan dan dimasukkan ke variabel sql
    $sql = mysqli_query($conn, $querry );

    // membuat variabel no untuk nomor disamping tabel
    $no = 1;
    
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
<!-- link -->
<link 
    rel="stylesheet" href="styling/dashboard.css" /><link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
    <!-- utama atau nav nya -->
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="main">
            <li class="aktif">
                <a href="#">
                    <i class="fa-solid fa-gauge-simple"></i>
                    <span> Dashboard</span>
                </a>
            </li>
            <li>
                <a href="credits.php">
                    <i class="fa-solid fa-wrench"></i>
                    <span>Contribute</span>
                </a>
            </li>
                <li class="logout">
                <a href="index.php">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Kembali</span>
                </a>
            </li>
        </ul>
    </div>


<!-- nav bagian kedua -->
    <div class="main--content">
        <div class="header--warper">
            <div class="header--title">
                <span>LAUNDRY</span>
                <h2>Dashboard</h2>
            </div> 
            <div>
            <a href="tambah.php"><button class="btn_tambah"><button type="button" class="btn btn-outline-primary">Tambah Data</button></a>
            </div>
<!-- kotak 1 -->
        <div class="card--contain">
            <div class="card--warper">
                <div class="card--payment light-red">
                    <div class="card--header">
                        <div class="biaya">
                            <span class="title">Biaya per KG</span>
                            <span class="total-biaya">Rp.10000</span>
                        </div>
                        <i class="fa-solid fa-dollar-sign"></i>
                    </div>
                </div>
            <!-- kotak 2 -->
                <div class="card--payment light-purple">
                    <div class="card--header">
                        <div class="biaya">
                            <span class="title">Jumlah Mesin Cuci</span>
                            <span class="total-biaya">10</span>
                        </div>
                        <i class="fa-solid fa-bars dark-purple"></i>
                    </div>
                </div>
            <!-- kotak 3 -->
                <div class="card--payment light-blue">
                    <div class="card--header">
                        <div class="biaya">
                            <span class="title">Jadwal Buka</span>
                            <span class="total-biaya">07.00 - 20.00</span>
                        </div>
                        <i class="fa-solid fa-check dark-blue"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="tabular--warper">
            <h3 class="main--title">Data</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nomor Telepon</th>
                            <th>Jumlah(Kg)</th>
                            <th>alamat</th>
                            <th>aksi</th>
                        </tr>
                        <tbody>
                            <!-- kita looping, selamat masih ada isinya di databse maka isi table akan nambah terus -->
                        <?php
                            while($result = mysqli_fetch_assoc($sql)){
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $result['nama']; ?></td>
                                    <td><?php echo $result['notelp']; ?></td>
                                    <td><?php echo $result['jumlah']; ?> kg</td>
                                    <td><?php echo $result['alamat']; ?></td>
                                    <td>
                                    <a href="hapus.php?id=<?= $result["id"]; ?>" <button type="button" class="btn btn-danger" onclick="return confirm('Yakin mau Hapus?')">Hapus</button></a>
                                    <a href="Edit.php?id=<?= $result["id"]; ?>"><button type="button" class="btn btn-success">Edit</button></a>
                                    </td>
                                </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</body>
</html>