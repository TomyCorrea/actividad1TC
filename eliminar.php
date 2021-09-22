<?php
$id=$_REQUEST["id"];
include"conexion.php";
 
 $sql="DELETE FROM productos WHERE id=$id";

 $r=$conexion->query($sql);
 if(!$r){
 	echo $conexion->error;
 	}
 	else header("location:mostrar.php");
