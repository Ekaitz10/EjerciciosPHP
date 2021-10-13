<html>
    <head>
        <title>Ejercicio 5</title>
    </head>
    <body>
        <?php
        class mostrarMeses{
            public $arrayasoc;
            public function __construct(){
                $this->arrayasoc=[
                    "Enero"=>"31",
                    "Febrero"=>"28",
                    "Marzo"=>"31",
                    "Abril"=>"30",
                    "Mayo"=>"31",
                    "Junio"=>"30",
                    "Julio"=>"31",
                    "Agosto"=>"31",
                    "Septiembre"=>"30",
                    "Octubre"=>"31",
                    "Noviembre"=>"30",
                    "Diciembre"=>"31",
                ];
            }
            function mostrarArray(){
                print_r($this->arrayasoc);
            }
        }
        $mostrarMeses = new mostrarMeses();
        $mostrarMeses->mostrarArray();
        ?>
    </body>
</html>