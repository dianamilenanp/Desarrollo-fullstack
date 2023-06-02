<?php
  

  include 'db/conexion.php';
  
    $codigo = "'".$_POST["codigo"]."'";
    $nombre = "'".$_POST["nombre"]."'";
    $descripcion = "'".$_POST["descripcion"]."'";
    $precio = $_POST["precio"];
    $cantidad = $_POST["cantidad"];

  if (isset($_POST['btnAgregar'])) {
    

    $sql ="INSERT INTO helados(codigo,nombre,descripcion,precio,cantidad,estado) 
    VALUES($codigo,$nombre,$descripcion,$precio,$cantidad,1)";
    $resultado_set = mysqli_query($conexion, $sql);

    if ($resultado_set) {

      header("location: administrar.php");
    }
  }
  
  if (isset($_POST['btnActualizar'])) {
    $id = $_GET['id'];
    $sql = "update helados set codigo=$codigo, 
            nombre=$nombre,
            descripcion=$descripcion,
            precio=$precio,
            cantidad=$cantidad
          where id =$id";

    $resultado_set = mysqli_query($conexion, $sql);

    if ($resultado_set) {

      header("location: administrar.php");
    }
  }
  if (isset($_POST['btnEliminar'])) {
    $id = $_GET['id'];
    $sql = "update helados set estado=0 where id =$id";
    $resultado_set = mysqli_query($conexion, $sql);
    if ($resultado_set) {
        header("Location: administrar.php");
        exit;
    }
    
}
  ?>