<?php
require_once 'koneksi.php';

$data = mysqli_query($koneksi, 'SELECT * FROM mahasiswa');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>

    <title>IKI-Data Mahasiswa</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-">
        <div class="container">
          <a class="navbar-brand" href="#">Mahasiswa</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Mahasiswa</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Data Mahasiswa</h1>
                <a href="create.php"class="btn btn btn-info mb-2">Tambah Data</a>
            </div>
        </div>
        
        <div class="col">
            <div class="col-md-8">
                <div class="table-responsive">
                <table class="table align-middle table-bordered table-hover">
                <thead>
                    <th><center>No</center></th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php
                    // <?php echo -> ?=
                    $no = 1; 
                    while($mahasiswa = mysqli_fetch_assoc($data)) : ?>
                        
                    <tr class="align-top">
                        <td><center><?= $no ?></center></td>  
                        <td><?php echo $mahasiswa['nama']?></td>
                        <td><?php echo $mahasiswa['nim']?></td>
                        <td>
                            <button class="btn btn-sm btn-info">Detail</button>
                            <button class="btn btn-sm btn-warning">Edit</button>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    
                    </tr>
                    <?php 
                    $no++;
                    endwhile; ?>
                </tbody>
                </table>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>