<html>
    <head>
        <title>Ejercicio 4</title>
    </head>
    <body>
        <?php
        class palindromo{
            private $fraseinicial=[];
            public function __construct ($fraseinicial){
                $this->fraseinicial = $fraseinicial;
            }
            function esPalindromo(){
                echo $this->fraseinicial;
                $frasesinespacios=[];
                $hola = str_replace(' ','',$this->fraseinicial);
                $reverse = strrev($hola);
                if($frasesinespacios == array_reverse($frasesinespacios)){
                    echo "<br>es palindromo";
                }else{
                    echo "<br>no es palindromo";
                }
            }
        }
        $palindromo = new palindromo("La ruta nos aporto otro paso natural");
        $palindromo -> esPalindromo();
        ?>
    </body>
</html>