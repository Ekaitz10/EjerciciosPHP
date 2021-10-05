<html>
    <head>
        <title>Ejercicio 2</title>
    </head>
    <body>
        <?php
        class mayor{
            private $num1=0;
            private $num2=0;
            private $num3=0;

            public function __construct ($num1, $num2, $num3){
                $this->num1 = $num1;
                $this->num2 = $num2;
                $this->num3 = $num3;
            }
            function mayorQue(){
                if(($this->num1>$this->num2) && ($this->num1>$this->num3)){
                    echo $this->num1;
                }else if(($this->num2>$this->num1) && ($this->num2>$this->num3)){
                    echo $this->num2;
                }else if(($this->num3>$this->num1) && ($this->num3>$this->num2)){
                    echo $this->num3;
                }
            }
        }
        $mayor = new mayor(4,2,6);
        $mayor -> mayorQue();
        ?>
    </body>
</html>