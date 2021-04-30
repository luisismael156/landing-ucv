<?php
$header = 'From: ' . 'noreply@somosucv.edu.pe' . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombres . " " . $apellidos .  " \r\n";
$mensaje .= " \r\n\r\n";
$mensaje .= "SOMOS UCV - " . $landing . ".";
$mensaje .= " \r\n\r\n";
$mensaje .= "Nombres y Apellidos: " . $nombres . " " . $apellidos . " \r\n";
$mensaje .= "DNI: " . $dni . " \r\n";
$mensaje .= "Teléfono: " . $celular . " \r\n";
$mensaje .= "Email: " . $email . " \r\n";
$mensaje .= "Sede: " . $sede . " \r\n";
$mensaje .= "PREGRADO \r\n";
$mensaje .= "Carrera: " . $carrera . " \r\n";
$mensaje .= " \r\n\r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

if ($sede == 'Ate') { //Ate
	$para = "alicla@ucv.edu.pe";
} elseif ($sede == 'Chepén') { //Chepén
	$para = "mluis@ucv.edu.pe";
} elseif ($sede == 'Chiclayo') { //Chiclayo
	$para = "promocion.cix@ucv.edu.pe";
} elseif ($sede == 'Chimbote') { //Chimbote
	$para = "gpaz@ucv.edu.pe";
} elseif ($sede == 'San Juan de Lurigancho') { //Lima Este
	$para = "asesoriaeducativa.epre.sjl@ucv.edu.pe";
} elseif ($sede == 'Los Olivos') { //Lima Norte npadilla
	$para = "frivadeneyra@ucv.edu.pe";
} elseif ($sede == 'Piura') { //Piura
	$para = "mlavalle@ucv.edu.pe";
} elseif ($sede == 'Tarapoto') { //Tarapoto
	$para = "jcarvallo@ucv.edu.pe";
} elseif ($sede == 'Trujillo') {
	$para = "jsilvaco@ucv.edu.pe";
} elseif ($sede == 'Callao') {
	$para = "tgonzales@ucv.edu.pe";
} elseif ($sede == 'Moyobamba'){
	$para = "eespinoza@ucv.edu.pe";
} elseif ($sede == 'Huaraz'){
	$para = "hmayta@ucv.edu.pe";
}

$asunto = "Suscripcion desde SOMOSUCV - " . $sede . " " . $nombres;

mail($para, $asunto, utf8_decode($mensaje), $header);



//Valores para Pardot

if ($_POST['sede'] == "Ate") {
	$local = "6600000000";//"Ate";
} elseif ($_POST['sede'] == "Chepén") {
	$local = "7100000000";//"Chepén";
} elseif ($_POST['sede'] == "Chiclayo") {
	$local = "1000003204";//"Chiclayo";
} elseif ($_POST['sede'] == "Chimbote") {
	$local = "1000147917";//"Chimbote";
} elseif ($_POST['sede'] == "San Juan de Lurigancho") {
	$local = "6500000000";//"San Juan de Lurigancho";
} elseif ($_POST['sede'] == "Los olivos") {
	$local = "1000095671";//"Los olivos";
} elseif ($_POST['sede'] == "Piura") {
	$local = "1000114557";//"Piura";
} elseif ($_POST['sede'] == "Tarapoto") {
	$local = "1000136996";//"Tarapoto";
} elseif ($_POST['sede'] == "Trujillo") {
	$local = "1000098770";//"Trujillo";
} elseif ($_POST['sede'] == "Callao") {
	$local = "6700000000";//"Callao";
} elseif ($_POST['sede'] == "Huaraz") {
	$local = "6800000000";//"Huaraz";
} elseif ($_POST['sede'] == "Moyobamba") {
	$local = "6900000000";//"Moyobamba";
}


if ($carrera == "Administración") {
    $codcarrera = "3-20211";//Administración"";
} elseif ($carrera == "Arquitectura") {
    $codcarrera = "7-20211";//"Arquitectura";
} elseif ($carrera == "Ciencias de la Comunicación") {
    $codcarrera = "10-20211";//"Ciencias de la Comunicación";
} elseif ($carrera == "Ciencias del Deporte") {
    $codcarrera = "1-20211";//"Ciencias del Deporte";
} elseif ($carrera == "Contabilidad") {
    $codcarrera = "12-20211";//"Contabilidad";
} elseif ($carrera == "Derecho") {
    $codcarrera = "13-20211";//"Derecho";
} elseif ($carrera == "Educación Inicial") {
    $codcarrera = "16-20211";//"Educación Inicial";
} elseif ($carrera == "Enfermería") {
    $codcarrera = "17-20211";//"Enfermería";
} elseif ($carrera == "Ingeniería Ambiental") {
    $codcarrera = "22-20211";//"Ingeniería Ambiental";
} elseif ($carrera == "Ingeniería Civil") {
    $codcarrera = "11-20211";//"Ingeniería Civil";
} elseif ($carrera == "Ingeniería de Sistemas") {
    $codcarrera = "39-20211";//"Ingeniería de Sistemas";
} elseif ($carrera == "Ingeniería Mecánica Eléctrica") {
    $codcarrera = "24-20211";//"Ingeniería Mecánica Eléctrica";
} elseif ($carrera == "Ingeniería Industrial") {
    $codcarrera = "27-20211";//"Ingeniería Industrial";
} elseif ($carrera == "Marketing y Dirección de Empresas") {
    $codcarrera = "29-20211";//"Marketing y Dirección de Empresas";
} elseif ($carrera == "Medicina") {
    $codcarrera = "31-20211";//"Medicina";
} elseif ($carrera == "Nutrición") {
    $codcarrera = "34-20211";//"Nutrición";
} elseif ($carrera == "Psicología") {
    $codcarrera = "38-20211";//"Psicología";
} elseif ($carrera == "Traducción e Interpretación") {
    $codcarrera = "28-20211";//"Traducción e Interpretación";
} elseif ($carrera == "Administración en Turismo y Hotelería") {
    $codcarrera = "8-20211";//"Administración en Turismo y Hotelería";
} elseif ($carrera == "Estomatología") {
    $codcarrera = "20-20211";//"Estomatología";
} elseif ($carrera == "Economía") {
    $codcarrera = "14-20211";//"Economía";
} elseif ($carrera == "Negocios-Internacionales") {
    $codcarrera = "33-20211";//"Negocios-Internacionales";
} elseif ($carrera == "Ingeniería de Minas") {
    $codcarrera = "25-20211";//"Ingeniería de Minas";
} elseif ($carrera == "Educación Primaria") {
    $codcarrera = "18-20211";//"Educación Primaria";
} elseif ($carrera == "Arte y Diseño Gráfico Empresarial") {
    $codcarrera = "2-20211";//"Arte y Diseño Gráfico Empresarial";
}

$programa = "Pregrado";


$post_data="dni=".$dni."&nombre=".$nombres."&apellidos=".$apellidos."&email=".$email."&celular=".$celular."&sede=".$local."&carrera=".$codcarrera."&programa=".$programa;

$ch = curl_init('https://go.pardot.com/l/529582/2021-02-03/4r21hs');                                                                      
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);                                                                  
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded')); 

$result = curl_exec($ch);

?>