 
 <?php
   /*$nombre="catalina";
    $nombre2="pedrito";
    $nombre3="doña nidia";
     echo("buenas noches".$nombre);
     echo("buenas noches".$nombre2);
     echo("buenas noches".$nombre3);*/

     //Definicion o declaracion de o construccion de una funcion:
    $nombre="juan";
     function saludar($nombre)  {
        return("Buenas noches".$nombre);
     }
     //llamado de la funcion
    echo(saludar(" ludobico\n"));
    saludar($nombre);


    //funcion para crear dos numeros
    //retornas la suma y lo multiplica por 2 y muestra en pantalla

    function sumar($numero1,$numero2)    {
        $suma=$numero1+$numero2;
        return $suma;

    }
    echo("la suma de los numeros es: ".sumar(3,6). " y multiplicado por 2 es :  ".(sumar(3,6)*2));

?>
