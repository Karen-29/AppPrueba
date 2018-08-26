<?php
require "BaseDatosCentroMedico.php";
extract ($_REQUEST);
$objConexion=Conectarse();

$sql="update pacientes set PacIdentificacion='$_REQUEST[identificacion]', PacNombres = '$_REQUEST[nombre]', 

PacApellidos = '$_REQUEST[apellidos]', PacFechaNacimiento = '$_REQUEST[fechadenacimiento]', pacSexo = '$_REQUEST[sexo]'

where IdPaciente = '$_REQUEST[IdPaciente]' ";

$resultado=$objConexion->query($sql);

if ($resultado)
	header ("location:VISTAPRINCIPAL.php?pg=listarPacientes&x=2"); //x=1 es actualizado correctamente
else
	header ("location:VISTAPRINCIPAL.php?pg=listarPacientes&x=3" ); //x=2 no se puede actualizar

?>

