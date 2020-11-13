<?php

// ARREGLOS DE UNA (1) DIMENCION
$precios=array(1600,5000,2600);
$nombres=array("arroz","salchichas","huevos");
$marcas=array("diana","zenu","avinal");

//ARREGLOS MULTIDIMENCIONAES
$productos=array(
    array("arroz","diana",1600),
    array("salchichas","zenu",5000),
    array("huevos","avinal",2600)
);
print_r($productos);
echo("<br>");
echo("<br>");
print_r($productos[0]);
echo("<br>");
echo("<br>");

print_r($productos[0][1]);
echo("<br>");
echo("<br>");
// recorrer el arreglo

foreach($productos as $producto ){

    print_r($producto);
    echo("<br>");

    echo($producto[0]);
    echo("<br>");

}



?>