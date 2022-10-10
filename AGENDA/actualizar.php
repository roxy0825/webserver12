<?php 
if (isset($_REQUEST['ID']) && isset($_REQUEST['TITULO']) && isset($_REQUEST['NOTA']) && isset($_REQUEST['HORA']))
{
	$id=$_REQUEST['ID'];
	$titulo=$_REQUEST['TITULO'];
	$nota=$_REQUEST['NOTA'];
	$hora=$_REQUEST['HORA'];
	$cnx =  mysqli_connect("localhost","root","admin","Empresa") or die("Ha sucedido un error inexperado en la conexion de la base de datos");
	$result = mysqli_query($cnx,"select id from agenda where id = '$id'");
	if (mysqli_num_rows($result)>0)
	{
		mysqli_query($cnx,"UPDATE agenda SET titulo='$titulo',nota='$nota',hora='$hora' WHERE id = '$id'");	
	}
	else
	{
		echo "Usuario No existe....";
	}
	mysqli_close($cnx);
}
else
{
	echo "Debe especificar id, titulo, nota y hora, respectivamente";
}
?>