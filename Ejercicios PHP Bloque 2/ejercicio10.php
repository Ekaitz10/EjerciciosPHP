<html>
    <head>
        <title>Ejercicio 10</title>
    </head>
    <body>
        <?php
        class Persona{
            protected $dni;
            protected $nombre;
            protected $apellido;
            
            function __construct ($dni, $nombre, $apellido){
            $dni = $this->dni;
            $nombre = $this->nombre;
            $apellido = $this->apellido;
            }
            function setDni($dni){
                $this->dni = $dni;
            }
            function getNombre(){
                return $this->nombre;
            }
            function setNombre($nombre){
                $this->nombre = $nombre;
            }
            function getApellido(){
                return $this->apellido;
            }
            function setApellido($apellido){
                $this->apellido = $apellido;
            }
            public function mostrarInformacion(){
                echo "Persona: ".$this->nombre." ".$this->apellido."";
            }
        }
        class User Extends Persona{
            private $puntos;
            
            function __construct ($dni, $nombre, $apellido, $puntos){
                $puntos = $this->puntos;
            }

            function getPuntos(){
                return $this->puntos;
            }
            function setPuntos($puntos){
                $this->puntos = $puntos;
            }
            public function mostrarInformacion(){
                echo "User: ".$this->nombre." ".$this->apellido."";
            }
            public function mostrarPuntos(){
                if($this->puntos<100){
                    echo "<br>El usuario tiene menos de 100 puntos";
                }
            }
        }
        $persona = new Persona("73033899K", "Ekaitz", "Soto");
        $persona ->setNombre("Ekaitz");
        $persona ->setApellido("Soto");
        $persona1 = new User("73033899K", "Ekaitz", "Soto", 400);
        $persona1 ->setPuntos(30);
        var_dump($persona1 ->mostrarInformacion());
        $persona1 ->mostrarPuntos();
        ?>
    </body>
</html>