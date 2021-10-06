<?php
$nombre=$_REQUEST["nombre"];
$precio=$_REQUEST["precio"];
$cantidad=$_REQUEST["cantidad"];
$marca=$_REQUEST["marca"];
$id=$_REQUEST["id"];
include"conexion.php";
 
 $sql="UPDATE productos SET nombre='$nombre',marca='$marca',precio=$precio,cantidad=$cantidad WHERE id=$id";

 $r=$conexion->query($sql);
 if(!$r){
 	echo $conexion->error;
 	}
 	else header("location:mostrar.php");
