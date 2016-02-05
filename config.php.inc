
<?php

$local = 1;

if($koding)
{
    $bbdd_name="aplicacion-php";
    $bbdd_user="aplicacion-php";
    $bbdd_pass="php";
    $bbdd_host="localhost";
}
elseif($local)
{
    $bbdd_name="aplicacionweb";
    $bbdd_user="aplicacion-web";
    $bbdd_pass="aplicacion-web";
    $bbdd_host="localhost";
}
else
{
    die("No se ha definido el tipo de instalacion");
}

function conexion_bbdd()
{
    global $bbdd_user, $bbdd_name, $bbdd_pass, $bbdd_host;
    $conn = new mysqli($bbdd_host, $bbdd_user, $bbdd_pass, $bbdd_name);

    if($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function traza($msg)
{
    error_log($msg);
}

traza('incluido config.php');

function trazaobj($nombre,$obj)
{
    echo '<hr>Objeto:' . $nombre . ' ';
    var_dump($obj);
    echo '<hr>';
}

?>