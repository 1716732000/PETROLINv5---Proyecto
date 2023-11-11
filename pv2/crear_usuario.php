<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PETROLIN v5</title>
</head>

 <body>
		<!- TABLA MENU PRINCIPAL->
        <table width="450px" border="0">
            <tr>
                <td>
                    <?php
                        include 'mnu_principal.php';
                    ?>
                </td>
            </tr>
			
			<tr>
                <td>&nbsp;
                   
                </td>
            </tr>
        </table>
		<!- TABLA MENU PRINCIPAL->
		  
		<!- TABLA CREACION DE USUARIOS->
		<table width="450px" border="0">
			<tr>
				<td>
					<form action="agregar_usuario.php" method="POST">
		<center>
			<table width="440px"border="2">
				<tr>
					<td colspan="2" width="35%">
						&nbsp; 
					</td>
				</tr>
				
				<tr>
					<td width="35%">
						&nbsp; &nbsp; NOMBRE:
					</td>
					<td>
						<input type="text" name="txtNombre">
					</td>
				</tr>
				
				<tr> <td colspan="2"> &nbsp; </td> </tr>
				
				<tr>
					<td>
						&nbsp; &nbsp; UBICACION:
					</td>
					<td>
						<input type="text" name="txtUbicacion">
					</td>
				</tr>
				
				<tr> <td colspan="2"> &nbsp; </td> </tr>
				
				<tr>
					<td>
						&nbsp; &nbsp; USUARIO:
					</td>
					<td>
						<input type="text" name="txtUsuario">
					</td>
				</tr>
				
				<tr> <td colspan="2"> &nbsp; </td> </tr>
				
				<tr>
					<td>
						&nbsp; &nbsp; CONTRASEÑA:
					</td>
					<td>
						<input type="text" name="txtPass">
					</td>
				</tr>
				
				<tr> <td colspan="2"> &nbsp; </td> </tr>
				
				<tr>
					<td>
						
					</td>
					<td>
						&nbsp;
					</td>
				</tr>
				
				<tr>
					<td colspan="2"> 
					<center>
						<button type="submit" class="btn btn-lg btn-primary">Agregar</button>
						<button type="reset" class="btn btn-lg btn-primary">Cancelar</button>
					</center>
					</td>
				</tr>
				
				<tr>
					<td colspan="2" width="35%">
						&nbsp; 
					</td>
				</tr>
			</table>
		</center>
		</form>
				</td>
			</tr>
		</table>
		<!- TABLA CREACION DE USUARIOS->
		
		
		
		
		
		
    </body>
</html>