<?php
require 'conexion.php';

$usuarios=$mysqli->query("SELECT nombre, tipo_usuario FROM usuarios WHERE usuario='".$_POST['usuario']."' AND password='".$_POST['password']."' ");

    if($usuarios->num_rows == 1)
    {
        $datos=$usarios->fetch_assoc();
        echo json_decode(array('error' =>false, 'tipo'=>$datos['tipo_usuario']));
    }
    else{
        echo json_decode(array('error'=>true));
    }

    $mysqli->close();

?>