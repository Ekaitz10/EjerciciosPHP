<html>
    <head>
        <title>Ejercicio 4</title>
    </head>
    <body>
        <?php
        class convertirString{
            public $string;
            public $array;
            public $arrayasoc;
            public function __construct($string){
                $this->string = $string;
                $this->array =[];
                $this->arrayasoc =[];
            }
            function crearymostrarArray(){
                $this->array = explode(' ',$this->string);
                for($j=0;$j<count($this->array);$j++){
                    $arrayasoc[$this->array[$j]] = strlen($this->array[$j]);
                };
                print_r($arrayasoc);
            }
        }
        $convertirString = new convertirString("manzana pera limón sandía melón");
        $convertirString->crearymostrarArray();
        ?>
    </body>
</html>