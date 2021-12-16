<?php
	session_start();
	
	if ($_SESSION['codigo'] == $_POST['codigo']) {
		header('Location: fim.php');
	} else {
		$_SESSION['estado'] = 3;
		header('Location: check.php');
	}


	print_r($_SESSION['codigo']);
	print_r($_POST['codigo']);
  ?>