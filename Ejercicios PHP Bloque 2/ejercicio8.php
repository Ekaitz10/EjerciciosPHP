<html>
    <head>
        <title>Ejercicio 8</title>
    </head>
    <body>
        <form method="get">
        Nombre del archivo:
            <input type="text" name="archivo"></input><br>
            <br>
            <input type="submit" value="Buscar"></input>
        </form>
        <?php
            $archivo = $_GET["archivo"];
            try{
                if(file_exists($archivo)){
                    echo "el archivo existe";
                }else{
                    throw new Exception ("el archivo no existe");
                }
            }catch(Exception $e){
                echo $e->getMessage();
            };
        ?>
    </body>
</html>