<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
try{
    $pdo = new PDO("mysql:host=localhost;dbname=somosucv_DB7", "somosucv_smvvocg", "x)Y1=Y.%BUgQ");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
 
// Attempt search query execution
try{
    $nombre = $_POST['nombres'];
    $dni = $_POST['dni'];
    $celular = $_POST['celular'];
    $correo = $_POST['correo'];
    $campus = $_POST['sede'];
    $carrera = $_POST['carrera'];
    $landing = $_POST['landing'];
    $source = $_POST['source'];
    $institucion = $_POST['institucion'];
    $fecha=$_POST['fecha'];
    $hora=$_POST['hora'];

    $fecha=date('d-m-Y',strtotime($fecha));
    $hora=date('h:i:s', time());
    
    
    $depa = $_REQUEST["depa"];
    $prov = $_REQUEST["prov"];
    $dist = $_REQUEST["dist"];
    $consulta = new PDO("mysql:host=localhost;dbname=somosucvedu_ubigeo", "somosucv_smvvocg", "x)Y1=Y.%BUgQ");

    function getSingleValue($conn, $sql, $parameters)
    {
        $q = $conn->prepare($sql);
        $q->execute($parameters);
        return $q->fetchColumn();
    }

    $depafinal = getSingleValue($consulta, "select name from ubdepartamento where id=?", [$depa]);
    $provfinal = getSingleValue($consulta, "select name from ubprovincia where id=?", [$prov]);
    $distfinal = getSingleValue($consulta, "select name from ubdistrito where id=?", [$dist]);

    // create prepared statement
    $sql = "INSERT INTO `registrocol` (`fecha`,`hora`,`nombres`,`dni`,`email`,`telefono`,`sede`,`carrera`,`landing`,`source`,`departamento`,`provincia`,`distrito`,`institucion`,`grado`) VALUES (now(),'".$hora."','".$nomre."','".$apellidos."','".$dni."','".$correo."','".$celular."','".$campus."','".$carrera."','".$landing."','".$source."','".$depafinal."','".$provfinal."','".$distfinal."','".$institucion."')";
    $stmt = $pdo->prepare($sql);
    
    // execute the prepared statement
    $stmt->execute();
    echo "<meta http-equiv='refresh' content='1;URL=https://www.somosucv.edu.pe/gracias.php?sede=" . $campus . "?carrera=" . $carrera . "'>"
     
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close statement
unset($stmt);
 
// Close connection
unset($pdo);
?>