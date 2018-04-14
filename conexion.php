<?php 

$mysql_host='localhost';
$mysql_usuario='root';
$mysql_clave='';
$mysql_BD='Usuarios';

$con=mysqli_connect($mysql_host,$mysql_usuario,$mysql_clave,$mysql_BD) or die ("could not connect to mysql"); 

if(mysql_errno())
{
	echo "Error en conexion".mysql_connect_error;
}

 ?>