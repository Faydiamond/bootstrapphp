<!DOCTYPE html>
<html lang="es">
<head>
  <title></title>
  <html lang="es">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <link rel="stylesheet" href="css/bootstrap.css">
  <!--<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
  <!--Css:-->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
<section id="navegacion">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand font" href="#">WebSite Name</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Productos</a></li>
        <li><a href="index.php">Volver</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
</section><br>
  <div class="container">
  <ul class="nav nav-tabs">
    <li class="active color-font"><a data-toggle="tab" href="#home">Inicio</a></li>
    <li><a data-toggle="tab" href="#menu1" class="color-font">Nuevo Producto</a></li>
    <li><a data-toggle="tab" href="#menu2" class="color-fonr">Ver Productos</a></li>
  </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Inicio</h3>
      <p>Explicacion</p>
    </div>
    <div id="menu1" class="tab-pane fade"><br><br>
      <form method="post" action="producto.php">
        <div class="container-fluid">
          <div class="row">
          <div class="col-md-6 col-xs-6 col-lg-6 col-lg-6">
            <label for="validationCustom04">Id Producto</label>
            <input type="text" class="form-control"  name="Id" id="validationCustom04" placeholder="Identificador" required>
          </div>
          <div class="col-md-6 col-xs-6 col-lg-6 col-lg-6">
            <label for="validationCustom05">Clave Producto</label>
            <input type="text" class="form-control" id="validationCustom05" placeholder="Clave" name="Cl" required>
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-6 col-xs-6 col-lg-6 col-lg-6">
            <label for="validationCustom05">Producto</label>
            <input type="text" class="form-control" id="validationCustom05" placeholder="Nombre Producto" name="Pr" required>
          </div>
          <div class="col-md-6 col-xs-6 col-lg-6 col-lg-6">
            <label for="validationCustom05">Precio</label>
            <input type="text" class="form-control" id="validationCustom05" placeholder="Precio" name="Pre" required>
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
              <textarea name="De" rows="8" cols="80" class="form-control" placeholder="Descripcion"  required></textarea>
          </div>
        </div>
        <br><br>
        <button type="submit" class="btn btn-pro btn-block" name="Boton" >Insertar</button><br>
        </div>
        </form>
    </div>
    <div id="menu2" class="tab-pane fade">

<div class="container">
  <table class="table table-hover table-responsive">
    <thead>
      <tr>
        <th>ProductoId</th>
        <th>ClaveProducto</th>
        <th>Producto</th>
        <th>Precio</th>
        <th>Descripcion</th>
      </tr>
    </thead>
    <tbody>
  <?php
  include("Conect.php");
  $con=mysql_connect($host,$user,$pw) or die("Problemas de conexion");
  mysql_select_db($db,$con) or die("Problemas al conectar con la bd");

  $sql = "SELECT * FROM producto";
  $sql = mysql_query($sql,$con);

  while($rs=mysql_fetch_array($sql))
  {
    echo "<tr>"
           ."<td>".$rs['ProductoId']."</td>"
           ."<td>".$rs['ClavePro']."</td>"
           ."<td>".$rs['Producto']."</td>"
           ."<td>".$rs['Precio']."</td>"
           ."<td>".$rs['Descripcion']."</td>"
        ."</tr>";
  }
  ?>
    </tbody>
  </table>
</div>
</div>
    </div>
  </div>
</div>
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
        <div class="container-fluid copyright">
          <div class="row">
            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1"></div>
            <div class="col-md-10 col-sm-10 col-xs-10 col-lg-10">
              <img src="img/prueba2.png" alt="">
              <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
            </div>
            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer><!-- #footer -->
<br><br>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
</body>
</html>
