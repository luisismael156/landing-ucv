<?php

require("conexion.php");

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$dni = $_POST['dni'];
$campus = $_POST['campus'];
$landing = $_POST['landing'];
$source = $_POST['source'];
$url = $_POST['url'];
$condiciones = "Acepto";
$producto = "PREGRADO";
$hora=date('h:i:s', time());

$fecha=date('d-m-Y',strtotime($fecha));
$hora=date('h:i:s', time());


if ($campus == 'Ate') { //Ate
	$para = "jbacilio@ucv.edu.pe";
} elseif ($campus == 'Chepén') { //Chepén
	$para = "pmlescano@ucv.edu.pe";
} elseif ($campus == 'Chiclayo') { //Chiclayo
	$para = "bllontop@ucv.edu.pe";
} elseif ($campus == 'Chimbote') { //Chimbote
	$para = "ycastillog@ucv.edu.pe";
} elseif ($campus == 'San Juan de Lurigancho') { //Lima Este
	$para = "mbarreto@ucv.edu.pe";
} elseif ($campus == 'Los Olivos') { //Lima Norte
	$para = "jguanilo@ucv.edu.pe";
} elseif ($campus == 'Piura') { //Piura
	$para = "rgomez@ucv.edu.pe";
} elseif ($campus == 'Tarapoto') { //Tarapoto
	$para = "dmarin@ucv.edu.pe";
} elseif ($campus == 'Trujillo') {
	$para = "kazabachea@ucv.edu.pe";
} elseif ($campus == 'Callao') {
	$para = "iruiz@ucv.edu.pe";
} elseif ($campus == 'Moyobamba'){
	$para = "dcarrasco@ucv.edu.pe";
} elseif ($campus == 'Huaraz'){
	$para = "kacunab@ucv.edu.pe";
}

$header = 'From: ' . 'noreply@somosucv.edu.pe' . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-type:text/html; charset=utf-8";

$mensaje = "Este mensaje fue enviado por " . $nombres . " " . $apellidos .  " \r\n";
$mensaje .= " \r\n\r\n";
$mensaje .= "Desde el landing de DRI - Alumnos UCV hacía el extanjero";
$mensaje .= " \r\n\r\n";
$mensaje .= "Teléfono: " . $celular . " \r\n";
$mensaje .= "Email: " . $email. " \r\n";
$mensaje .= "DNI: " . $dni. " \r\n";
$mensaje .= "Sede: " . $campus . " \r\n";
$mensaje .= " \r\n\r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$asunto = "Suscripcion desde Landing ORI - " . $campus . " " . $nombre;

$con=conexion();
$sql = "INSERT INTO `registros` (`fecha`,`hora`,`nombre`,`apellidos`,`dni`,`email`,`sede`,`telefono`,`condiciones`,`producto`,`landing`,`procedencia`,`url`) VALUES (now(),'".$hora."','".$nombres."','".$apellidos."','".$dni."','".$email."','".$campus."','".$celular."','".$condiciones."','".$producto."','".$landing."','".$source."','".$url."')";

mysql_query($sql) or die(mysql_error()); 

//mail($para, $asunto, utf8_decode($mensaje), $header);

echo "<meta http-equiv='refresh' content='1;URL=https://www.somosucv.edu.pe/gracias.php'>"

?>