<?php
	session_start();
	if (session_destroy()) {
		header("location: ../Beranda/index.php");
	}
?>