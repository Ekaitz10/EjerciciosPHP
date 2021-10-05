<html>
    <head>
        <title>Ejercicio 8</title>
    </head>
    <body>
        <?php
        class piramide{
            private $numero;

            public function __construct ($numero){
                $this->numero = $numero;
            }
            function piramide(){
                $cont=$this->numero/2 + 1;
                $cont2=1;
                for($j=0;$j<$this->numero;$j++){
                    for($i=$cont;$i>0;$i--){
                        echo " ";
                    }
                    for($i=0;$i<$cont2;$i++){
                        echo "*";
                    }
                    $cont=$cont-1;
                    $cont2=$cont2+1;
                    echo "<br>";
                }
            }
        }
        $piramide = new piramide(7);
        $piramide -> piramide();
        ?>
    </body>
</html>