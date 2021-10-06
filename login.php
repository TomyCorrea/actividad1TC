<!DOCTYPE html>
<html>
<head>
	<title>Registrarse o Entrar</title>
	<meta charset="utf-8">
</head>
<body>
	<center><h1>Iniciar Sesion</h1></center>
	<center>
<form action="iniciarsesion.php" method="get">
      <input type="text" name="usuario" placeholder="Usuario" required=>
      <input type="password" name="contrasenia" placeholder="******" required=>
      <input type="submit" value="Registrar">
    </center>
</form>
    <?php
    if(isset($_REQUEST["error"]))
    echo "El usuario o contraseñas son incorrectas";
    ?>



</body>
</html>



