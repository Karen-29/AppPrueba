<?php
function Conectarse()
	{
	$Conexion=new MySQLi("localhost","root","","centromedico");
	
	if ($Conexion-> connect_errno) 
		echo "Problemas en la Conexion ". $Conexion-> connect_error;
	else
		return $Conexion;
	//echo"Listos para conectarse a la base ";
	}
 ?>

