<html>
    <head>
        <title>Ejercicio 1</title>
    </head>
    <body>
        <?php
        class comunidad{
            private $numpisos=0;
            private $numpuertas=0;

            public function __construct ($numpisos, $numpuertas){
                $this->numpisos = $numpisos;
                $this->numpuertas = $numpuertas;
            }
            function listadoViviendas(){
                $arrayletras = array("A","B","C","D","E","F","G");
                for($i = 1; $i<=$this->numpisos; $i++){
                    echo "<br>";
                    for($j =0;$j<$this->numpuertas;$j++){
                        echo $i;
                        echo $arrayletras[$j];
                        echo "<br>";
                    }
                }
            }
        }
        $comunidad = new comunidad(4,2);
        $comunidad -> listadoViviendas();
        ?>
    </body>
</html>