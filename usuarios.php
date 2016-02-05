<html>
    <head>
        <title>Aplicaci&oacute;n de ejemplo de PHP</title>
    </head>
    <body>

        <table border=1>
            <tr>
                <td>ID</td><td>Nombre</td>
            </tr>

            <?php 
            require_once('usuarios.php.inc');
            $con = conexion_bbdd();
            $usuarios = lista_usuarios($con);
            foreach($usuarios as $u)
            {
                $link = 'modifica-usuario.php
                echo '<tr><td>' . $u->idusuario . '</td>' ;
                echo '<td>' . $u->nombre . "</td></tr>\n";
            }
            ?>
        </table>
        
        <form method="post" action="crea-usuario.php">
            <p>Nombre de usuario: <input type="text" name="nombre" /></p>
            <p><input type="submit" /></p>
        </form>
    </body>
</html>
