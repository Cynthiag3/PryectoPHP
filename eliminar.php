<?php
	include 'conexion.php';


$id = $_GET['id'];
	$qry = $link->prepare("DELETE FROM productos WHERE id_producto = ?;");
	 $qry->execute([$id]);

   
	if($qry->rowCount()==1){
  //echo "Elimino exitosamente!";
  header("Location: home.php");
}
  else {
    echo "Fallo la eliminacion!";
  //header("Location: home.php");
  }
  ?>