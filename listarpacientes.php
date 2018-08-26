<?php
require "BaseDatosCentroMedico.php";
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
  $_REQUEST['x']=0;


$objConexion=Conectarse();
$sql="select*from pacientes";

$resultado = $objConexion->query($sql);
?>

<h1 align="center"> LISTAR PACIENTES</h1>
<table width="89%" border="0" align="center">
  <tr align="center" bgcolor="#e57373 ">
    <td width="11%">Identificacion</td>
    <td width="16%">Nombres</td>
    <td width="19%">Apellidos</td>
    <td width="12%">Fecha de Nacimiento</td>
    <td width="15%">Sexo</td>
    <td width="7%">Editar</td>
    <td width="10%">Eliminar</td>
  </tr>
   <?php
  //vamos agregar cada fila de la tabla de acuerdo al número de empleados de forma dinamica
 foreach ($resultado as $pacientes) {
  
	?>
	<tr bgcolor="#f3e5f5 ">
        <td> <?php echo $pacientes['PacIdentificacion'] ; ?>     </td>
        <td> <?php echo $pacientes['PacNombres'] ;?> </td>
        <td><?php  echo $pacientes['PacApellidos'];?></td>
        <td><?php  echo $pacientes['PacFechaNacimiento'];?></td>
        <td><?php  echo $pacientes['pacSexo'];?></td>
     
        <td align="center"><a href="VISTAPRINCIPAL.PHP?pg=FormularioActualizarPaciente&IdPaciente=<?php echo $pacientes['IdPaciente']?>"><img src="Imagenes/editar.jpg" 
        
        width="29" height="24" /></a></td>
        
        
        <td align="center"><a href="Eliminarpaci.php?IdPaciente=<?php echo $pacientes['IdPaciente']?>"><img src="Imagenes/eliminar.png"width="29" height="24" /></a></td>
  	</tr>
  <?php
}
  ?>
  </table>
<?php

  if ($_REQUEST['x']==1)
  {
 echo "Agregaste correctamente el usuario ";
 }
 if ($_REQUEST['x']==2)
  {
 echo "Se ha actualizado correctamente el paciente ";
 }
 if ($_REQUEST['x']==3)
  {
 echo "No sea ha actualizado correctamente el paciente ";
 }
 if ($_REQUEST['x']==4)
  {
 echo "Sea elimininado correctamente el paciente ";

 }
 if ($_REQUEST['x']==5)
  {
 echo "No se ha podido eliminar paciente ";
 }
?>

</body>
</html>

