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
        //echo "Conectado correctamente";
        echo"<br>";
        $sql = "SELECT * FROM turista";
        $turistas=$conn->query($sql);

        echo" <p> PDO::FETCH_ASSOC </p>";
        
        echo" <table border = '1'> ";
            echo" <tr>";
            echo" <th>ID</th>";
            echo" <th>Nombre</th>";
            echo" <th>Apellido 1</th>";
            echo" <th>Apellido 2</th>";
            echo" <th>Direccion</th>";
            echo" <th>Telefono</th>";
            echo "</tr>";

            $turistas=$conn->query($sql);
                     
                
                while($fila = $turistas -> fetch(PDO::FETCH_ASSOC)){
                    
                    echo "<tr>";
                        echo "<td>";
                        echo $fila["id"];
                        echo "</td>";
                        echo "<td>";
                        echo $fila["nombre"];
                        echo "</td>";
                        echo "<td>";
                        echo $fila["apellido1"];
                        echo "</td>";
                        echo "<td>";
                        echo $fila["apellido2"];
                        echo "</td>";
                        echo "<td>";
                        echo $fila["direccion"];
                        echo "</td>";
                        echo "<td>";
                        echo $fila["telefono"];
                        echo "</td>";
                    echo"</tr>";                   
                }
            
        echo "</table>";

    } catch(PDOException $e){
        echo "Conexion fallida: " . $e ->getMessage();
    }
    $conn = null; //para cerrar conexion

    try {
        $conn = new PDO("mysql:host = $servidor; dbname=$baseDatos", $usuario, $pass);
        //echo "Conectado correctamente";
        echo"<br>";
        $sql = "SELECT * FROM turista";
        $turistas=$conn->query($sql);

        echo" <p> PDO::FETCH_NUM </p>";

        echo" <table border = '1'> ";
            echo" <tr>";
            echo" <th>ID</th>";
            echo" <th>Nombre</th>";
            echo" <th>Apellido 1</th>";
            echo" <th>Apellido 2</th>";
            echo" <th>Direccion</th>";
            echo" <th>Telefono</th>";
            echo "</tr>";

            $turistas=$conn->query($sql);
                     
                
                while($fila = $turistas -> fetch(PDO::FETCH_NUM)){
                    
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
            
        echo "</table>";

    } catch(PDOException $e){
        echo "Conexion fallida: " . $e ->getMessage();
    }
    $conn = null; //para cerrar conexion

    try {
        $conn = new PDO("mysql:host = $servidor; dbname=$baseDatos", $usuario, $pass);
        //echo "Conectado correctamente";
        echo"<br>";
        $sql = "SELECT * FROM turista";
        $turistas=$conn->query($sql);

        echo" <p> PDO::FETCH_BOTH </p>";
        
        echo" <table border = '1'> ";
            echo" <tr>";
            echo" <th>ID</th>";
            echo" <th>Nombre</th>";
            echo" <th>Apellido 1</th>";
            echo" <th>Apellido 2</th>";
            echo" <th>Direccion</th>";
            echo" <th>Telefono</th>";
            echo "</tr>";

            $turistas=$conn->query($sql);
                     
                
                while($fila = $turistas -> fetch(PDO::FETCH_BOTH)){
                    
                    echo "<tr>";
                        echo "<td>";
                        echo $fila["id"];
                        echo "</td>";
                        echo "<td>";
                        echo $fila["nombre"];
                        echo "</td>";
                        echo "<td>";
                        echo $fila["apellido1"];
                        echo "</td>";
                        echo "<td>";
                        echo $fila["apellido2"];
                        echo "</td>";
                        echo "<td>";
                        echo $fila["direccion"];
                        echo "</td>";
                        echo "<td>";
                        echo $fila["telefono"];
                        echo "</td>";
                    echo"</tr>";                   
                }
            
        echo "</table>";

    } catch(PDOException $e){
        echo "Conexion fallida: " . $e ->getMessage();
    }
    $conn = null; //para cerrar conexion

    try {
        $conn = new PDO("mysql:host = $servidor; dbname=$baseDatos", $usuario, $pass);
        //echo "Conectado correctamente";
        echo"<br>";
        $sql = "SELECT * FROM turista";
        $turistas=$conn->query($sql);

        echo" <p> PDO::FETCH_OBJ </p>";
        
        echo" <table border = '1'> ";
            echo" <tr>";
            echo" <th>ID</th>";
            echo" <th>Nombre</th>";
            echo" <th>Apellido 1</th>";
            echo" <th>Apellido 2</th>";
            echo" <th>Direccion</th>";
            echo" <th>Telefono</th>";
            echo "</tr>";

            $turistas=$conn->query($sql);
                     
                
                while($fila = $turistas -> fetch(PDO::FETCH_OBJ)){
                    
                    echo "<tr>";
                    echo "<td>";
                    printf ("%s", $fila->id);
                    echo "</td>";
                    echo "<td>";
                    printf ("%s", $fila->nombre);
                    echo "</td>";
                    echo "<td>";
                    printf ("%s", $fila->apellido1);
                    echo "</td>";
                    echo "<td>";
                    printf ("%s", $fila->apellido2);
                    echo "</td>";
                    echo "<td>";
                    printf ("%s", $fila->direccion);
                    echo "</td>";
                    echo "<td>";
                    printf ("%s", $fila->telefono);
                    echo "</td>";  
                                            
                }
            
        echo "</table>";

    } catch(PDOException $e){
        echo "Conexion fallida: " . $e ->getMessage();
    }
    $conn = null; //para cerrar conexion

    try {
        $conn = new PDO("mysql:host = $servidor; dbname=$baseDatos", $usuario, $pass);
        //echo "Conectado correctamente";
        echo"<br>";
        $sql = "SELECT * FROM turista";
        $turistas=$conn->query($sql);

        echo" <p> PDO::FETCH_LAZY </p>";
        
        echo" <table border = '1'> ";
            echo" <tr>";
            echo" <th>ID</th>";
            echo" <th>Nombre</th>";
            echo" <th>Apellido 1</th>";
            echo" <th>Apellido 2</th>";
            echo" <th>Direccion</th>";
            echo" <th>Telefono</th>";
            echo "</tr>";

            $turistas=$conn->query($sql);
                     
                
                while($fila = $turistas -> fetch(PDO::FETCH_LAZY)){
                    
                    echo "<tr>";
                        echo "<td>";
                        echo $fila["id"];
                        echo "</td>";
                        echo "<td>";
                        echo $fila["nombre"];
                        echo "</td>";
                        echo "<td>";
                        echo $fila["apellido1"];
                        echo "</td>";
                        echo "<td>";
                        echo $fila["apellido2"];
                        echo "</td>";
                        echo "<td>";
                        echo $fila["direccion"];
                        echo "</td>";
                        echo "<td>";
                        echo $fila["telefono"];
                        echo "</td>";
                    echo"</tr>";                   
                }
            
        echo "</table>";

    } catch(PDOException $e){
        echo "Conexion fallida: " . $e ->getMessage();
    }
    $conn = null; //para cerrar conexion

    try {
        $conn = new PDO("mysql:host = $servidor; dbname=$baseDatos", $usuario, $pass);
        //echo "Conectado correctamente";
        echo"<br>";
        $sql = "SELECT * FROM turista";
        $turistas=$conn->query($sql);

    echo" <p> PDO::FETCH_BOUND </p>";
        
        echo" <table border = '1'> ";
            echo" <tr>";
            echo" <th>ID</th>";
            echo" <th>Nombre</th>";
            echo" <th>Apellido 1</th>";
            echo" <th>Apellido 2</th>";
            echo" <th>Direccion</th>";
            echo" <th>Telefono</th>";
            echo "</tr>";

            $turistas=$conn->query($sql);
                     
                
                while($fila = $turistas -> fetch(PDO::FETCH_BOUND)){
                    
                    echo "<tr>";
                        echo "<td>";
                        echo $fila-> bincolumn ["id"];
                        echo "</td>";
                        echo "<td>"; 
                        echo $fila["nombre"];
                        echo "</td>";
                        echo "<td>";
                        echo $fila["apellido1"];
                        echo "</td>";
                        echo "<td>";
                        echo $fila["apellido2"];
                        echo "</td>";
                        echo "<td>";
                        echo $fila["direccion"];
                        echo "</td>";
                        echo "<td>";
                        echo $fila["telefono"];
                        echo "</td>";
                    echo"</tr>";                   
                }
            
        echo "</table>";

    } catch(PDOException $e){
        echo "Conexion fallida: " . $e ->getMessage();
    }
    $conn = null; //para cerrar conexion

    ?>
</body>
</html>
