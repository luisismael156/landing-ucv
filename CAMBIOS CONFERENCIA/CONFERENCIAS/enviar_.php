<?php

require("conexion.php");

$nombres = $_POST['nombres'];
$dni = $_POST['dni'];
$celular = $_POST['celular'];
$correo = $_POST['correo'];
$campus = $_POST['sede'];
$carrera = $_POST['carrera'];
$grado = $_POST['grado'];
$interes = $_POST['interes'];
$condiciones = "Acepto";
$producto = "PREGRADO";
$landing = $_POST['landing'];
$departamento=$_POST['idDepa'];
$provincia=$_POST['idProv'];
$distrito=$_POST['ciudad_id'];
$procedencia = $_POST['source'];
$institucion = $_POST['institucion'].' - '.$_POST['anoegreso'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$tipo_doc="DNI";

$fecha=date('d-m-Y',strtotime($fecha));
$hora=date('h:i:s', time());


$servername = "localhost";
$username = "somosucv_smvvocg";
$password = "x)Y1=Y.%BUgQ";
$dbname = "somosucv_DB7";

$database = "somosucvedu_ubigeo";
$consulta = new PDO("mysql:host=$servername;dbname=$database", $username, $password);


function getSingleValue($conn, $sql, $parameters)
{
    $q = $conn->prepare($sql);
    $q->execute($parameters);
    return $q->fetchColumn();
}

$depafinal = getSingleValue($consulta, "select name from ubdepartamento where id=?", [$departamento]); 
$provifinal = getSingleValue($consulta, "select name from ubprovincia where id=?", [$provincia]);
$distrifinal = getSingleValue($consulta, "select name from ubdistrito where id=?", [$distrito]); 





try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

    
    

    $sql = "INSERT INTO `registrocol` (`fecha`,`hora`,`nombres`,`dni`,`email`,`telefono`,`sede`,`carrera`,`landing`,`source`,`departamento`,`provincia`,`distrito`,`institucion`,`grado`) VALUES (now(),'".$hora."','".$nombres."','".$dni."','".$correo."','".$celular."','".$campus."','".$carrera."','".$landing."','".$source."','".$depafinal."','".$provifinal."','".$distrifinal."','".$institucion."','".$grado."')";
    $conn->exec($sql);

    echo '<script type="text/javascript">alert("Gracias por su registro. Nos contactaremos pronto.");</script>';
    echo "<meta http-equiv='refresh' content='1;URL=https://www.somosucv.edu.pe/gracias.php'>";
        

    
    
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>





















?>