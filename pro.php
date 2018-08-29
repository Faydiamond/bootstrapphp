<?php
include("Conect.php");

if ( (isset($_POST['button']))) // ah ademas de validar el objeto que dispara el evento en este caso un boton de un form
{
  $Cl=$_POST['Cl'];
  $No=$_POST['No'];
  $con=mysql_connect($host,$user,$pw) or die("Problemas de conexion");

  mysql_select_db($db,$con) or die("Problemas al conectar con la bd");

  mysql_query("INSERT INTO provedor (ClavePro,Nombre) values ('$Cl','$No')",$con);

  //echo "insertado";
  echo "<script>alert('Provedor Insertado Correctamente!');location.href ='javascript:history.back()';</script>";
    mysql_close() ;
  }else {
    # code..echo
    //echo "Problemas al insertar";
    echo "<script>alert('Problemas de inserciòn');location.href ='javascript:history.back()';</script>";

}


 ?>
