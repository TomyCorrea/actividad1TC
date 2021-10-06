<?php
$usuario=$_REQUEST["usuario"];
$contrasenia=$_REQUEST["contrasenia"];


 include"conexion.php";

 $sql ="SELECT * FROM usuarios WHERE usuario = '$usuario'";
 if($r = $conexion->query($sql)){
 if($r->num_rows>0){
 	header("location:registro.php?error");
 }
 else{
 
 $sql="insert into usuarios(usuario,contrasenia) value('$usuario','$contrasenia')";
 $r=$conexion->query($sql);
 if(!$r){
 	echo $conexion->error;
 }
 else{
 	//header("location:registro.html");
 }
}
}
 ?>