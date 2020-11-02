<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>SUPERMERCADO</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Tienda.com</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Punto 1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Punto 2</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </header>
        <main>
            <div class="container">
                <div class="row justify-content-center" >
                    <div class="col-4">
                        <form class="mt-4" action="index.php" method="POST">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Producto 1" name="producto1">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Precio ($)" name="precio1">
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary mt-2 btn-block " name="botoncalcular">Calcular</button>
                            </div>
                        </form>
                        <?php

                                
                            if(isset($_POST["botoncalcular"]))      {  
                         
                                
                                $precioProducto1=$_POST["precio1"];
                                $nombreProducto1=$_POST["producto1"];

                                $costoEnvio=5000;

                                $total=$precioProducto1+ $costoEnvio;

                                echo("El Total De Su Compra Es De : ".$total);

                            }

                        ?>
                    </div>
                </div>
            </div>
        </main>
        <footer>
        
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>