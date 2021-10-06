<?php
$id=$_REQUEST["id"];
include"conexion.php";
 
 $sql="select * from productos WHERE id=$id";

 $r=$conexion->query($sql);
 if(!$r){
 	echo $conexion->error;
 	}
$dato=$r->fetch_assoc();
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="guardar.php" method="get">
<input type="text" name="nombre" placeholder="nombre" value="<?php echo $dato["nombre"]?>">
<input type="hidden" name="id" placeholder="nombre" value="<?php echo $dato["id"]?>">
<input type="text" name="marca" placeholder="marca" value="<?php echo $dato["marca"]?>">
<input type="number" name="precio" placeholder="precio" value="<?php echo $dato["precio"]?>">
<input type="number" name="cantidad" placeholder="cantidad" value="<?php echo $dato["cantidad"]?>">
<input type="submit" value="guardar">
</form>
</body>
</html>