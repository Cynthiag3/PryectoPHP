<?php
session_start();

if (isset($_SESSION['nombre'])){
		if($_SESSION['usuario'] !=1){
       header('Location: login.php');
    }
	}
  else {
    header('Location: login.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <h1> Esta es la pag de Administrador</h1>

  <a href="cerrar.php">cerrar sesion</a>

</body>
</html>
