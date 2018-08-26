<?php
session_start();
extract($_REQUEST);
require "BaseDatosCentroMedico.php";
$objConexion= Conectarse();
/* Vamos a realizar el proceso para consultar los usuarios con la condicíon
dada por los valores ingresados en el login y password*/
//print_r($_POST);

//Guardamos en una variable la sentencia sql
$sql="select * from usuario where Login = '$_REQUEST[Login]' and Password = '$_REQUEST[Password]'";

//print_r($sql); exit();

//Asignar a una variable el resultado de la consulta
$resultado=$objConexion->query($sql);

//verifico si existe el usuario
$existe = $resultado->num_rows;
if ($existe==1)  //quiere decir que los datos estan bien
{
	$usuarioo=$resultado->fetch_object();
	//Registramos una variable de sesión llamada user
	$_SESSION['user']= $usuarioo->Login;	
	header("location:VISTAPRINCIPAL.PHP");	
}
else
{
	header("location:INDEX.PHP?x=1");  //x=1, quiere decir que el usuario no esta registrado
}
?>

