<?php
$a=$_GET['clave_pro'];
$b=$_GET['claves'];
$c=$_GET['nombres'];
$d=$_GET['precio'];
$e=$_GET['des'];
$conexion=mysql_connect("localhost","root","1234") or die ("Error e la conexion");
mysql_select_db("base",$conexion) or die ("Error en la base de datos");
$sql=" insert into producto (Producto_id, Clave_pro, Producto, Precio, Descripcion) values ('$a', '$b', '$c', '$d', '$e') ";
mysql_query($sql,$conexion) or die ("Error de SQL");
mysql_close($conexion);
echo "los datos se insertaron";
?>

