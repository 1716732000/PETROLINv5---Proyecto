<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>PETROLIN v5</title>
			
		<?php 
			include_once 'bootstrap.php';
		?>
		<?php 
			include_once 'conexion.php';
			
			$objeto = new Conexion();
			$conec = $objeto->Conectar();
			
			$Consulta ="SELECT * FROM estaciones order by GSUPER";
			$Resultado = $conec->prepare($Consulta);
			$Resultado->execute();
			$Precios = $Resultado->fetchAll(PDO::FETCH_ASSOC);			
		?>
    </head>
    

    <body bgcolor="#00FF33">
    
        <table width="410" border="0">
            <tr>
            	<td>
                <center>	
					<table id="tablaPrecios" width="438px" border="2">
						<thead>
							<th bgcolor="#00CCCC"  > ESTACION </th>				
							<th bgcolor="#00CCCC"  > UBICACION </th>
							<th bgcolor="#00CCCC"  > SUPER/ </th>
							<th bgcolor="#00CCCC"  > REGULAR/ </th>
							<th bgcolor="#00CCCC"  > DIESEL </th>
						</thead>
									
						<tbody>
						<?php
							foreach($Precios as $precio){
						?>
							<tr> 
								<td><?php ECHO $precio['NOMBRE'] ?></td>
								<td><?php ECHO $precio['UBICACION'] ?></td>
								<td align="right" ><?php ECHO $precio['GSUPER'] ?></td>
								<td align="right" ><?php ECHO $precio['GREGULAR'] ?></td>
								<td align="right" ><?php ECHO $precio['GDIESEL'] ?></td>
							</tr>
						<?php } ?>
							</tbody>
									
					</table>
				</center>
                </td>
            </tr>  
			
          </table>
     
    </body>
</html>