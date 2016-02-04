<html>
    <head>
        <title>Aplicaci&oacute;n de ejemplo de PHP</title>
    </head>
    <body>



        <form method="post">
            <p>Nombre de usuario: <input type="text" name="nombre" /></p>
            <p><input type="submit" /></p>
        </form>

                                   <?php echo $_POST['nombre'] ?>

    </body>
</html>
