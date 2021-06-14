<?php
session_start();
if(isset($_SESSION['usuario'])){
  switch($_SESSION['usuario']){
                case 1:
                    header('location: admin.php');
                break;
                case 2:
                header('location: home.php');
                break;
                }
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

<form method="POST" action="validarlogin.php">

    <label for="email">Email: </label>
    <input type="email" name="email" id="email"><br>

    <label for="pass">Contraseña: </label>
    <input type="password" name="pass" id="pass"><br>

    <input type="submit" value="Iniciar sesion"><br>

  </form>
  
</body>
</html>

