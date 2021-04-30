<?php
	function conexion(){
		$conn = mysql_connect('localhost', 'somosucv_smvvocg', 'x)Y1=Y.%BUgQ') or die ('Error conectando a la base de datos');
		mysql_select_db('somosucv_DB7');
		mysql_query("SET NAMES 'utf8'");
		return($conn);
	}
?>
