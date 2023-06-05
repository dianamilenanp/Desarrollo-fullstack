<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/27010df775.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/logoHeladeria.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
 
    <title>Frozen Magic</title>

</head>

<body>
<?php
include 'db/conexion.php';
$query = "SELECT * FROM helados";
?>
<nav class="navbar">
    <div class="navbar-container container">
        <input type="checkbox" name="" id="">
        <div class="hamburger-lines">
            <span class="line line1"></span>
            <span class="line line2"></span>
            <span class="line line3"></span>
        </div>
        <ul class="menu-items">
            <li><a href="index.php#seccionInicio" class="inicio">Inicio</a></li>
            <li> <a href="index.php#seccionProductos">Nuestros productos</a></li>
            <li><a href="index.php#seccionQuienesSomos">Sobre nosotros</a></li>
            <li><a href="index.php#seccionQuienesSomos">Contáctenos</a></li>
            
        </ul>
        <img src="img/logoHeladeria.png" alt="logo_empresa" class="logo" >
    </div>
</nav>
<br><br>
    <section>

    <h1>Administrar productos</h1>
    <form action="crear.php" method="post">
    <input  class="btn btn-success" name="btnCrear"  type="submit" value="Crear" >
</form>
<div class="tabla">
    <table class="table">
        <?php 

$daticos = mysqli_query($conexion, $query);

echo '
  <thead class="thead-dark">
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripción</th>
      <th scope="col">Precio</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Estado</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>';
  if ($daticos) {

    while ($datos2 = mysqli_fetch_array($daticos)){
        $codigo = $datos2['codigo'];
        $nombre = $datos2['nombre'];
        $descripcion = $datos2['descripcion'];
        $precio = $datos2['precio'];
        $cantidad = $datos2['cantidad'];
        $estado = $datos2['estado'];
        echo '
            <tr>
                <td scope="row">'.$codigo.'</td>                
                <td>'.$nombre.'</td>
                <td>'.$descripcion.'</td>
                <td>'.$precio.'</td>
                <td>'.$cantidad.'</td>
                <td>'.$estado.'</td>
                
                <td>
                <form action="crear.php?id='. $datos2['id'].'" method="post">
                 <input  class="btn btn-primary" name="btnEditar"  type="submit" value="Editar" >
                </form>
                </td>
                <td>
                <form action="crud.php?id='.$datos2['id'].'" method="post" >
                 <input  class="btn btn-danger" name="btnEliminar"  type="submit" value="Eliminar" >
                </form>
                </td>
                
            </tr>
        ';
    }
} 
'</tbody>'
  ?>
</table>
</div>
<?php



?>


    </section>

    <footer>
        <div class="logo-footer">
            <img src="img/logoHeladeria.png" alt="">
        </div>
        <div class="menu">    
           <ul>
               <li>
                   <a href="#seccionInicio">Inicio</a>
               </li>
               <li>
                   <a href="#seccionProductos">Nuestros productos</a>
               </li>
               <li>
                   <a href="#seccionQuienesSomos">Sobre nosotros</a>
               </li>
             </ul>
        </div>
        <div class="redesSociales">
            <p>Siguenos!!</p>
            <i class="fa-brands fa-whatsapp"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-facebook-f"></i>
        </div>
        <p class="copiright">Copyright@frozen Magic</p>
    </footer>
</body>

</html>