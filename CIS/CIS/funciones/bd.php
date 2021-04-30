<?php

// credenciales de la base de datos
define('DB_USUARIO', 'root');
define('DB_PASSWORD', '123456');
define('DB_HOST', 'localhost');
define('DB_NOMBRE', 'formulariophp');

$conn = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NOMBRE );


