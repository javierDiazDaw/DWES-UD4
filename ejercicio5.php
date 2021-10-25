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
            <tr>
                <th>ID</th>
                <th>Origen</th>
                <th>Destino</th>
                <th>Fecha</th>
                <th>Compañia</th>
                <th>Modelo avion</th>
            </tr>
    <?php

        $mysqli = mysqli_connect('localhost','developer','developer','agenciaviajes');
        $error = mysqli_connect_errno();
        if ($error!= null){
            echo "<p>Error $error conectando a la base de datos:",mysqli_error($mysqli),"</p>";
            exit();
        }else{
            echo "conectando correctamente";
            echo"<br>";
        }
            
            $result = mysqli_query($mysqli, "SELECT * FROM `vuelos`");
           
            if($result==false){
                echo "consulta no funcionada correctamente";
            }
            else{            

                while($fila=mysqli_fetch_assoc($result)){
                    
                    echo "<tr>";
                        echo "<td>";
                        echo $fila["id"];
                        echo "</td>";
                        echo "<td>";
                        echo $fila["Origen"];
                        echo "</td>";
                        echo "<td>";
                        echo $fila["Destino"];
                        echo "</td>";
                        echo "<td>";
                        echo $fila["Fecha"];
                        echo "</td>";
                        echo "<td>";
                        echo $fila["Companya"];
                        echo "</td>";
                        echo "<td>";
                        echo $fila["Modeloavion"];
                        echo "</td>";
                    echo"</tr>";
                }
            }
            ?>

        </table>

        <?php

            $resultinsercion = mysqli_query($mysqli, "INSERT INTO `vuelos` (Origen, Destino, Fecha, Companya, Modeloavion) VALUES ('Huelva', 'Burgos', '2021-09-30 09:16:52', 'Iberia','A300')");
                if($resultinsercion==false){
                    echo "La consulta no ha funcionado correctamente";
                }
                else{
                    echo"Se han insertado ", mysqli_affected_rows($mysqli), " filas.";
                    echo "<br>";
                    echo "El id del ultimo  elemento añadido es ", mysqli_insert_id($mysqli);
               
                }

            $resultactualizacion = mysqli_query($mysqli, "UPDATE `vuelos` SET `Origen` = 'Malaga' WHERE `id`='9'");
                if($resultactualizacion==false){
                    echo "<br>";
                    echo "La consulta no ha funcionado correctamente";
                }
                else{
                    echo "<br>";
                    echo"Se han actualizado ", mysqli_affected_rows($mysqli), " filas.";
                   
               
                }
            
            $resultborrar = mysqli_query($mysqli, "DELETE FROM `vuelos` WHERE Origen= 'Almería'");
                if($result==false){
                    echo "<br>";
                    echo "La consulta no ha funcionado correctamente";
                }
                else{
                    echo "<br>";
                    echo"Se ha borrado ", mysqli_affected_rows($mysqli), " filas.";
                }    
                ?>

</body>
</html>