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

    $catalogo = simplexml_load_file("catalogo.xml");
    $libro2= $file->book[1];
    printf("<p>Libro 2: %s, </p>", $catalogo->book[1]->author);


    echo "<table border = '1'>";

        

    foreach($catalogo as $libro){

        echo"<tr>";
            echo"<td> AUTOR, $libro->author,</td>" ;
            echo"<td> TITULO, $libro->title,</td>";
            echo"<td> GENERO, $libro->genre,</td>";
            echo"<td> PRECIO, $libro->price,</td>";
            echo"<td> PUBLICACION, $libro->publish_date,</td>";
            echo"<td> DESCRIPCION, $libro->description,</td>";
            echo"<br>";
        echo"</tr>";
    }

   
    



    ?>
</body>
</html>