<!doctype html>
<?php
	include ("auth_session.php");
	require ("db.php");

	$pemasukan = mysqli_query($con, "SELECT SUM(menu.harga) FROM transaksi JOIN menu ON (transaksi.id_menu = menu.id)");
	$mas = mysqli_fetch_assoc($pemasukan);

	$pengeluaran = mysqli_query($con, "SELECT SUM(barang.harga) FROM barang");
	$kel = mysqli_fetch_assoc($pengeluaran);

	$rerata = mysqli_query($con, "SELECT AVG(menu.harga) FROM transaksi JOIN menu ON (transaksi.id_menu = menu.id);");
	$rat = mysqli_fetch_assoc($rerata);

	$untung = mysqli_query($con, "SELECT SUM(menu.harga)-SUM(menu.hpp) FROM transaksi JOIN menu ON (transaksi.id_menu = menu.id)");
	$unt = mysqli_fetch_assoc($untung);

	$penjualan = mysqli_query($con, "SELECT COUNT(*) FROM transaksi");
	$pen = mysqli_fetch_assoc($penjualan);

	$trendmenu = mysqli_query($con, "SELECT transaksi.id_menu, COUNT(transaksi.id), menu.nama FROM transaksi JOIN menu ON (transaksi.id_menu = menu.id) GROUP BY transaksi.id_menu ORDER BY COUNT(transaksi.id) DESC LIMIT 1");
	$men = mysqli_fetch_assoc($trendmenu);
?>
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
    <!--Line Chart-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2013',  1000,      400],
          ['2014',  1170,      460],
          ['2015',  660,       1120],
          ['2016',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    <!--End ofLine Chart-->
    <title>Fundamental - Dashboard</title>
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
			<a href="logout.php" class="fas fa-sign-out-alt mr-3 text-white" data-toggle="tooltip" title="Keluar"></a>
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
         <h3><i class="fas fa-columns mr-3"></i>DASHBOARD</h3><hr>
         <div class="row text-white">
           <div class="card bg-info ml-3" style="width: 18rem;">
              <div class="card-body">
                <div class="card-body-icon"><i class="fas fa-coins"></i></div>
                <h5 class="card-title">PENJUALAN BULAN INI</h5>
                <div class="isiTotal"><?= "Rp. " . number_format($mas['SUM(menu.harga)'], 0, '', '.'); ?></div>
                <a href="lihatdetailpemasukan.php" class=""><p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right ml-1"></i></p></a>
              </div>
            </div>
            <div class="card bg-danger ml-3" style="width: 18rem;">
              <div class="card-body">
                <div class="card-body-icon"><i class="fas fa-hand-holding-usd"></i></div>
                <h5 class="card-title">PENGELUARAN BULAN INI</h5>
                <div class="isiTotal"><?= "Rp. " . number_format($kel['SUM(barang.harga)'], 0, '', '.'); ?></div>
                <a href="barang.php" class=""><p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right ml-1"></i></p></a>
              </div>
            </div>
            <div class="card bg-success ml-3" style="width: 18rem;">
              <div class="card-body">
                <div class="card-body-icon"><i class="fas fa-money-bill-wave"></i></div>
                <h5 class="card-title">KEUNTUNGAN BULAN INI</h5>
                <div class="isiTotal"><?= "Rp. " . number_format($unt['SUM(menu.harga)-SUM(menu.hpp)'], 0, '', '.') ?></div>
              </div>
            </div>
         </div>

         <div class="row mt-4 text-white">
           <div class="card bg-info ml-3 " style="width: 18rem;">
              <div class="card-body">
                <div class="card-body-icon"><i class="fas fa-search-dollar"></i></div>
                <h5 class="card-title">RATA-RATA PEMASUKAN BULAN INI</h5>
                <div class="isiTotal"><?= "Rp. " . number_format($rat['AVG(menu.harga)'], 0, '', ".") ?></div>
              </div>
            </div>
            <div class="card bg-warning ml-3" style="width: 18rem;">
              <div class="card-body">
                <div class="card-body-icon"><i class="fab fa-elementor"></i></div>
                <h5 class="card-title">JUMLAH PEMBELI BULAN INI</h5>
                <div class="isiTotal"><?= $pen['COUNT(*)']; ?> ORANG</div>
              </div>
            </div>
            <div class="card bg-success ml-3" style="width: 18rem;">
              <div class="card-body">
                <div class="card-body-icon"><i class="fas fa-person-booth"></i></div>
                <h5 class="card-title">FAVORIT BULAN INI</h5>
                <div class="isiTotal"><?= $men['nama']; ?></div>
              </div>
            </div>
         </div>
         <div class="row mt-4">
          <h3>Grafik Keungan</h3>
           <div id="chart_div" style="width: 900px; height: 600px;"></div>
         </div>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="scriptIndex.js"></script>
  </body>
</html>
