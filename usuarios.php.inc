<?php

require_once 'config.php.inc';

function usuarioobj($id,$nombre)
{
    (object)array('idusuario'=>$id, 'nombre'=>$nombre);
}


function crea_usuario($con,$nombre)
{
    $stmt = $con->prepare("insert into usuarios(nombre) values(?)");
    $stmt->bind_param('s',$nombre);
    $stmt->execute();
    $stmt->close();
        
    $id = $con->insert_id;
    return usuarioobj($id,$nombre);
}

function borra_usuario($con,$id)
{
    $stmt = $con->prepare("delete from usuarios where idusuario=?");
    $stmt->bind_param('i',$id);
    $stmt->execute();
    $stmt->close();
}

function lista_usuarios($con)
{
    $res = $con->query("select idusuario,nombre from usuarios");
    if( !$res ){
        die( "Error en la query de usuarios" );
    }
    $res->data_seek(0);
    $return = [];
    while ($row = $res->fetch_assoc()) {
        $return[] = (object)$row;
    }
    return $return;
}








?>