

<?php


require"BaseDatosCentroMedico.php";
extract( $_REQUEST);

$objConexion=Conectarse();

	
$sql="INSERT INTO `pacientes`( `PacIdentificacion`, `PacNombres`, `PacApellidos`, `PacFechaNacimiento`, `pacSexo`) VALUE('$_REQUEST[identificacion]','$_REQUEST[nombre]','$_REQUEST[apellidos]','$_REQUEST[fechadenacimiento]','$_REQUEST[sexo]')";

$resultado = $objConexion->query($sql);
if ($resultado)
	header("location:VISTAPRINCIPAL.php?pg=listarPacientes&x=1");
else
	echo "Problemas al Agregar el paciente";

?>

