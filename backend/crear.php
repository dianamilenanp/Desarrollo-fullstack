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

?>
    <header>
        <div class="logo">
            <img src="img/logoHeladeria.png" alt="logo_empresa">
        </div>
        <nav>
            <input type="checkbox" id="menu-toggle">
            <label for="menu-toggle">&#9776;</label>
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                
            </ul>
        </nav>
    </header>
    <section>

    
    
    <div <?php if (isset($_POST['btnCrear']) || isset($_POST['btnEditar'])) { ?>>

		<div <?php if (isset($_POST['btnEditar'])) {
														$codigo = $_GET['id'];
														$sql = "select * from helados where id= $codigo";
														$resultado_set = mysqli_query($conexion, $sql);
														$row = mysqli_fetch_array($resultado_set);
													}
						?>>	
			<form  action="<?php if (!isset($row)) { ?>crud.php" <?php } else { ?>crud.php?id=<?php echo $row["id"] ?>" <?php } ?> method="post">
            <?php if (!isset($row)) { echo '<h1>Crear productos</h1>';}else {echo '<h1>Actualizar productos</h1>';} ?>		
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label>Código</label>
                        <input type="text" class="form-control" name="codigo" value="<?php if (isset($row)) {
																				echo $row['codigo'];
																			} ?>" placeholder="Codigo" required="">
                    </div>
                    <div class="form-group col-md-6">
                    <label>Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="<?php if (isset($row)) {
																				echo $row['nombre'];
																			} ?>" placeholder="Nombre" required=""> 
                    </div>
                    <div class="form-group col-md-6">
                    <label>Descripción</label>
                        <input type="text" class="form-control" name="descripcion" value="<?php if (isset($row)) {
																				echo $row['descripcion'];
																			} ?>" placeholder="Descripcion" required=""> 
                    </div>
                    <div class="form-group col-md-6">
                    <label>Precio</label>
                        <input type="number" class="form-control" name="precio"  value="<?php if (isset($row)) {
																				echo $row['precio'];
																			} ?>" placeholder="Precio" required=""> 
                    </div>
                    <div class="form-group col-md-6">
                    <label>Cantidad</label>
                        <input type="number" class="form-control" name="cantidad" value="<?php if (isset($row)) {
																				echo $row['cantidad'];
																			} ?>" placeholder="Cantidad" required=""> 
                    </div>
                     
                    <div class="form-group col-md-6">                                                
                        <input type="submit" class="btn btn-primary" value="<?php if (isset($row)) {
															echo "Actualizar";
														} else {
															echo "Crear";
														} ?>" 
							name="<?php if (!isset($row)) { ?>btnAgregar" <?php } else { ?>btnActualizar" <?php } ?>						
						>
                    </div> 
                </div> 
			</form>     
		</div>
		<br>
		
    </div>
    <?php } ?>



    </section>

    <footer>
        <div class="logo">
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
        <p>Derechos reservados Diana Niño</p>
    </footer>
</body>

</html>