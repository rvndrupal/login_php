<?php

    $mysqli=new mysqli('localhost','rodrigo','rorro','loginok');
        
        if($mysqli->connect_error):
            echo "Error al conectar con Mysql".$mysqli->connect_error;
        endif;
?>