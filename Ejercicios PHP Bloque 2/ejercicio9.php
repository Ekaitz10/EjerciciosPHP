<html>
    <head>
        <title>Ejercicio 8</title>
    </head>
    <body>
        <?php
        class areaCuadrado{
            public $medidas;
            public $lado;
            public function __construct(){
                $medidas=[];
            }
            function generarMedidas(){
                 for($i=0;$i<5;$i++){
                     $this->medidas[$i] = rand(-10,10);
                 }
                 print_r($this->medidas);
            }
            function calcularArea(){
                for($i=0;$i<5;$i++){
                    try{
                        if($this->medidas[$i]>0){
                            $area = $this->medidas[$i]*2;
                            echo "<br>El area del cuadrado ".$i." es de ".$area."cm2";
                        }else{
                            throw new Exception("<br>El numero es negativo o 0 y no es posible calcular el área");
                        }

                    }catch(Exception $e){
                        echo $e->getMessage();
                    }
                }
            }
        }
        $cuadrados = new areaCuadrado();
        $cuadrados->generarMedidas();
        $cuadrados->calcularArea();
        ?>
    </body>
</html>