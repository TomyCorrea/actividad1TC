<?php

 include"conexion.php";
 
 $sql="SELECT * FROM productos";
 $r=$conexion->query($sql);
 if(!$r){
 	echo $conexion->error;
 }

 echo "<TABLE border=1>";
 while($fila=$r->fetch_assoc()){
 	echo"<tr>";
 	echo "<td>".$fila["nombre"]."</td>";
 	echo "<td>".$fila["marca"]."</td>";
 	echo "<td>".$fila["cantidad"]."</td>";
 	echo "<td>".$fila["precio"]."</td>";
 	echo "<td><a href='eliminar.php?id=".$fila["ID"]."'>Borrar</a></td>";
 	echo "</tr>";
 }
echo"</TABLE>";