<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$servidor = "localhost";
    $baseDatos = "agenciaviajes";
    $usuario = "developer";
    $pass = "developer";

    try {
        $conn = new PDO("mysql:host = $servidor; dbname=$baseDatos", $usuario, $pass);
        echo "Conectado correctamente";
        echo"<br>";
        $sql = "SELECT * FROM turista";
        $turistas=$conn->query($sql);
        while($turista = $turistas->fetch()){
           echo "El turista de nombre ".$turista['nombre']." ".$turista['apellido1']." ".$turista['apellido2']." es de ".$turista['direccion']. "<br />";

        }

    } catch(PDOException $e){
        echo "Conexion fallida: " . $e ->getMessage();
    }

    $conn = null; //para cerrar conexion

    try {
        $conn = new PDO("mysql:host = $servidor; dbname=$baseDatos", $usuario, $pass);
        echo "Conectado correctamente";
        echo"<br>";

        $sql = "INSERT INTO turista (nombre, apellido1, apellido2, direccion, telefono) VALUES ('Javier', 'Jimenez', 'Castillo', 'Dos hermanas', '637891323')";
        $numeroClientes=$conn->exec($sql);
        $last_id = $conn->lastInsertId();
        echo "Se han añadido $numeroClientes cliente nuevo con el id: $last_id.";
        echo"<br>";

    } catch(PDOException $e){
        echo "Conexion fallida: " . $e ->getMessage();
    }

    $conn = null; //para cerrar conexion

    try {
        $conn = new PDO("mysql:host = $servidor; dbname=$baseDatos", $usuario, $pass);
        echo "Conectado correctamente";
        echo"<br>";

        $sql = "DELETE FROM  turista WHERE id = 1";
        echo"<br>";
        $numeroClientesBorrados=$conn->exec($sql);
        echo "Se han eliminado $numeroClientesBorrados cliente.";


    } catch(PDOException $e){
        echo "Conexion fallida: " . $e ->getMessage();       
    }

    $conn = null; //para cerrar conexion

    try {
        $conn = new PDO("mysql:host = $servidor; dbname=$baseDatos", $usuario, $pass);
        echo "Conectado correctamente";
        echo"<br>";

        $sql = "UPDATE turista SET nombre = 'Carmen', apellido1= 'Rufo', apellido2= 'Palomo', direccion= 'Sevilla', telefono='111111111' WHERE id= 2  OR id= 3";
        echo"<br>";
        $numeroClientesActualizados=$conn->exec($sql);
        echo "Se han modificado $numeroClientesActualizados cliente.";


    } catch(PDOException $e){
        echo "Conexion fallida: " . $e ->getMessage();
    }

    $conn = null; //para cerrar conexion


    ?>
</body>
</html>
