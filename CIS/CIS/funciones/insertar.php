<?php

require_once('bd.php');



$nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
$apellidoPA = filter_var($_POST['apellidoPA'], FILTER_SANITIZE_STRING);
$apellidoMA = filter_var($_POST['apellidoMA'], FILTER_SANITIZE_STRING);
$celular = filter_var($_POST['celular'], FILTER_SANITIZE_STRING);
$dni = filter_var($_POST['dni'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$campus = filter_var($_POST['campus'], FILTER_SANITIZE_STRING);
$curso = filter_var($_POST['curso'], FILTER_SANITIZE_STRING);
$consulta = filter_var($_POST['consulta'], FILTER_SANITIZE_STRING);

try {
    $stmt = $conn->prepare("INSERT INTO leads (nombre, apellidoP, apellidoM,celular,dni,correo,campus,curso,consulta) VALUES (?, ?, ?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssssss", $nombre, $apellidoPA, $apellidoMA, $celular, $dni, $email, $campus, $curso, $consulta);
    $stmt->execute();
    if ($stmt->affected_rows == 1) {
        $respuesta = array(
            'ok' => 'true',
            'datos' => array(
                'nombre' => $nombre,
            )
        );
    }
    $stmt->close();
    $conn->close();
} catch (Exception $e) {
    $respuesta = array(
        'ok' => 'false',
        'error' => $e->getMessage()
    );
}
echo json_encode($respuesta);
