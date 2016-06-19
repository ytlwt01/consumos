<?php

include('lib\funciones.php');


$conexion= db_conectar();



$sql="INSERT INTO 
  dbo.marcas
(
  codigo_marca,
  nombre
) 
VALUES (
  1,'Coca-Cola'
  
); ";

ejecutar($sql,$conexion);

?>