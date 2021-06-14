<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
</head>
<body>
  

<form action="validacionregistro.php" method="POST">

    <label for="nombre">Nombre: </label>
    <input type="text" name="nombre" id="nombre"><br>

    <label for="correo">Correo: </label>
    <input type="email" name="correo" id="correo"><br>

    <label for="pass">Contraseña: </label>
    <input type="password" name="pass" id="pass"><br>

    <!--<label for="pass">Usuario: </label>
    <input type="text" name="user" id="user"><br>-->

    <input type="submit" value="Registrarme"><br>


</form>

</body>
</html>