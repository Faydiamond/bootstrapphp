<?php
include("Conect.php");

if ( (isset($_POST['Boton'])))
{
  $Id=$_POST['Id'];
  $Cl=$_POST['Cl'];
  $Pr=$_POST['Pr'];
  $Pre=$_POST['Pre'];
  $De=$_POST['De'];

  $conect=mysql_connect($host,$user,$pw) or die("Problemas de conexion");

  mysql_select_db($db,$conect) or die("Problemas al conectar con la bd");

  mysql_query("INSERT INTO producto (ProductoId,ClavePro,Producto,Precio,Descripcion) values ('$Id','$Cl','$Pr','$Pre','$De')",$conect);

  //echo "Insertado";
  echo "<script>alert('Producto Insertado Correctamente!');location.href ='javascript:history.back()';</script>";
    mysql_close() ;
  }else {
    # code..echo
    //echo "Problemas al insertar";
    echo "<script>alert('Problemas de inserciòn');location.href ='javascript:history.back()';</script>";

}


 ?>
