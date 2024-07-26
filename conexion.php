<?php 

function retornarConexion (){

    $server = "localhost";
    $usuario = "root";
    $clave = "";
    $base = "base1";

    $con = mysqli_connect($server, $usuario,$clave, $base);

    if(!$con){
        die("Problemas de conexion".mysqli_connect_errno());
    }
    mysqli_set_charset($con, 'utf8');

    return $con;
}
?>