<?php 
if (isset($_REQUEST['id']) && isset($_REQUEST['titulo']) && isset($_REQUEST['nota']) && isset($_REQUEST['hora']))
{
	$id = $_REQUEST['id'];
	$titulo = $_REQUEST['titulo'];
	$nota = $_REQUEST['nota'];
	$hora = $_REQUEST['hora'];
	$cnx =  mysqli_connect("localhost","root","admin","empresa") or die("Ha sucedido un error inexperado en la conexion de la base de datos");
	$result = mysqli_query($cnx,"select id from agenda where id = '$id'");
	if (mysqli_num_rows($result)==0)
	{
		mysqli_query($cnx,"INSERT INTO agenda (id,titulo,nota,hora) VALUES ('$id','$titulo','$nota','$hora')");	
	}
	else
	{
		echo "Correo ya existe....";
	}
	mysqli_close($cnx);
}
else
{
	echo "Debe especificar id, clave, titulo y hora, respectivamente";
}
?>