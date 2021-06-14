<?php
require 'conexion.php';

$id = $_GET['id'];

		$qry = $link->prepare("SELECT * FROM productos WHERE id_producto = ?");
		$qry->execute([$id]);
		$row = $qry->fetch(PDO::FETCH_OBJ);
		//print_r($qry);

  ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Editar</title>
	</head>
	<body>		
<center>
	<h1>Editar</h1>
	<form method="POST" action="editarproceso.php">
			
					<input type="hidden" name="txtid_producto" value="<?php  echo $row->id_producto ?>"><br>

					<label for="txtNombre">Nombre:</label>
					<input type="text" name="txtNombre" id="txtNombre" value="<?php  echo $row->nombre ?>"><br>
				
					<label for="txtCosto">Costo:</label> 
					<input type="text" name="txtCosto" id="txtCosto" value="<?php  echo $row->costo ?>"><br>

					<label for="txtCbarra">Codigo barra:</label> 
				<input type="text" name="txtCbarra" id="txtCbarra" value="<?php  echo $row->codigo_barra ?>"><br>
        
        <label for="txtCategoria">Categoria:</label>
					<input type="text" name="txtCategoria" id="txtCategoria" value="<?php  echo $row->categoria?>"><br><br>

			

				<input type="submit" value="Editar" value=""><br>

			</form>
		</center>
	</body>
	</html>