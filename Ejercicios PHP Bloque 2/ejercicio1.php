<html>
    <head>
        <title>Ejercicio 1</title>
    </head>
    <body>
        <?php
        class arrays{
            public $primerarray=[];
            public $segundoarray=[];
            
            function __construct (){
                $this->primerarray=[];
                $this->primerarray=[];
            }
            function rellenarArray1(){

                for($i=0;$i<10;$i++){
                    $this->primerarray[$i]=$i;
                    echo $this->primerarray[$i]." ";
                };
            }
            function rellenarArray2(){
                $numaintroducir=1;
                for($j=0;$j<10;$j++){
                    for($i=1;$i<=$this->primerarray[$j];$i++){
                    $numaintroducir=$numaintroducir*$i;
                    }
                    $this->segundoarray[$j]=$numaintroducir;
                    $numaintroducir=1;
                }
                for($x=0;$x<10;$x++){
                    echo $this->segundoarray[$x]." ";
                };
            }
        }
        $arrays = new arrays();
        $arrays ->rellenarArray1();
        echo "<br>";
        $arrays ->rellenarArray2();
        ?>
    </body>
</html>