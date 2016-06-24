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
$identifiacion = $_POST['identificacion'];

$sql = "INSERT INTO 
  dbo.usuarios
(
  codigo_usuario,
  nombre,
  direccion,
  sexo,
  correo,
  [login],
  clave,
  identificacion
  
 
) 
VALUES (
 '$codusu',
 '$nombre',
 '$direccion',
 '$sexo',
 '$correo',
 '$login',
 '$clave',
 '$identifiacion'

)";

$res=ejecutar_query($sql,$link);



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php 
if ($res){
	echo '<h1>Datos registrados correctamente</h1>';
}else{
	header("Location: afiliate.php");
	
}


?>



<p><a href="index.php">Volver a pagina principal</a>

?>