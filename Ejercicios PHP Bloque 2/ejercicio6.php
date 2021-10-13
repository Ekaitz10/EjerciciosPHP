<html>
    <head>
        <title>Ejercicio 6</title>
    </head>
    <body>
        <?php
        class cumpleañeros{
            public $string;
            public $arrayNombres;
            public function __construct(){
                $this->arrayNombres =[];
            }
            function añadirNombreAMes($mes, $nombre){
                print_r($arrayNombres);
            }
        }
        $cumpleañeros = new cumpleañeros();
        $cumpleañeros->crearymostrarArray();
        ?>
    </body>
</html>