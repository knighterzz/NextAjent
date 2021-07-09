<!DOCTYPE html>
<?php

	require ('db.php');
	include ('auth_session.php');
?>
<html>
    <head>
        <meta charset="utf-8">
		<link rel="shortcut icon" type="image/x-icon" href="Group 1 (1).png" />
        <title>Fundamental - Pendaftar Kerja</title>
        <link rel="stylesheet" type="text/css" href="regpekerja.css">
    </head>

    <body>
        <header>  
            <nav></nav>
        </header>
		
        <div class="modal-content"action="#" method="POST"  style="border:1px solid #ccc">
            <div class="container">
                <h1 class="daftar" >Data Pegawai</h1>
                <p>Silahkan masukkan data yang baik dan benar</p>
                <hr>
				<form action='' method='POST'>
					<label for="datapekerja"><b>Data Pekerja</b></label>
					<input type="text" id="datapekerja" placeholder="Nama" name="datapekerja" required >

					<label for="jenispegawai"><b>Jenis Pegawai</b></label>
					<input type="text" id="jenispegawai"placeholder="Jenis" name="jenispegawai" required>
					
					<label for="jabatan"><b>Jabatan</b></label>
					<input type="text" id="jabatan"placeholder="Jabatan" name="jabatan" required>

					<label for="salary"><b>Gaji</b></label>
					<input type="text" id="salary"placeholder="Gaji" name="salary" required>
					<p>Jangan Lupa Untuk Melakukan Pengecekan Ulang.</p>

					<div class="confirm">
						<a href="../Fundamental/index.php"> <button type="button" name="cancel" class="cancelbtn">Batal</button></a>
						<button type="submit" name="submit" class="signupbtn">Input</button>
					</div>
				</form>
            </div>
        </div>
		<?php
			if (isset($_POST['submit'])) {
				$nama = $_POST['datapekerja'];
				$jenis = $_POST['jenispegawai'];
				$jabatan = $_POST['jabatan'];
				$gaji = $_POST['salary'];
				
				$sql = "INSERT INTO `pegawai` (`nama`, `jenis`, `jabatan`, `gaji`) VALUES ('".$nama."', '".$jenis."', '".$jabatan."', '".$gaji."')";
				
				$rs = mysqli_query($con, $sql);
				
				if ($rs) {
					header("location: pegawai.php");
				}
			}
		?>
        <p id ="alert"></p>
        <script src="" type="text/javascript"></script>
    </body>
</html>