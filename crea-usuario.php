<html>
    <head>
        <title>Aplicaci&oacute;n de ejemplo de PHP</title>
    </head>
    <body>

        <?php
        require_once('usuarios.php.inc');
        $nuevonombre = $_POST['nombre'];
        if(!$nuevonombre)
        {
            die('Me falta el nombre del usuario a crear');
        }
        
        $con = conexion_bbdd();
        $usuario = crea_usuario($con,$nuevonombre);
        

        ?>

        El usuario <?php echo $usuario->nombre ?> ha sido creado con indentificador <?php echo $usuario->idusuario ?>

        <input type="submit" value="Volver a la lista de usuarios" onclick="window.location.href='usuarios.php?refresh=<?php echo microtime() ?>'">


    </body>
</html>
