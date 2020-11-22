<?php
include("BaseDatos.php");

if(isset($_POST ["botonEnvio"])) {
//1 recibir los datos desde la vista (interfaz de ususario)
$nombre= $_POST["nombre"];
$apellido= $_POST["apellido"];
$descripcion=$_POST["descripcion"];
$genero = $_POST["genero"];
$foto=$_POST["foto"];
// 2 crear una copia de la clase BaseDatos
// crear un objeto de la clase Basedatos
$transaccion =new BaseDatos();

// 3 crear una consulta sql para agregar datos

$consultaSQL="INSERT INTO usuarios(nombre,apellido,descripcion,genero,foto) VALUES ('$nombre','$apellido','$descripcion','$genero','$foto')";

// 4 utilizar la funcion para insertar datos de la clase BaseDatos

$transaccion->agregarDatos($consultaSQL);

// 5 redirccion

header("location:formularioRgistro.php");

}



?>