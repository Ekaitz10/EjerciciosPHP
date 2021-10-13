<html>
    <head>
        <title>Ejercicio 8</title>
    </head>
    <body>
        <form method="post" style="border: solid 1px black; padding: 2px; text-align: center">
            <input type="text" name="numero1"></input><br>
            <br>
            <input type="text" name="numero2"></input><br><br>
            <input type="submit" value="Enviar"></input>
        </form>
        <?php
        class potencias{
            public $base;
            public $exponente;
            public function __construct($base=null, $exponente=null){
                if($base==null){
                    $this->base = 0;
                }else{
                    $this->base = $_POST["numero1"];
                }
                if($exponente==null){
                    $this->exponente = 2;
                }else{
                    $this->exponente = $_POST["numero2"];
                }
            }
            function calcularPotencias(){
                $resultado = $this->base**$this->exponente;
                echo "<center>$resultado</center>";
            }
        }
        $potencias = new potencias();
        $potencias->calcularPotencias();
        ?>
    </body>
</html>