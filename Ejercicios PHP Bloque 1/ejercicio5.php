<html>
    <head>
        <title>Ejercicio 5</title>
    </head>
    <body>
        <?php
        class visitante{
            private $edad;
            private $acompañado;
            private $altura;
            public function __construct ($edad, $acompañado, $altura){
                $this->edad = $edad;
                $this->acompañado = $acompañado;
                $this->altura = $altura;
            }
            function esApto(){
                if($this->acompañado == true){
                    if($this->edad>6){
                        echo "<br>puede subir a la atracción";
                    }
                }else if($this->acompañado == false){
                    if($this->edad>=10 && $this->altura>=120){
                        echo "<br>puede subir a la atracción";
                    }
                    else{
                        echo "<br>no puede subir a la atracción";
                    }
                }
            }
        }
        $visitante = new visitante(15, false, 100 );
        $visitante -> esApto();
        ?>
    </body>
</html>