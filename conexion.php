<?php

$link=new PDO('mysql:host=localhost;port=3306;dbname=proyectophp','root','mysql');


$link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
/*
if(!$link){
  echo "Error de coneccion!";
}
else{
 echo "<h1>Coneccion exitosa!! :)</h1>";
}
*/
?>