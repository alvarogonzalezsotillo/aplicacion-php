<?php
require_once('usuarios.php.inc');
$idusuario = $_POST['idusuario'];

if(!$idusuario)
{
    die('Me falta el id del usuario a borrar');
}

$con = conexion_bbdd();
$usuario = lee_usuario($con,$idusuario);
?>

<html>
    <head>
        <title>Aplicaci&oacute;n de ejemplo de PHP</title>
    </head>
    <body>

        <?php

        if( isset($_POST['confirmation']) )
        {

            borra_usuario($con,$idusuario);
            header("Location: usuarios.php");
            die();
        }
        ?>


        Borrado del usuario <?php echo $usuario->idusuario ?>: <?php echo $usuario->nombre ?>

        <form method="POST">
            <input type="hidden" name="idusuario" value="<?php echo $usuario->idusuario ?>">
            <input type="hidden" name="confirmation" value="1">
            <p><input type="submit" value="Borrar usuario"/></p>
        </form>
        <form method="POST" action="usuarios.php">
            <p><input type="submit" value="Cancelar"/></p>
        </form>

    </body>
</html>
