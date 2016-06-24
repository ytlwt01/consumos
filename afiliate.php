<!DOCTYPE html>
<html>
<head>
	<title>afiliate</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<h1>Registrate aqui:</h1>


<form id="form1" name="form1" method="post" action="entrada.php">
<table width="350" height="98" border="1">
         <tr>
      <td height="23" colspan="2" bgcolor="#66FF00"> <div align="center"><strong>LOGIN</strong></div></td>
    </tr>
    <tr>
     <td width="89" height="20" bgcolor="#66FF00"><div align="center"><strong>Usuario:</strong></div></td>
      <td width="197"><input name="login" type="text" id="login" value="<?php  echo $login; ?>" required /></td>
    </tr>
    <tr>
     <td height="26" bgcolor="#66FF00"><div align="center"><strong>Contraseña:</strong></div></td>
      <td><input type="password" name="clave" id="clave" required/></td>
    </tr>
    <tr>
      <td colspan="2" align="center" valign="middle"><p>
        <input type="submit" name="Entrar" id="Entrar" value="Entrar" />
      </p>
        <p><font color="#FF0000" size="2" face="Arial, Helvetica, sans-serif">
          <?php if ($login == 1){echo "USUARIO NO EXISTE"; }  ?>
        </font> </p></td>
    </tr>
          </table>
          
       
      
     

      </form>
</body>
</html>