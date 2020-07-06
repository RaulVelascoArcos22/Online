<?php
    include "global/config.php";
    include "global/conexion.php";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<!-- Inicio:Cabezera -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="index.php">Logo de la empresa</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Item 1 </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Carrito (0)</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <br>
    <!-- Inicio:Productos -->
    <div class="container">
        <br>
        <?php
            $sentencia=$pdo->prepare("SELECT * FROM tblProductos");
            $sentencia->execute();
            $listaDeProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            print_r($listaDeProductos);
        ?>
        <!-- Mensaje del carrito  -->
         <div class="alert alert-success">
            Pantalla de mensaje
            <a href="#" class="badge badge-success">Ver Carrito ..</a>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <img 
                    title="Titulo del Producto"
                    class="card-img-top" 
                    src="https://cdn1.coppel.com/images/catalog/pm/3466913-1.jpg" alt="">
                    <div class="card-body">
                        <span>Titulo del producto</span>
                        <h5 class="card-title">$300.00</h5>
                        <p class="card-text">Descripcion </p>
                    <button
                        class="btn btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">
                        Agregar al carrito
                    </button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img 
                    title="Titulo del Producto"
                    class="card-img-top" 
                    src="https://cdn1.coppel.com/images/catalog/pm/2182673-1.jpg" alt="">
                    <div class="card-body">
                        <span>Titulo del producto</span>
                        <h5 class="card-title">$300.00</h5>
                        <p class="card-text">Descripcion </p>
                    <button
                        class="btn btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">
                        Agregar al carrito
                    </button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img 
                    title="Titulo del Producto"
                    class="card-img-top" 
                    src="https://cdn1.coppel.com/images/catalog/pm/2758283-1.jpg" alt="">
                    <div class="card-body">
                        <span>Titulo del producto</span>
                        <h5 class="card-title">$300.00</h5>
                        <p class="card-text">Descripcion </p>
                    <button
                        class="btn btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">
                        Agregar al carrito
                    </button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img 
                    title="Titulo del Producto"
                    class="card-img-top" 
                    src="https://cdn1.coppel.com/images/catalog/pm/2439693-1.jpg" alt="">
                    <div class="card-body">
                        <span>Titulo del producto</span>
                        <h5 class="card-title">$300.00</h5>
                        <p class="card-text">Descripcion </p>
                    <button
                        class="btn btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">
                        Agregar al carrito
                    </button>
                    </div>

                </div>
            </div>
        </div>
        
    </div>
    <!--  -->
    <!--  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>