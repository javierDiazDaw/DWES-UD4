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

    echo"<table border = '1'>";
    $file =fopen("starWars.txt","r+");
    do{
       $datos=fgets($file);
       list($nombre,$estatura,$peso,$colorPelo, $colorPiel, $colorOjos, $edad, 
       $genero, $procedencia, $especie)=explode(",", $datos);
       
        echo"<tr>";
            echo"<td>$nombre</td>";
            echo"<td>$estatura</td>";
            echo"<td>$peso</td>";
            echo"<td>$colorPelo</td>";
            echo"<td>$colorPiel</td>";
            echo"<td>$colorOjos</td>";
            echo"<td>$edad</td>";
            echo"<td>$genero</td>";
            echo"<td>$procedencia</td>";
            echo"<td>$especie</td>";
        echo"</tr>";
    
    }while(feof($file)!=true);

    echo"</table>";


    fwrite($file, "\nJavier Díaz, 1.80, 172,77, brown, white, brown, 23, male, Tatooine,Human");

    fclose($file);

    ?>
</body>
</html>