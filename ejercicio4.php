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
        <br>    
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
        <br>        
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
        <br>        
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
    </body>
</html>





