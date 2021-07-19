<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="image/x-icon" href="Group 1 (1).png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styleIndex.css">  
    <script src="https://kit.fontawesome.com/c424c66699.js" crossorigin="anonymous"></script>
    <title>Fundamental - Modal</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#"><b>Fundamental</b></a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
        </form>
        <div class="icon ml-3">
          <h5>
            <i class="fas fa-bell mr-3 text-white" data-toggle="tooltip" title="Pemberitahuan"></i>
            <i class="fas fa-sign-out-alt mr-3 text-white" data-toggle="tooltip" title="Keluar"></i>
          </h5>
        </div>
      </div>
    </nav>
    <div class="row no-gutters">
      <div class="col-md-2 bg-secondary pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
          <li class="nav-item">
            <a class="nav-link active text-white" href="index.php"><i class="fas fa-columns mr-3"></i>Dashboard</a><hr class="bg-light">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="laporan.php"><i class="fas fa-book mr-3"></i>Laporan</a> <hr class="bg-light">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="barang.php"><i class="fas fa-boxes mr-3"></i>Data Barang</a> <hr class="bg-light">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="pegawai.php"><i class="fas fa-address-card mr-3"></i>Data Pegawai</a> <hr class="bg-light">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="pelanggan.php"><i class="fas fa-credit-card mr-3"></i>Data Pelanggan</a> <hr class="bg-light">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="bantuan.php"><i class="fas fa-question-circle mr-3"></i>Bantuan</a> <hr class="bg-light">
          </li>
        </ul>
      </div>
      <div class="col-md-10 p-5 pt-2">
         <h3><i class="fas fa-boxes mr-3"></i></i>Data Barang</h3><hr>
         <a href="databarang.php" class="btn btn-primary mb-3"><i class="fas fa-box-open mr-2"></i>TAMBAH DATA BARANG</a>
         <table class="table table-striped table-bordered text-center">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">NAMA BARANG</th>
                <th scope="col">KODE BARANG</th>
                <th scope="col">STOK</th>
                <th scope="col">SATUAN</th>
                <th scope="col">EXPIRED</th>
                <th scope="col">HARGA BELI</th>
                <th colspan="2" scope="col">AKSI</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>SUSU</td>
                <td>001</td>
                <td>1</td>
                <td>PCS</td>
                <td>12-10-2020</td>
                <td>1000000</td>
                <td><i class="fas fa-edit bg-success p-3 text-white rounded" data-toggle="tooltip" title="Ubah"></i></td>
                <td><i class="fas fa-trash bg-danger p-3 text-white rounded" data-toggle="tooltip" title="hapus"></i></td>
              </tr>
              <tr>
               <th scope="row">2</th>
                <td>KOPI</td>
                <td>002</td>
                <td>1</td>
                <td>KG</td>
                <td>12-11-2020</td>
                <td>100000</td>
                <td><i class="fas fa-edit bg-success p-3 text-white rounded" data-toggle="tooltip" title="Ubah"></i></td>
                <td><i class="fas fa-trash bg-danger p-3 text-white rounded" data-toggle="tooltip" title="hapus"></i></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>SUGAR</td>
                <td>003</td>
                <td>1</td>
                <td>GRAM</td>
                <td>12-11-2020</td>
                <td>10000</td>
               <td><i class="fas fa-edit bg-success p-3 text-white rounded" data-toggle="tooltip" title="Ubah"></i></td>
                <td><i class="fas fa-trash bg-danger p-3 text-white rounded" data-toggle="tooltip" title="hapus"></i></td>
              </tr>
            </tbody>
          </table>
      </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="scriptIndex.js"></script>
  </body>
</html>