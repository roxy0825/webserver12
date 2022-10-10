<?php 
if (isset($_REQUEST['id']))
{
	$id=$_REQUEST['id'];
	$cnx =  mysqli_connect("localhost","root","admin","Empresa") or die("Ha sucedido un error inexperado en la conexion de la base de datos");
	$result = mysqli_query($cnx,"select id from agenda where id = '$id'");
	if (mysqli_num_rows($result)>0)
	{
		mysqli_query($cnx,"DELETE FROM agenda WHERE id = '$id'");	
	}
	else
	{
		echo "Usuario No existe....";
	}
	mysqli_close($cnx);
}
else
{
	echo "Debe especificar usr";
}
?>