<?php

function creaConexion($usuario, $contraseya, $basedatos){

    $mysqli = mysqli_connect('localhost', $usuario, $contraseya, $basedatos);
    $error = mysqli_connect_errno();
    if ($error!= null){
        echo "<p>Error $error conectando a la base de datos:",mysqli_error($mysqli),"</p>";
        exit();
    }else{
        echo "conectando correctamente";
        echo"<br>";
    }

}

function creaVuelo($origen, $destino, $fecha, $companya, $modeloavion){

    $mysqli = creaConexion("developer", "developer", "agenciaviajes");
    $resultinsercion = "INSERT INTO `vuelos` (Origen, Destino, Fecha, Companya, Modeloavion) VALUES ('Huelva', 'Burgos', '2021-09-30 09:16:52', 'Iberia','A300')";
                if($resultinsercion==false){
                    echo "La consulta no ha funcionado correctamente";
                }
                else{
                    echo"Se han insertado ", mysqli_affected_rows($mysqli), " filas.";
                    echo "<br>";
                    echo "El id del ultimo  elemento añadido es ", mysqli_insert_id($mysqli);
               
                }

}

function modificaDestino(){

    $resultactualizacion = mysqli_query($mysqli, "UPDATE `vuelos` SET `Origen` = 'Malaga' WHERE `id`='9'");
                if($resultactualizacion==false){
                    echo "<br>";
                    echo "La consulta no ha funcionado correctamente";
                }
                else{
                    echo "<br>";
                    echo"Se han actualizado ", mysqli_affected_rows($mysqli), " filas.";
                   
               
                }

}

function modificaCompanya(){

}

function eliminaVuelo(){

}

function extraeVuelos(){

}


?>