<html>
    <head>
        <title>Ejercicio 3</title>
        <style>
            table, th, tr{
                border: solid 1px black;
            }
        </style>
    </head>
    <body>
        <?php
        class aleatorios{
            public $array=[];
            public function __construct(){

            }
            function rellenarArray(){
                for($i=0;$i<20;$i++){
                    $numaleatorio = rand(1,100);
                    $this->array[$i]=$numaleatorio;
                    $ultimonum = $numaleatorio;
                    rsort($this->array);
                }
                for($j=0;$j<20;$j++){
                    echo $this->array[$j]." ";
                };
            }
        }
        $aleatorios = new aleatorios();
        $aleatorios->rellenarArray();
        ?>
    </body>
</html>