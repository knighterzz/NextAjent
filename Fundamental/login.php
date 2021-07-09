<!DOCTYPE html>
<html lang="en">
<?php
	require ('db.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="Group 1 (1).png" />
    <title>Fundamental - Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylelogin.css">
	
    
</head>
<body>
    <div class="main-container">
        <div class="form-container">
            <div class="form-body">
                <div class="loginForm">
                    <center><img id="profile" class="profile" src="Group 1 (1).png" alt="Profile Picture"
					width="100" height="100"></center>

                <form action="" method="POST" class="the-form">

                    <label for="nama">Username</label>
                    <input type="username" name="username" id="username" placeholder="Enter your username" required>

                    <label for="password">Password</label>
					<input type="password" name="password" id="password" placeholder="Enter your password" required>
					
                    <button type="submit" name="submit" class="signupbtn"></a>Login</button>
                </form>
				</div>

				<div class="form-footer"> 
					<div>
						<span>Don't have an account?</span> <a href="register.php">Sign Up</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		session_start();
		if (isset($_POST['username'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$rs = mysqli_query($con, "SELECT * FROM `user` WHERE username='$username' AND password='$password'");
			$row = mysqli_num_rows($rs);
			
			if($row == 1) {
				$data = mysqli_fetch_assoc($rs);
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				$_SESSION['id_login'] = $data['id'];
				
				header("location: index.php");
			}
		}
	?>
</body>
</html>