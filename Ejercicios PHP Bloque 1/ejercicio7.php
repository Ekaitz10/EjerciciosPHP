<html>
    <head>
        <title>Ejercicio 7</title>
    </head>
    <body>
        <?php
        class numentero{
            private $numero;

            public function __construct ($numero){
                $this->numero = $numero;
            }
            function operar(){
                do{
                    echo $this->numero." ";

                    if($this->numero%2==0){
                        $this->numero = $this->numero/2;
                    }else{
                        $this->numero = ($this->numero*3) +1;
                    }
                }while($this->numero!=1);
                    echo $this->numero;
            }
        }
        $nunentero = new numentero(30);
        $nunentero -> operar();
        ?>
    </body>
</html>