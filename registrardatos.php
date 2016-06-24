<?php 
include('lib/funciones.php');
$link=db_conectar();

$codusu= $_POST['codusu'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$sexo = $_POST['sexo'];
$correo = $_POST['correo'];
$login = $_POST['login'];
$clave = $_POST['clave'];
<<<<<<< HEAD
$identifiacion = $_POST['identificacion'];
=======
>>>>>>> 4afa332d1fee22086a5e8c740ad9c33eda5d4926

$sql = "INSERT INTO 
  dbo.usuarios
(
  codigo_usuario,
  nombre,
  direccion,
<<<<<<< HEAD
  sexo,
  correo,
  [login],
  clave,
  identificacion
  
=======
  correo,
  [login],
  clave,
  sexo,
>>>>>>> 4afa332d1fee22086a5e8c740ad9c33eda5d4926
 
) 
VALUES (
 '$codusu',
 '$nombre',
 '$direccion',
 '$sexo',
 '$correo',
 '$login',
<<<<<<< HEAD
 '$clave',
 '$identifiacion'

)";

$res=ejecutar_query($sql,$link);
=======
 '$clave'

)";

ejecutar_query($sql,$link);
>>>>>>> 4afa332d1fee22086a5e8c740ad9c33eda5d4926



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<<<<<<< HEAD
<?php 
if ($res){
	echo '<h1>Datos registrados correctamente</h1>';
}else{
	header("Location: afiliate.php");
	
}


?>



=======

<h1>Datos registrados correctamente</h1>
>>>>>>> 4afa332d1fee22086a5e8c740ad9c33eda5d4926
<p><a href="index.php">Volver a pagina principal</a>

?>