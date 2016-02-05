<html>
    <head>
        <title>Aplicaci&oacute;n de ejemplo de PHP</title>
    </head>
    <body>

        <?php
        require_once('usuarios.php.inc');
        $id = $_POST['id'];
        if(!$nuevonombre)
        {
            die('Me falta el id del usuario a modificar');
        }
        
        $con = conexion_bbdd();
        $usuario = lee_usuario($id)
        

        ?>

        Modificando el usuario <?php echo $usuario->idusuario ?>

        <form action="modifica-usario-do.php" method="POST">

            <p>Nombre de usuario: <input type="text" name="nombre" value="<?php echo $usuario->nombre ?>"/></p>
            <p><input type="submit" /></p>
        </form>

    </body>
</html>
