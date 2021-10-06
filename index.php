<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	session_start();
	if(!isset($_SESSION["usuario"])){
		header("location:login.php");
	}
	echo "Hola, ".$_SESSION["usuario"]." estas registrado en la pagina";
	echo "<h3><a href='cerrar_session.php'><i class='fasfa-door-open'></i>Cerrar</a></h3>";
	?>

</body>
</html>