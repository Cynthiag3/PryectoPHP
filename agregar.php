<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<center>
<form method="POST" action="agregarproceso.php">
		
					<label for="txtNombre">Nombre: </label>
					<input type="text" name="txtNombre" id="txtNombre"><br>
				
					<label for="txtCosto">Costo: </label>
					<input type="text" name="txtCosto" id="txtCosto"><br>

				<label for="txtCbarra">	Codigo barra: </label>
				<input type="text" name="txtCbarra" id="txtCbarra"><br>
        
        <label for="txtCategoria">Categoria: </label>
					<input type="text" name="txtCategoria" id="txtCategoria"><br>


				<input type="submit" value="Agregar"><br>
        <input type="reset" name=""><br> <!--no es necesario, solo borra todos los valores del campo-->		</form>
	
	</center>
  
</body>
</html>