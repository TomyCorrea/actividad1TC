<?php
$conexion=new mysqli("localhost","root","","basedeltomy");
 if($conexion->connect_error) {
  echo $conexion->connect_error;
}