<?php

require_once 'config.php.inc';

function usuarioobj($id,$nombre)
{
    return (object)array('idusuario'=>$id, 'nombre'=>$nombre);
}


function crea_usuario($con,$nombre)
{
    $stmt = $con->prepare("insert into usuarios(nombre) values(?)");
    $stmt->bind_param('s',$nombre);
    if( !$stmt->execute() ){
        die('Error insertando usuario' . $stmt->error);
    }
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

function modifica_usuario($con,$id,$nombre)
{
    $stmt = $con->prepare("update usuarios set nombre=? where idusuario=?");
    $stmt->bind_param('si',$nombre,$id);
    
    if( !$stmt->execute() ){
        die( "Error en la query de usuarios:" . $stmt->error );
    }
    
    $stmt->close();
}


function lee_usuario($con,$id)
{
    $stmt = $con->prepare("select idusuario,nombre from usuarios where idusuario=?");
    $stmt->bind_param('i',$id);
    
    if( !$stmt->execute() ){
        die( "Error en la query de usuarios:" . $stmt->error );
    }
    
    $stmt->bind_result($idusuario,$nombre);
    $stmt->fetch();
    $stmt->close();
    return usuarioobj($idusuario,$nombre);
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
