<!DOCTYPE html>
<?php
	require ('db.php');
	include ('auth_session.php');
?>
<html>
    <head>
        <meta charset="utf-8">
		<link rel="shortcut icon" type="image/x-icon" href="Group 1 (1).png" />
        <title>Fundamental - Membership</title>
        <link rel="stylesheet" type="text/css" href="regmember.css">
    </head>

    <body>
        <header>
            <nav></nav>
        </header>
        <div class="modal-content"action="#" method="POST"  style="border:1px solid #ccc">
            <div class="container">
                <h1 class="daftar" >Data Member</h1>
                <p>Silahkan masukkan data yang baik dan benar</p>
                <hr>
				
				<form action='' method='POST'>
					<label for="namapelanggan"><b>Nama Pelanggan</b></label>
					<input type="text" id="namapelanggan" placeholder="Nama" name="namapelanggan" required >

					<label for="notelp"><b>No.Telefon</b></label>
					<input type="text" id="notelp" placeholder="Number" name="notelp" required >

					<div include="form-input-select()">
						<select name="member" id="member" required>
						    <option value="" hidden>Member Type</option>
							<option value="1">Gold</option>
							<option value="2">Platinum</option>
							<option value="3">Diamond</option>
							<option value="4">Immortal</option>
							<option value="5">Radiant</option>
						</select>
					</div>
						
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
				$nama = $_POST['namapelanggan'];
				$nohp = $_POST['notelp'];
				$member = $_POST['member'];
				
				$sql = "INSERT INTO `member` (`nama`, `nohp`, `jenis`) VALUES ('".$nama."', '".$nohp."', '".$member."')";
				
				$rs = mysqli_query($con, $sql);
				
				if ($rs) {
					header("location: pelanggan.php");
				}
			}
		
		?>
        <p id ="alert"></p>
        <script src="" type="text/javascript"></script>
    </body>
</html>