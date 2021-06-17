<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="funcion.js"></script>
	<title>Manejo de sesiones</title>
</head>

<body>
	<?php

	session_start();
	if (isset($_SESSION["name"])) {
		echo "<h1 align='center'>Use Ajax with Jquery in PHP to check Session Expired</h1>";
		echo "<h1 align='center'>" . $_SESSION["name"] . "</h1>";
		echo "<p align='center'><a href='logout.php'>Logout</a></p>";
	} else {
		header('location:login.php');
	}


	?>
</body>

</html>