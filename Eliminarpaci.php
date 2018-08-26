<?php
require "BaseDatosCentroMedico.php";
extract ($_REQUEST);

$objConexion = Conectarse();

$sql="delete from pacientes where IdPaciente = '$_REQUEST[IdPaciente]'";

$resultado = $objConexion-> query($sql);

if ($resultado)
	header("location:VISTAPRINCIPAL.PHP?pg=listarpacientes&x=4");  //x=3 quiere decir que se eliminó bien
else
	header("location:VISTAPRINCIPAL.PHP?pg=listarpacientes&x=5");  
?>


