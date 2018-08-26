<?php
extract($_REQUEST);
if (!isset($_REQUEST['x']))
	$x=0;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Centro Medico</title>
</head>

<body>

<br>
<br>
<form id="form1" name="form1" method="post" action="ValidarSesion.php">
  <table width="31%" border="0" align="center">
    <tr bgcolor="#FA8072">
      <td colspan="2" align="center" bgcolor="#FA8072" class="texto" >Inicio Sesión</td>
    </tr>
    <tr>
      <td width="39%" align="right">Login</td>
      <td width="61%"><label for="Login"></label>
      <input name="Login" type="text" id="Login" size="40" required/></td>
    </tr>
    <tr>
      <td align="right">Password:</td>
      <td><label for="Password"></label>
      <input name="Password" type="Password" id="Password" size="40" required/></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#5B2C6F"><input type="submit" name="button" id="button" value="Enviar" /></td>
    </tr>
  </table>
</form>

<?php

if ($x==1)
	echo "<br><p align='center'> Usuario no registrado con los datos ingresados, vuelva a intentar";
if ($x==2)
	echo "<br><p align='center'> Deben Iniciar Sesión para poder ingresar a la Aplicación";
if ($x==3)
	echo "<br><p align='center'> El Usuario ha cerrado la Sesión";
?>


</body>
</html>
