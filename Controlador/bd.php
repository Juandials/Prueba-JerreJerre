<?php

    function INSERT($id, $nombre, $apellido, $tipo, $correo){
        $mysqli = new mysqli("localhost", "", "", "");
        if ($mysqli->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        echo $mysqli->host_info . "\n";


        $consulta = "INSERT INTO usuario (id_usuario, Nombre, Apellido, Correo, Tipo) VALUES ('$id','$nombre','$apellido','$correo','$tipo')";

        if(mysqli_query($mysqli, "$consulta")){
            echo "Registro agregado";
        }else{
            echo "Fallo al agregar registro";
        }
    }
    function SELECT($query){
        $mysqli = new mysqli("localhost", "PT", "jerrejerre", "PT");
        if ($mysqli->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        //echo $mysqli->host_info . "\n";
        $consulta = "SELECT $query FROM usuario";
        $datos = mysqli_query($mysqli, $consulta);
        $miau = mysqli_fetch_all($datos);
        return $miau;
    }
$id = 7;
$nombre = "Pepe";
$apellido = "Perez";
$tipo = 2;
$correo = "xd@gmail.com";
    //INSERT($id, $nombre, $apellido, $tipo, $correo);
//print_r(SELECT("*")) ;



