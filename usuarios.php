<html>
    <head>
        <title>Aplicaci&oacute;n de ejemplo de PHP</title>
    </head>
    <body>


        <div id="creacion-usuarios">
            <h1>Creaci&oacute;n de usuario</h1>
            <form method="post" action="crea-usuario.php">
                <p>Nombre de usuario: <input type="text" name="nombre" /></p>
                <p><input type="submit"  value="Crear usuario"/></p>
            </form>
        </div>

        <div id="lista-usuarios">
            <h1>Lista de usuarios</h1>
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

                    echo '<tr><td>' . $u->idusuario . '</td>' ;
                    echo '<td><a href="#" onclick="s('.$u->idusuario.')">' . $u->nombre . "</a></td></tr>";
                    echo  "\n";
                }
                ?>
            </table>
            <form name="formocultoparapost" action="modifica-usuario.php" method="POST">
                <input type="hidden" name="idusuario">
            </form>
            <script>
             function s(id)
             {
                 document.formocultoparapost.idusuario.value=id;
                 document.formocultoparapost.submit();
             }
            </script>

        </div>

    </body>
</html>
