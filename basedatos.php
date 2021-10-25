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

                      
                $result2 = mysqli_query($mysqli, "SELECT * FROM `vuelos`");
               
                if($result2==false){
                    echo "consulta no funcionada correctamente";
                }else{            

                        while($file=mysqli_fetch_object($result2)){
                       echo "<tr>";
                        echo "<td>";
                        printf ("%s", $file->id);
                        echo "</td>";
                        echo "<td>";
                        printf ("%s", $file->Origen);
                        echo "</td>";
                        echo "<td>";
                        printf ("%s", $file->Destino);
                        echo "</td>";
                        echo "<td>";
                        printf ("%s", $file->Fecha);
                        echo "</td>";
                        echo "<td>";
                        printf ("%s", $file->Companya);
                        echo "</td>";
                        echo "<td>";
                        printf ("%s", $file->Modeloavion);
                        echo "</td>";  
                        }                      
                } 
            
            ?>
        </table>

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
                
                $result3 = mysqli_query($mysqli, "SELECT * FROM `vuelos`");
               
                if($result3==false){
                    echo "consulta no funcionada correctamente";
                }else{            

                        while($fila=mysqli_fetch_array($result3)){
                       
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
                         
                $result4 = mysqli_query($mysqli, "SELECT * FROM `vuelos`");
               
                if($result4==false){
                    echo "consulta no funcionada correctamente";
                }else{            

                        while($fila=mysqli_fetch_row($result4)){
                            echo "<tr>";
                            echo "<td>";
                            echo $fila[0];
                            echo "</td>";
                            echo "<td>";
                            echo $fila[1];
                            echo "</td>";
                            echo "<td>";
                            echo $fila[2];
                            echo "</td>";
                            echo "<td>";
                            echo $fila[3];
                            echo "</td>";
                            echo "<td>";
                            echo $fila[4];
                            echo "</td>";
                            echo "<td>";
                            echo $fila[5];
                            echo "</td>";
                        echo"</tr>";
                        }   
                } 
           
            ?>
        </table>

                <?php

                /*$resultborrar = mysqli_query($mysqli, "DELETE FROM `vuelos` WHERE Origen= 'Cadiz'");
                if($result==false){
                    echo "La consulta no ha funcionado correctamente";
                }
                else{
                    echo"Se ha borrado ", mysqli_affected_rows($mysqli), " filas.";
                }

                $resultinsercion = mysqli_query($mysqli, "INSERT INTO `vuelos` (Origen, Destino, Fecha, Companya, Modeloavion) VALUES ('Madrid', 'Valencia', '2021-10-21 09:16:52', 'Iberia','A380')");
                if($resultinsercion==false){
                    echo "La consulta no ha funcionado correctamente";
                }
                else{
                    echo"Se han insertado ", mysqli_affected_rows($mysqli), " filas.";
                    echo "<br>";
                    echo "El id del ultimo  elemento añadido es ", mysqli_insert_id($mysqli);
               
                }*/

                /*$resultactualizacion = mysqli_query($mysqli, "UPDATE `vuelos` SET `Origen` = 'Dos Hermanas' WHERE `id`='6'");
                if($resultactualizacion==false){
                    echo "La consulta no ha funcionado correctamente";
                }
                else{
                    echo"Se han actualizado ", mysqli_affected_rows($mysqli), " filas.";
                   

                ***FORMA EFICIENTE***

               $origen= "Huelva";
                $id =6;
                $sql="UPDATE vuelos SET Origen=? WHERE id=?";
                $consulta=mysqli_stmt_init($mysqli);
                }*/

                $origen= "Huelva";
                $id =6;
                $sql="SELECT* FROM vuelos WHERE Origen=? AND id=?";
                $consulta=mysqli_stmt_init($mysqli);
                if ($stmt = mysqli_prepare($mysqli, $sql)){
                    mysqli_stmt_bind_param($stmt, "si", $origen, $id);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_bind_result($stmt, $id, $origen, $destino, $fecha, $companya, $modeloavion);
                    while(mysqli_stmt_fetch($stmt)){
                        print "El vuelo de origen $origen y destino $destino tiene fecha prevista $fecha y es operado por la companía $companya con el modelo de avion $modeloavion";
                        
                    }

                    mysqli_stmt_close($stmt);
                }

                ?>
    </body>
</html>





