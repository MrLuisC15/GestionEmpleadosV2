<!DOCTYPE html>
<?php
    require('configdb.php')
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviado</title>
</head>
<body>
    <?php
         $conexion =  mysqli_connect(SERVIDOR,  USUARIO,  CONTRASENA, BASEDATOS);
       
        
         $resultado = mysqli_query($conexion, 'insert into empleados (dni, nombre, correo, telefono)
         value('.$_POST['dni'].','.$_POST['nombre'].','.$_POST['correo'].','.$_POST['telefono'].');');

        echo $resultado->error_log;
        echo '<h1>Información actualizada</h1>'
    ?>
    <a href="index.php">Volver</a>
</body>
</html>