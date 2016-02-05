<html>
    <head>
        <title>Aplicaci&oacute;n de ejemplo de PHP</title>
    </head>
    <body>

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
        
        <form method="post" action="crea-usuario.php">
            <p>Nombre de usuario: <input type="text" name="nombre" /></p>
            <p><input type="submit" /></p>
        </form>
    </body>
</html>
