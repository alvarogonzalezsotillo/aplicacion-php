<?php
require_once('usuarios.php.inc');
$con = conexion_bbdd();
trazaobj('con',$con);
trazaobj('usuarios',lista_usuarios($con));
?>