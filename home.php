<?php

session_start();
if (isset($_SESSION['nombre'])){
		if($_SESSION['usuario'] !=2){
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


	<center>
	<h1>Bienvenido (a)  <?php echo $_SESSION['nombre']?></h1>

		<a href="cerrar.php">Cerrar sesion</a>
		<h3>Lista de Productos</h3><br>

    <a href="agregar.php">Agregar nuevo</a> <br><br>
		
		<a href="archivo.php">Descargar</a>
	<!--<img src="archivo.png" weight="20px" height="20px">-->

		<table>
			<tr>
				<td>id producto</td>
				<td>Nombre</td>
				<td>Costo</td>
				<td>Codigo Barra</td>
				<td>Categoria</td>
        <td>Editar</td>
        <td>Eliminar</td>
			</tr>

			
			<?php 
					require 'conexion.php';

	          $qry = $link->prepare("SELECT * FROM productos");
            $qry -> execute(); 
	        	$row = $qry->fetchAll(PDO::FETCH_OBJ);
            //print_r($row);
				
          
				foreach ($row as $dato) {
				?>	
         
					<tr> <!--crear fila-->
						<td><?php echo $dato->id_producto; ?></td> <!--llena primera columana-->
						<td><?php echo $dato->nombre; ?></td><!--llena 2 columana-->
						<td><?php echo $dato->costo; ?></td><!--llena 3 columana-->
						<td><?php echo $dato->codigo_barra; ?></td><!--llena 4 columana-->
						<td><?php echo $dato->categoria; ?></td><!--llena 5 columana-->
						<td><a href="editar.php?id=<?php echo $dato->id_producto ?>">Editar</a></td>
						<td><a href="eliminar.php?id=<?php echo $dato->id_producto ?>">Eliminar</a></td>
					</tr>
					<?php
				}
			?>
		</table>
		
  

</body>
</html>