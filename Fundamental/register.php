<!DOCTYPE html>
<?php
	require ('db.php');
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Fundamental - Registrasi</title>
        <link rel="stylesheet" type="text/css" href="styleregister.css">
		<link rel="shortcut icon" type="image/x-icon" href="Group 1 (1).png" />
    </head>

    <body>
        <header>
            <nav></nav>
        </header>
		
        <div class="modal-content" action="#" method="POST" style="border:1px solid #ccc">
            <div class="container">
                <h1 class="daftar" >Daftar Diri</h1>
                <p>Silahkan isi form daftar diri dibawah ini</p>
                <hr>
				<form action='' method='POST'>
					<label for="email"><b>Email</b></label>
					<input type="email" id="email" placeholder="email" name="email" required >

					<label for="nama"><b>Nickname</b></label>
					<input type="text" id="nickname"placeholder="nickname" name="nickname" required>

					<label for="nama"><b>Username</b></label>
					<input type="text" id="username" placeholder="username" name="username" required>

					<label for="email"><b>Password</b></label>
					<input onkeyup="checkpw()" type="password" id="password"placeholder="password" name="password" required>

					<label for="email"><b>Verifikasi password</b></label>
					<input onkeyup="checkpw()" type="password" id="vpassword" placeholder="verifikasi password" name="vpassword" required>

					<label>
						<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Ingat Saya
					</label>
					<p>Dengan Mengisi form diatas anda menyetujui<a href="Syarat.php" style="color:dodgerblue"> Syarat dan Ketentuan</a>.</p>

					<div class="confirm">
						<a href="../Beranda/index.php"><button type="button" class="cancelbtn">Batal</button></a>
						<button type="submit" name="submit" class="signupbtn">Daftar</button>
					</div>
				</form>

            </div>
        </div>
		<?php
			if (isset($_POST['submit'])) {
			
				$email = $_POST['email'];
				$nickname = $_POST['nickname'];
				$username = $_POST['username'];
				$password = $_POST['password'];
				
				$sql = "INSERT INTO user (email, nickname, username, password) VALUES ('".$email."', '".$nickname."',  '".$username."',  '".$password."')";
				
				$rs = mysqli_query($con, $sql);
				
				if ($rs) {
					header("location: login.php");
				}
			
			}
		?>
        <p id ="alert"></p>
        <script src="scriptregister.js" type="text/javascript"></script>
    </body>

</html>