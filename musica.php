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
    $baseDatos = "musica";
    $usuario = "developer";
    $pass = "developer";

    try {
        $conn = new PDO("mysql:host = $servidor; dbname=$baseDatos", $usuario, $pass);
        //echo "Conectado correctamente";
        echo"<br>";
        $sql = "SELECT * FROM cancion";
        $canciones=$conn->query($sql);
           
        echo" <table border = '1'> ";
            echo" <tr>";
            echo" <th>ID</th>";
            echo" <th>Nombre</th>";
            echo" <th>Genero</th>";
            echo" <th>Autor</th>";
            echo" <th>Duracion</th>";
            echo" <th>Copyright</th>";
            echo" <th>Lanzamiento</th>";
            echo" <th>Imagen del CD</th>";
            echo "</tr>";

            $canciones=$conn->query($sql);
                     
                
                while($fila = $canciones -> fetch(PDO::FETCH_ASSOC)){
                    
                    echo "<tr>";
                        echo "<td>";
                        echo $fila["id"];
                        echo "</td>";
                        echo "<td>";
                        echo $fila["nombre"];
                        echo "</td>";
                        echo "<td>";
                        echo $fila["genero"];
                        echo "</td>";
                        echo "<td>";
                        echo $fila["autor"];
                        echo "</td>";
                        echo "<td>";
                        echo $fila["duracion"];
                        echo "</td>";
                        echo "<td>";
                        echo $fila["copyright"];
                        echo "</td>";
                        echo "<td>";
                        echo $fila["lanzamiento"];
                        echo "</td>";
                        echo "<td>";
                        echo $fila["imagencd"];
                        echo "</td>";
                    echo"</tr>";                   
                }
            
        echo "</table>";

    } catch(PDOException $e){
        echo "Conexion fallida: " . $e ->getMessage();
    }
    $conn = null; //para cerrar conexion