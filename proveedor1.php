<?php
$a=$_POST['clave'];
$b=$_POST['nombre'];
$conexion=mysql_connect("localhost","root","1234") or die ("Error e la conexion");
mysql_select_db("base",$conexion) or die ("Error en la base de datos");
$sql=" insert into proveedor (Clave_pro, Nombre) values ('$clave', '$nombre') ";
mysql_query($sql,$conexion) or die ("Error de SQL");
mysql_close($conexion);
echo "los datos se insertaron";
?>
