<html>
    <head>
        <title>Ejercicio 3</title>
    </head>
    <body>
        <?php
        class rangodeedad{
            private $edad=0;

            public function __construct ($edad){
                $this->edad = $edad;
            }
            function rangoedad(){
                if(($this->edad>0) && ($this->edad<10)){
                    echo "Se encuentra entre 0 y 10 años";
                }else if(($this->edad>10) && ($this->edad<20)){
                    echo "Se encuentra entre 10 y 20 años";
                }else if(($this->edad>20) && ($this->edad<30)){
                    echo "Se encuentra entre 20 y 30 años";
                }else if(($this->edad>30) && ($this->edad<40)){
                    echo "Se encuentra entre 30 y 40 años";
                }else if(($this->edad>40) && ($this->edad<50)){
                    echo "Se encuentra entre 40 y 50 años";
                }else if(($this->edad>50) && ($this->edad<60)){
                    echo "Se encuentra entre 50 y 60 años";
                }else if(($this->edad>60) && ($this->edad<70)){
                    echo "Se encuentra entre 60 y 70 años";
                }else if(($this->edad>70) && ($this->edad<80)){
                    echo "Se encuentra entre 70 y 80 años";
                }else if(($this->edad>80) && ($this->edad<90)){
                    echo "Se encuentra entre 80 y 90 años";
                }else if(($this->edad>90) && ($this->edad<100)){
                    echo "Se encuentra entre 90 y 100 años";
                }
            }
        }
        $rangodeedad = new rangodeedad(42);
        $rangodeedad -> rangoedad();
        ?>
    </body>
</html>