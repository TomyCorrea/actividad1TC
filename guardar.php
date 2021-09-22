<?php
$nombre=$_REQUEST["nombre"];
$precio=$_REQUEST["precio"];
$cantidad=$_REQUEST["cantidad"];
$marca=$_REQUEST["marca"];

 include"conexion.php";
 
 $sql="insert into productos (nombre,precio,marca,cantidad)values('$nombre',$precio,$marca,'$cantidad')";
 $r=$conexion->query($sql);
 if(!$r){
 	echo $conexion->error;
 }