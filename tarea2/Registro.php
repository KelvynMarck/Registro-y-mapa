<?php

    if($_POST){

        if(is_dir('data')===false){
            mkdir('data');
        }

        $json = json_encode($_POST);

        file_put_contents('data/'.time().'.json', $json);
    }


?>

 <!---------------------------------------------html--------------------------------------->
    

<!DOCTYPE html>
<html lang="en">
  <head>
        <link rel="stylesheet" href="Style.css" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet"/>
        <title>Registrar</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

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

    </head>

    <body class="p-3 m-0 border-0 bd-example">
        <!--Codigo del menu-->
    
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Inicio</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDarkDropdown"
                    aria-controls="navbarNavDarkDropdown"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                
                    ><span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" >Menu</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                        <li>
                            <a class="dropdown-item" href="Registro.php">Registro</a></li>
                        <li>
                            <a class="dropdown-item" href="Mapa.php">Mapa</a></li>
                        <li>
                            <a class="dropdown-item" href="reporteAnimal.php">Reporte de animal</a></li>
                        <li> 
                          <a class="dropdown-item" href="../Acerca.php">Acerca de......</a>     
                                                
                        </li>                       
                    </li>
                </ul>
            </div>
            
        </nav>

        <!--Codigo del texto-->

      
        <div class="Registrar">
            <h2>Registrar animal</h2>               
        </div>


        <!--Codigo del form (registrar animal)-->
        
            <form method="post" class="row g-3">
                <div class="div1">               
                    <div class="col-md-2">
                        <label for="inputCodigo" class="form-label">Codigo</label>
                        <input required type="Codigo" name="Codigo" class="form-control" id="inputCodigo" />

                        <label for="inputNombre" class="form-label">Nombre</label>
                        <input required type="Nombre" name="Nombre" class="form-control" id="inputNombre" />
                    </div>

                    <div class="col-md-2">
                        <label for="inputAnimal" class="form-label">Animal</label>
                        <input required type="Text" name="Animal" class="form-control" id="inputAnimal" />
                    </div>
                  

               
                    <div class="col-4">
                        <label for="inputDescripcion" class="form-label">Descripcion</label>
                        <input required type="text" name="Descripcion" class="form-control" id="inputDescripcion" placeholder=""/>
                    </div>


                    <div class="col-2">
                        <label for="inputUbicacion" class="form-label">Ubicacion</label>
                        <input required type="text" name="Ubicacion" class="form-control" id="inputUbicacion" placeholder=""/>
                    </div>                                                 

                    <div class="col-md-2">
                        <label for="inputColor" class="form-label">Color</label>
                        <input required type="text" name="Color" class="form-control" id="inputColor" /> 
                    </div>

                    <div class="col-md-2">
                        <label for="inputLongitud" class="form-label">Longitud</label>
                        <input required type="text" name="Longitud" class="form-control" id="inputLongitud" /> 
                    </div>

                    <div class="col-md-2">
                        <label for="inputLatitud" class="form-label">Latitud</label>
                        <input required type="text" name="Latitud" class="form-control" id="inputLatitud" /> 
                    </div>

                </div> 
                
                <div class="div2">
                    <div class="col-md-2">
                        <label for="inputCorreo" class="form-label">Correo</label>
                        <input required type="text" name="Correo" class="form-control" id="inputCorreo" />
                    </div>

                    <div class="col-md-2">
                        <label for="inputSexo" class="form-label">Sexo</label>
                        <input required type="Sexo"  name="Sexo" class="form-control" id="inputSexo" />
                    </div>

                    <div class="col-md-2">
                        <label for="inputTelefono" class="form-label">Telefono</label>
                        <input required type="text" name="Telefono" class="form-control" id="inputTelefono" /> 
                    </div>

                    <div class="col-md-2">
                        <label for="inputUrl" class="form-label">Url</label>
                        <input required type="text" name="Url" class="form-control" id="inputUrl" /> 
                    </div>
                        
                    <div class="col-md-2">
                        <label class="form-label">Fecha</label>
                        <input required type="date" name="Fecha">
                    </div>

                    <br>
                                                         
                    <button class="btn btn-primary no-print">Guardar</button>                  
                    <button type="button" onclick="print();" class="btn btn-primary no-print">Imprimir</button>
                </div> 
                    
                                      
                        <table class="table caption-top">
                            <caption class= "Titulo">Lista de animales agragado</caption>
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

                                if(is_dir('data')){
                                    $archivos = scandir('data');

                                    foreach ($archivos as $archivo){
                                        if($archivo != '.' && $archivo != '..'){
                                            $json = file_get_contents('data/'.$archivo);
                                            $datos = json_decode($json);
                                            echo"

                                            <tr>
                                                <td>{$datos ->Codigo}</td>
                                                <td>{$datos ->Nombre}</td>
                                                <td>{$datos ->Animal}</td>
                                                <td>{$datos ->Descripcion}</td>
                                                <td>{$datos ->Ubicacion}</td>
                                                <td>{$datos ->Correo}</td>
                                                <td>{$datos ->Sexo}</td>
                                                <td>{$datos ->Telefono}</td>
                                                <td>{$datos ->Fecha}</td>                                               
                                                <td>{$datos ->Color}</td>
                                                <td>{$datos ->Longitud}</td>
                                                <td>{$datos ->Latitud}</td>

                                                <td>
                                                
                                                    <a onclick=\"return confirm('Seguro que desea borrar este registro')\" class = 'btn btn-danger' href='Eliminar.php?f={$archivo}'>X</a>
                                                    
                                                
                                                </td>

                                            </tr>
                                            ";    

                                        }
                                        
                                    }

                                }

                            ?>
                                   
                        </tbody>
                    </table>
            </form>           
    </body>
</html>
