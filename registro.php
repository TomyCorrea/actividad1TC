<!DOCTYPE html>
<html>
<head>
	<title>Registrarse o Entrar</title>
	<meta charset="utf-8">
</head>
<body>
	<center><h1>REGISTRO</h1></center>
	<center>
<form action="guardarusuario.php" method="get">
      <input type="text" name="usuario" placeholder="Usuario" required=>
      <input type="password" name="contrasenia" placeholder="******" required=>
      <input type="submit" value="Registrar">
    </center>
</form>
    <?php
    if(isset($_REQUEST["error"]))
    echo "Lo siento maquinola, pero el usuario ya existe.Que tengas un lindo dia anachuchu";
    ?>


</body>
</html>