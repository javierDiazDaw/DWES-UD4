<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border = "1">
            
        <?php

        $usuario= "developer";
        $contrasenya= "developer";
        $basedatos= "agenciaviajes";


        $origen= "Granada";
        $destino= "Burgos";
        $fecha= "2021-09-30 09:16:52";
        $companya = "Iberia";
        $modeloavion= "A300";

       
        include "ejercicio6.inc.php";

           creaConexion($usuario, $contrasenya, $basedatos);

           

            creaVuelo($origen, $destino, $fecha, $companya, $modeloavion);

        ?>    
</body>
</html>