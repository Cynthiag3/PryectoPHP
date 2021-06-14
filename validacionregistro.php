<?php

require 'conexion.php';

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$pass=$_POST['pass'];
//$user=$_POST['user'];

$pass=password_hash($pass, PASSWORD_DEFAULT);


$qry= $link->prepare("INSERT INTO usuarios (nombre,correo,contrasena)VALUES (?,?,?);");

$qry -> execute([$nombre,$correo,$pass]);

if($qry->rowCount()==0){
  echo "Registro fallo!";
}
  else if($qry->rowCount()==1){
    //echo "Registro exitoso!";
    header('Location: login.php');
  }
 

?>