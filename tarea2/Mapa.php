<!DOCTYPE html>
<html lang="en">
    <head>
        <base target="_top">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="Style.css" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"rel="stylesheet"/>
        <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css"rel="stylesheet"/>
        <title>Mapa Itla</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script> 
        <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.1/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js" integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s=" crossorigin=""></script>

        <style>
            html, body {
                height: 100%;
                margin: 0;
            }
            .leaflet-container {
                height: 700px;
                width: 1200px;
                max-width: 100%;
                max-height: 100%;
            }
        </style>	
    </head>


    <body>

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
                    <li><a class="dropdown-item" href="Acerca.php">Acerca de......</a></li>
                    </ul>
                </li>
                </ul>
            </div>
            </div>
        </nav>


            <div class="Mapa" id="map" style="width: 1200px; height: 700px;"></div>
            <script>

                var map = L.map('map').setView([18.89761123038763, -70.21845072191944], 8);

                var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(map);
                
                /*
                var marker = L.marker([51.5, -0.09]).addTo(map)
                    .bindPopup('<b>Hello world!</b><br />I am a popup.').openPopup();
                */
                                         
            </script>

            <script>

                <?php

                    if (is_dir('data')){

                        $dir = scandir('data');
                            foreach ($dir as $file){
                                $posible = "data/{$file}";
                                if (is_file($posible)){
                                $tmp = file_get_contents($posible);
                                $tmp = json_decode($tmp);
                                echo"
                                    
                                var marker = L.marker([{$tmp->Latitud}, {$tmp->Longitud}]).addTo(map)
                                .bindPopup(\"<b>{$tmp->Nombre}</b><br /><a href='detalles.php?idx={$file}'>Detalles</a>\");

                                ";

                            }

                        }
                    }
                    
                ?>

                    
            </script>
    </body>
</html>

