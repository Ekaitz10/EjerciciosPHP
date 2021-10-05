<html>
    <head>
        <title>Ejercicio 9</title>
    </head>
    <body>
        <?php
        class comision{
            public $ingresos;

            function __construct ($ingresos){
                $this->ingresos = $ingresos;
            }
            function operar(){
                if($this->ingresos <10000){
                    $comision = 5/100*$this->ingresos;
                    $total = $this->ingresos+$comision;
                    echo "La comision de los ingresos de ".$this->ingresos." es de +".$comision.". En total: ".$total;
                }else if($this->ingresos>=10000 && $this->ingresos <20000){
                    $comision =  8/100*$this->ingresos;
                    $total = $this->ingresos+$comision;
                    echo "La comision de los ingresos de ".$this->ingresos." es de +".$comision.". En total: ".$total;
                }else if($this->ingresos>=20000 && $ingresos <40000){
                    $comision = 10/100*$ingresos;
                    $total = $this->ingresos+$comision;
                    echo "La comision de los ingresos de ".$this->ingresos." es de +".$comision.". En total: ".$total;
                }else if($this->ingresos>=40000){
                    $comision = 13/100*$this->ingresos;
                    $total = $this->ingresos+$comision;
                    echo "La comision de los ingresos de ".$this->ingresos." es de +".$comision.". En total: ".$total;
                }
            }
        }
        $nunentero = new comision(12000);
        $nunentero -> operar();
        ?>
    </body>
</html>