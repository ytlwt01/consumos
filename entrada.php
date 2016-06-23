<?php 
include('lib/funciones.php');
$link=db_conectar();


$login = $_POST['login'];
$clave = $_POST['clave'];


session_start();
if (session_is_registered("vs")==false){
		$sql="select identificacion,nombre from usuarios where login='$login'
     and clave='$clave'  ";	
		$res=ejecutar_query($sql,$link);
		//echo $sql;
		//die;
		
		if(mssql_num_rows($res)){		
			$row=traer_fila($res);
			session_register("varocu");
			$_SESSION["vs"] ='1';			
			$varocu=$row[0];
      
		}else
		{
      $_SESSION["vs"]=false;
			session_destroy();
			header("Location: index.php?identificacion=$login");
			exit;
		}
}
if(isset($_REQUEST['vSalir'])){
  $_SESSION["vs"]=false;
	session_destroy();
			header("Location: index.php?identificacion=$login");
	exit;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<p>&nbsp;</p>
<p><a href="usuarios.php">USUARIOS</a>
<?php 
$sql="
SELECT 
  nombre,
  direccion,
  sexo,
  correo
FROM 
  dbo.usuarios where identificacion='$varocu'";

$res=ejecutar_query($sql,$link);
$row=traer_fila($res);

?>


</p>
<table width="375" border="1">
  <tbody>
    <tr>
      <td width="100">nombre</td>
      <td width="259"><?php 
echo $row[0];

?></td>
    </tr>
    <tr>
      <td>direccion</td>
      <td><?php 
echo $row[1];

?></td>
    </tr>
    <tr>
      <td>sexo</td>
      <td><?php 
echo $row[2];

?></td>
    </tr>
    <tr>
      <td>correo</td>
      <td><?php 
echo $row[3];

?></td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><a href="entrada.php?vSalir=1">cerrar Sessión</a></p>
</body>
</html>