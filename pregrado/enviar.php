<?php

require("conexion.php");

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$dni = $_POST['dni'];
$medio = $_POST['medio'];
$landing = $_POST['landing'];
$source = $_POST['source'];
$carrera = $_POST['carrera'];
$sede = $_POST['sede'];
$condiciones = "Acepto";
$producto = "PREGRADO";
$hora=date('h:i:s', time());
$url = $_POST['url'];

$fecha=date('d-m-Y',strtotime($fecha));
$hora=date('h:i:s', time());

include 'correo.php';

$con=conexion();
$sql = "INSERT INTO `registros` (`fecha`,`hora`,`nombre`,`apellidos`,`dni`,`email`,`telefono`,`sede`,`carrera`,`medio`,`condiciones`,`producto`,`landing`,`procedencia`,`url`) VALUES (now(),'".$hora."','".$nombres."','".$apellidos."','".$dni."','".$email."','".$celular."','".$sede."','".$carrera."','".$medio."','".$condiciones."','".$producto."','".$landing."','".$source."','".$url."')";

mysql_query($sql) or die(mysql_error()); 

echo "<meta http-equiv='refresh' content='1;URL=https://www.somosucv.edu.pe/gracias.php?sede=" . $sede . "?carrera=" . $carrera . "'>"

?>