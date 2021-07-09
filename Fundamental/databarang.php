<!DOCTYPE html>
<?php
	require ('db.php');
	include ('auth_session.php');
?>
<html>
    <head>
        <meta charset="utf-8">
		<link rel="shortcut icon" type="image/x-icon" href="Group 1 (1).png" />
        <title>Fundamental - Stock</title>
        <link rel="stylesheet" type="text/css" href="databarang.css">
    </head>

    <body>

        <header>
            
            <nav>
                
            </nav>
            
        </header>

        
        <div class="modal-content"action="#" method="POST"  style="border:1px solid #ccc">
            <div class="container">
                <h1 class="daftar" >Data Barang</h1>
                <p>Silahkan masukkan data barang yang ingin di input</p>
                <hr>
				
				<form action='' method='POST'>
					<label for="namabarang"><b>Nama Barang</b></label>
					<input type="text" id="namabarang" placeholder="Nama Barang" name="namabarang" required >

					<label for="hargabarang"><b>Harga Barang</b></label>
					<input type="text" id="hargabarang" placeholder="Rp." name="hargabarang" required>

					<label for="tanggalbeli"><b>Tanggal Beli</b></label>
					<input type="date" id="tanggalbeli" name="tanggalbeli" required>

					<label for="tanggalexpired"><b>Tanggal Expired</b></label>
					<input type="date" id="tanggalexpired" name="tanggalexpired" required>

					<label for="keterangan"><b>Keterangan</b></label>
					<input type="text" id="keterangan" placeholder="Keterangan" name="keterangan">
					
					<p>Jangan Lupa Untuk Melakukan Pengecekan Ulang.</p>

					<div class="confirm">
						<a href="../Fundamental/pegawai.php"> <button type="button" name="cancel" class="cancelbtn">Batal</button></a>
						<button type="submit" name="submit" class="signupbtn">Input</button>
					</div>
				</form>
            </div>
        </div>
		<?php
			if (isset($_POST['submit'])) {
				$nama = $_POST['namabarang'];
				$harga = $_POST['hargabarang'];
				$beli = $_POST['tanggalbeli'];
				$expired = $_POST['tanggalexpired'];
				$keterangan = $_POST['keterangan'];
				
				$sql = "INSERT INTO `barang` (`nama`, `harga`, `beli`, `expired`, `keterangan`) VALUES ('".$nama."', '".$harga."', '".$beli."', '".$expired."', '".$keterangan."')"; 
				
				$rs = mysqli_query($con, $sql);
				
				if ($rs) {
					header("location: barang.php");
				}
			}
		?>
        <p id ="alert"></p>
        <script src="" type="text/javascript"></script>
    </body>
</html>