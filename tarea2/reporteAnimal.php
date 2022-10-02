<!DOCTYPE html>
<html lang="en">
    <head>
        
       
        <link rel="stylesheet" href="normalize.css"> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
        <title>Acerca de....</title>
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
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Menu
              </a>
              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="Registro.php">Registro</a></li>
                <li><a class="dropdown-item" href="Mapa.php">Mapa</a></li>
                <li><a class="dropdown-item" href="reporteAnimal.php">Reporte de animal</a></li>
                <li><a class="dropdown-item" href="Acerca.html">Acerca de......</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    
    <div>


        <table class="table caption-top">
            <caption class="Titulo">Lista de animales agragado</caption>
            <thead>
                <tr>

                    <th scope="col">Codigo</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Animal</th>


                    <th scope="col">Descripcion</th>
                    <th scope="col">Ubicacion</th>
                    <th scope="col">Correo</th>

                    <th scope="col">Sexo</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Fecha</th>


                    <th scope="col">Color</th>
                    <th scope="col">Longitud</th>
                    <th scope="col">Latitud</th>
                </tr>


            </thead>


            <tbody>
                <?php

                if (is_dir('data')) {
                    $archivos = scandir('data');

                    foreach ($archivos as $archivo) {
                        if ($archivo != '.' && $archivo != '..') {
                            $json = file_get_contents('data/' . $archivo);
                            $datos = json_decode($json);
                            echo "

                                                <tr>
                                                    <td>{$datos->Codigo}</td>
                                                    <td>{$datos->Nombre}</td>
                                                    <td>{$datos->Animal}</td>
                                                    <td>{$datos->Descripcion}</td>
                                                    <td>{$datos->Ubicacion}</td>
                                                    <td>{$datos->Correo}</td>
                                                    <td>{$datos->Sexo}</td>
                                                    <td>{$datos->Telefono}</td>
                                                    <td>{$datos->Fecha}</td>                                               
                                                    <td>{$datos->Color}</td>
                                                    <td>{$datos->Longitud}</td>
                                                    <td>{$datos->Latitud}</td>

                                                    <td>
                                                    
                                                    <a class = 'btn btn-primary' href='detalles.php?idx={$archivo}'>Detalles</a>
                                                        
                                                    
                                                    </td>

                                                </tr>
                                                ";
                        }
                    }
                }

                ?>

            </tbody>
        </table>


        </div>
    
         
    </body>

</html>