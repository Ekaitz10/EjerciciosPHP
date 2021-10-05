<html>
    <head>
        <title>Ejercicio 9</title>
    </head>
    <body>
        <?php
        class tiendaOnline{
            public $total_compra;
            public $tipo_compra;

            function __construct ($total_compra, $tipo_compra){
                $this->total_compra = $total_compra;
                $this->tipo_compra = $tipo_compra;
            }
            function comprobarCompra(){
                if($this->tipo_compra == "mascotas"){
                    echo "No se puede realizar el envio <br>";
                }else if($this->tipo_compra == "ropa"){
                    if($this->total_compra >=19 && $this->total_compra <40){
                        echo "Los gastos de envío son 9 euros<br>";
                    }
                    /*en el ejercicio no especifica que hacer con
                    una compra de ropa entre 40 y 80 asi que 
                    en esos precios el programa no devuelve nada*/
                    else if($this->total_compra >=80){
                        echo "Los gastos de envio son gratis por la compra superior a 80€ <br>";
                    }
                }
            }
            function precioFinal(){
                if($this->tipo_compra == "mascotas"){
                    $preciofinal = $this->total_compra + (10/100*$this->total_compra);
                    echo "Total a pagar: ".$preciofinal."€";
                }else{
                    $preciofinal = $this->total_compra + (21/100*$this->total_compra);
                    echo "Total a pagar: ".$preciofinal."€";
                }
            }
        }
        $compra = new tiendaOnline(80,"ropa");
        $compra -> comprobarCompra();
        $compra -> precioFinal();
        ?>
    </body>
</html>