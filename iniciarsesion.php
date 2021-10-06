<?php
$usuario=$_REQUEST["usuario"];
$contrasenia=$_REQUEST["contrasenia"];


 include"conexion.php";

 $sql ="SELECT * FROM usuarios WHERE usuario = '$usuario' and contrasenia ='$contrasenia'";
 if($r = $conexion->query($sql)){
 if($r->num_rows>0){
 	session_start ();
 	$_SESSION["usuario"]=$_REQUEST["usuario"];
 } else{
 	header("location:login.php?error");
 }
 }
