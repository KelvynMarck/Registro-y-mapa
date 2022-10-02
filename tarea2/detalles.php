<!DOCTYPE html>
<html lang="en">
    <head>
        
        <link rel="stylesheet" href="Style.css">
        <link rel="stylesheet" href="normalize.css"> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
        <title>Reporte de los animales del itla....</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
           
    </head>

    <body class="p-3 m-0 border-0 bd-example">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Inicio</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Menu</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="Registro.php">Registro</a></li>
                                <li><a class="dropdown-item" href="Mapa.php">Mapa</a></li>
                                <li><a class="dropdown-item" href="reporteAnimal.php">Reporte de animal</a></li>
                                <li><a class="dropdown-item" href="Acerca.php">Acerca de......</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <style>
            @media print{
                .no-print{
                    display: none;
                }
            }

            body {

                background: rgb(255, 255, 255);
            }
        </style>

        <?php

            $idx = $_GET['idx'];
            

            $data = file_get_contents('data/'.$idx);
            $obj = json_decode($data);

          
            echo "<pre>

            
                <img src='{$obj->Url}' alt=''>
                Codigo: {$obj->Codigo}
                Nombre: {$obj->Nombre}
                Animal: {$obj->Animal}
                Descripcion: {$obj->Descripcion}
                Ubicacion: {$obj->Ubicacion}
                Color: {$obj->Color}
                Correo: {$obj->Correo}
                Sexo: {$obj->Sexo}
                Telefono: {$obj->Telefono}              
                Fecha: {$obj->Fecha}
                 
            </pre>"
           
            ?>

                       
            <a class = 'btn btn-primary no-print' onclick="print()">Imprimir</a>

    </body>

</html>