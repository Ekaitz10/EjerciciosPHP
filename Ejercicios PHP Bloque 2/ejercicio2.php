<html>
    <head>
        <title>Ejercicio 2</title>
        <style>
            table, th, tr{
                border: solid 1px black;
            }
        </style>
    </head>
    <body>
        <?php
        class tabla{
            public $columnas=0;
            public $filas=0;

            public function __construct($columnas, $filas){
                $this->columnas = $columnas;
                $this->filas = $filas;
            }
            function construirTabla(){
                echo "<table>";
                for($i=0;$i<$this->filas;$i++){
                    echo "<tr>";
                    for($j=0;$j<$this->columnas;$j++){
                        echo "<th>#</th>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
        }
        $tabla = new tabla(4,6);
        $tabla ->construirTabla();
        ?>
    </body>
</html>