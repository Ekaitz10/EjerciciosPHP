<html>
    <head>
        <title>Ejercicio 6</title>
    </head>
    <body>
        <?php
        class potencia{
            private $potencia;
            private $cantidad;

            public function __construct ($potencia, $cantidad){
                $this->potencia = $potencia;
                $this->cantidad = $cantidad;
            }
            function mostrar(){
                if($this->potencia**2 <$this->cantidad){
                    echo $this->potencia . " - " . $this->cantidad;
                }else{
                    echo "no se muestra porque la cantidad es inferior al resultado de la potencia";
                }
            }
        }
        $potencia = new potencia(3, 8);
        $potencia -> mostrar();
        ?>
    </body>
</html>