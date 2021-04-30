<?php


$colegio=$_POST['colegio'];
$departamento=$_POST['departamento'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$sede=$_POST['sede'];
$evento=$_POST['evento'];
$source=$_POST['source'];
$dni=$_POST['dni'];
$cargo=$_POST['cargo'];


$condiciones = "Acepto";
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];

$fecha=date('d-m-Y',strtotime($fecha));
$hora=date('h:i:s', time());

$servername = "localhost";
$username = "somosucvedu_eduexperience";
$password = "?[R,-2yP10{b";
$dbname = "somosucvedu_eduevento";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    $sql = "INSERT INTO `eduevento` (`dni`,`nombreie`, `departamento`, `nombres`, `apellidos`, `telefono`, `correo`, `sede`, `condiciones`, `evento`, `source`, `fecha`) VALUES ('".$dni."','".$colegio."','".$departamento."','".$nombres."','".$apellidos."','".$telefono."','".$correo."','".$sede."','".$condiciones."','".$evento."','".$source."',now())";
    $conn->exec($sql);
    
    echo '<script type="text/javascript">alert("Gracias por su registro. Nos contactaremos pronto.");</script>';
    $url = "<meta http-equiv='refresh' content='1;URL=https://somosucv.edu.pe/'>";
    echo $url;
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>