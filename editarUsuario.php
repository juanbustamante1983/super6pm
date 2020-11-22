<?php
    include("BaseDatos.php");
//1. capturarel id de ususario a editar
    $id=$_GET["id"];

// recibo los datos a editar
    if(isset($_POST ["botonEditar"])) {

    $nombre=$_POST["nombreEditar"];
    $descripcion=$_POST["descripcionEditar"];
// utilizar o crear un objeto de la clase BaseDatos
    $transaccion =new BaseDatos();

// crear consulta SQL
    $consultaSQL="UPDATE usuarios SET nombre='$nombre',descripcion='$descripcion' WHERE idUsuario='$id'";

// utilizr el metodo editarDatos
$transaccion->editarDatos($consultaSQL);

header("location:listausuarios.php");


}
?>