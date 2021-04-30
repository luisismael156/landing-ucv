<?php
include "conexion.php";
$db=connect();
$query=$db->query("select * from ubdistrito where idProv=$_GET[idProv]");
$states = array();
while($r=$query->fetch_object()){ $states[]=$r; }
if(count($states)>0){
print "<option value=''>Seleccione Distrito</option>";
foreach ($states as $s) {
	print "<option value='$s->id'>$s->name</option>";
}
}else{
print "<option value=''>-- NO HAY DATOS --</option>";
}
?>