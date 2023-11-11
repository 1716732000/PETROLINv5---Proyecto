<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>PETROLIN v5</title>
    </head>

<?php 
	include_once 'mnu_principal.php';
?>


<?php

	$conexion = mysqli_connect("localhost", "root", "", "petrolin") 
	or die("Problemas con la conexión");

	$registrosUS = mysqli_query($conexion, "select USUARIO
	from usuarios where USUARIO='$_REQUEST[txtUsuario]'") or
	  die("Problemas en el select:" . mysqli_error($conexion));
   
	if ($reg = mysqli_fetch_array($registrosUS)) {
			echo "<center> <b> USUARIO YA EXISTE, CONSIDERE OTRO... </b> </center>";
		}else{
			mysqli_query($conexion, "insert into usuarios(NOMBRE, UBICACION, USUARIO, PASS) 
			values ('$_REQUEST[txtNombre]', '$_REQUEST[txtUbicacion]', '$_REQUEST[txtUsuario]', '$_REQUEST[txtPass]')")
			or die("Problemas en el select" . mysqli_error($conexion));

			mysqli_query($conexion, "insert into estaciones(USUARIO, NOMBRE, UBICACION) 
			values ('$_REQUEST[txtUsuario]', '$_REQUEST[txtNombre]', '$_REQUEST[txtUbicacion]')")
			or die("Problemas en el select" . mysqli_error($conexion));

			echo "<center> <b> Registro agregado con exito </b> </center>";
		}
	
	mysqli_close($conexion);

 
  ?>
	<center>
		<table width="440px" border="0">
			<tr>
				<td> 
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td> 
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td> 
				<center>
					<a href="iniciar_sesion.php">
                    	<button type="button" class="btn btn-lg btn-primary">Iniciar Sesion</button>
                	</a> 
				</center>
				</td>
			</tr>
		</table>
	</center