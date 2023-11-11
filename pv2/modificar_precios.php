<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>PETROLIN v5</title>
    </head>

<head>
	<title>PETROLIN v5</title>
</head>

<body>
    <table width="450" border="0">
        <tr>
			<td>
			<center>
				<?php
					include 'mnu_principal.php';
				?>
			</center>
			</td>
        </tr>
			
			<tr>
                <td>&nbsp;
                   
                </td>
            </tr>            
          </table>
		
		<table border="0" width="450px">
			<tr>
				<td>
					<center> <h3> ACTUALIZACION DE PRECIOS </H3> </center>
				</td>
			</tr>
		</table>

		
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "petrolin") or
    die("Problemas con la conexión");

  $registros1 = mysqli_query($conexion, "select USUARIO, PASS 
  from usuarios where USUARIO='$_REQUEST[txtUsuario]' and PASS='$_REQUEST[txtPassword]'") or
    die("Problemas en el select:" . mysqli_error($conexion));

  if ($reg = mysqli_fetch_array($registros1)) {
	//echo "USUARIO:" . $reg['USUARIO'] . "<br>";
    //echo "PASSWORD:" . $reg['PASS'] . "<br>"; 
	
		$registros2 = mysqli_query($conexion, "select * 
		from estaciones where USUARIO='$_REQUEST[txtUsuario]'") or
		die("Problemas en el select:" . mysqli_error($conexion));
			
			if ($reg2 = mysqli_fetch_array($registros2)) {
				echo "<table width='440px' border='1'>";
				echo	"<tr>";
				echo		"<td width='40%'>";
				echo			"&nbsp; ESTACION: ";
				echo		"</td>";
				echo		"<td>";
				echo		$reg2['NOMBRE'];
				echo		"</td>";
				echo	"</tr>";
				
				echo	"<tr>";
				echo		"<td>";
				echo			"&nbsp; UBICACION: ";
				echo		"</td>";
				echo		"<td>";
				echo		$reg2['UBICACION'];
				echo		"</td>";
				echo	"</tr>";
				
				echo	"<tr>";
				echo		"<td>";
				echo			"&nbsp; SUPER: ";
				echo		"</td>";
				echo		"<td>";
				echo		$reg2['GSUPER'];
				echo		"</td>";
				echo	"</tr>";
				
				echo	"<tr>";
				echo		"<td>";
				echo			"&nbsp; REGULAR: ";
				echo		"</td>";
				echo		"<td>";
				echo		$reg2['GREGULAR'];
				echo		"</td>";
				echo	"</tr>";
				
				echo	"<tr>";
				echo		"<td>";
				echo			"&nbsp; DIESEL: ";
				echo		"</td>";
				echo		"<td>";
				echo		$reg2['GDIESEL'];
				echo		"</td>";
				echo	"</tr>";
				
				echo "</table>";
			}	
	
  }else{
    echo "Usuario no existe.";
  }
  mysqli_close($conexion);
  ?>
	<BR>
	<BR>
	<form action="modificar.php" method="POST">
		<table border="0" width="440px">
			<tr>
				<td colspan="2">
					<B> &nbsp; MODIFICAR PRECIOS </>
				</td>
				
			</tr>
			
			<tr>
				<td>
					&nbsp; GASOLINA SUPER
				</td>
				<td>
					<input type="hidden" name="txtUsuario" value="<?php echo $reg2['USUARIO'] ?>">
					
					<input type="text" name="txtSuper" value="<?php echo $reg2['GSUPER'] ?>">
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp; GASOLINA REGULAR
				</td>
				<td>
					<input type="text" name="txtRegular" value="<?php echo $reg2['GREGULAR'] ?>">
				</td>
			</tr>
			
			<tr>
				<td>
					&nbsp; DIESEL
				</td>
				<td>
					<input type="text" name="txtDiesel" value="<?php echo $reg2['GDIESEL'] ?>">
				</td>
			</tr>
			
			<tr>
				<td colspan="2">
					&nbsp;
				</td>
				
			</tr>
			
			<tr>
				<td colspan="2">
				<center>
					<button type="submit" class="btn btn-lg btn-primary">Actualizar</button>
					<button type="reset" class="btn btn-lg btn-primary">Cancelar</button>
				</center>
				</td>
				
			</tr>
		</table>
	</form>
  
</body>

</html>