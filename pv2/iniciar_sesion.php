<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>PETROLIN v5</title>
	<?php 
		include_once 'bootstrap.php';
		include_once 'conexion.php';
	?>
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
		  
		  <form action="modificar_precios.php" METHOD="POST">
			
			<table border="2" width="440px">
				<tr>
					<td colspan="3"> 
						<center>
							<h2> INICIAR SESION </>
						</center>	
					</td> 
				</tr>
				
				<tr><td> &nbsp; </td> <td> &nbsp; </td> </tr>
				
				<tr>
					<td>
						&nbsp; &nbsp; USUARIO
					</td>
					<td>
						&nbsp;
					</td>
					<td>
						<input type="text" name="txtUsuario">					</td>
				</tr>
				
				<tr><td> &nbsp; </td> <td> &nbsp; </td> </tr>
				
				<tr>
					<td>
						&nbsp; &nbsp; CONTRASEÑA
					</td>
					<td>
						&nbsp;
					</td>
					<td>
						<input type="password" name="txtPassword">
					</td>
				</tr>
				
				<tr><td> &nbsp; </td> <td> &nbsp; </td></tr>
				<tr><td> &nbsp; </td> <td> &nbsp; </td></tr>
				<tr>
					<td colspan="3"> 
					<center>
						<button type="submit" class="btn btn-lg btn-primary">Iniciar</button>
						<button type="reset" class="btn btn-lg btn-primary">Cancelar</button>
					</center>
					</td>
				</tr>
				<tr><td> &nbsp; </td> <td> &nbsp; </td></tr>
			</table>
			
		  </form>
		  
		  
		  <!- REGISTRO DE USUARIO->
           
    </body>
</html>