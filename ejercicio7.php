<?php

function creaConexion(){

    $mysqli = new mysqli('localhost', "developer", "developer", "agenciaviajes");
    $error = $mysqli -> connect_errno;
    if ($error!= null){
        echo "<p>Error $error conectando a la base de datos:",$mysqli -> connect_error,"</p>";
        exit();
    }else{
        echo "conectando correctamente";
        echo"<br>";
    }
        return $mysqli;
}

function creaVuelo($origen, $destino, $fecha, $companya, $modeloavion){
    $retorno = false;
    $mysqli = creaConexion();

    $sql = "INSERT INTO `vuelos` (Origen, Destino, Fecha, Companya, Modeloavion) VALUES (?, ?, ?, ?, ? )";
    $mysqli->stmt_init();

    if ($stmt = $mysqli->prepare($sql)){
        $stmt->bind_param("sssss", $origen, $destino, $fecha, $companya, $modeloavion);
        $stmt->execute();
        $stmt->close();
    }
    $mysqli -> close();
}

function modificaDestino($id, $destino){

    $mysqli = creaConexion();
    $retorno = false;
    $sql = "UPDATE `vuelos` SET `Destino` =?    WHERE `id`= ?";
    $mysqli->stmt_init();

    if($stmt = $mysqli->prepare($sql)){
        $stmt->bind_param("is", $destino, $id);
        $stmt->execute();
        $stmt->close();

    }
    //$mysqli -> close($mysqli);
    $mysqli -> close();
    return $retorno;
}

function modificaCompanya($id, $companya){

    $mysqli = creaConexion();
    $retorno = false;
    $sql = "UPDATE `vuelos` SET `Companya` =? WHERE `id`= ?";
    $mysqli->stmt_init();
    if($stmt = $mysqli->prepare($sql)){
        $stmt->bind_param("si", $companya, $id);
        $stmt->execute();
        $stmt->close();

    }
    //$mysqli -> close($mysqli);
    $mysqli -> close();
    return $retorno;

}

function eliminaVuelo($id){

    $mysqli = creaConexion();
    $retorno = false;
    $sql = "DELETE FROM `vuelos` WHERE `id`= ?";
    $mysqli->stmt_init();
    if($stmt = $mysqli->prepare($sql)){
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();

    }
    //$mysqli -> close($mysqli);
    $mysqli -> close();
    return $retorno;

}

function extraeVuelos(){
    $mysqli = creaConexion();
    $sql = "SELECT * FROM vuelos";
    $result = mysqli_query($mysqli, $sql);
    return $result;
}

//creaVuelo("Madrid", "Barcelona", "2021-10-28 14:04:59", "Iberia", "A123");
modificaDestino("1","Cuenca");
modificaCompanya("1","Armario");
eliminaVuelo("1");

$vuelos = extraeVuelos();
while($fila = $vuelos -> fetch_assoc()){

    print_r($fila);
    echo"<br>";
}
?>