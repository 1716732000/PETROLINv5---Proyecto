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


    <?php
    $conexion = mysqli_connect("localhost", "root", "", "petrolin") 
	or die("Problemas con la conexión");

    mysqli_query($conexion, "update estaciones
            set GSUPER='$_REQUEST[txtSuper]', GREGULAR='$_REQUEST[txtRegular]', GDIESEL='$_REQUEST[txtDiesel]'
			where USUARIO='$_REQUEST[txtUsuario]'")
		or die("Problemas en el select:" . mysqli_error($conexion));
    echo "<center> <h2> Registro actualizado </h2> </center>";
    ?>
</body>

</html>