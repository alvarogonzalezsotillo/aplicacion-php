<?php
require_once('usuarios.php.inc');
$idusuario = $_POST['idusuario'];
$nombreusuario = $_POST['nombre'];
if(!$idusuario)
{
    die('Me falta el id del usuario a modificar');
}

$con = conexion_bbdd();
if( $nombreusuario )
{
    modifica_usuario($con,$idusuario,$nombreusuario);
    header("Location: usuarios.php");
    die();
}
$usuario = lee_usuario($con,$idusuario);
?>

<html>
    <head>
        <title>Aplicaci&oacute;n de ejemplo de PHP</title>
    </head>
    <body>


        Modificando el usuario <?php echo $usuario->idusuario ?>

        <form method="POST">
            <input type="hidden" name="idusuario" value="<?php echo $usuario->idusuario ?>">
            <p>Nombre de usuario: <input type="text" name="nombre" value="<?php echo $usuario->nombre ?>"/></p>
            <p><input type="submit" /></p>
        </form>

    </body>
</html>
